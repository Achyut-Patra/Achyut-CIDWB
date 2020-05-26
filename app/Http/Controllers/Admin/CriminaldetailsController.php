<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Criminaldetails;
use App\Http\Requests\CreateCriminaldetailsRequest;
use App\Http\Requests\UpdateCriminaldetailsRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class CriminaldetailsController extends Controller {

	/**
	 * Display a listing of criminaldetails
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $criminaldetails = Criminaldetails::all();

		return view('admin.criminaldetails.index', compact('criminaldetails'));
	}

	/**
	 * Show the form for creating a new criminaldetails
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.criminaldetails.create');
	}

	/**
	 * Store a newly created criminaldetails in storage.
	 *
     * @param CreateCriminaldetailsRequest|Request $request
	 */
	public function store(CreateCriminaldetailsRequest $request)
	{
	    $request = $this->saveFiles($request);
		Criminaldetails::create($request->all());

		return redirect()->route(config('quickadmin.route').'.criminaldetails.index');
	}

	/**
	 * Show the form for editing the specified criminaldetails.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$criminaldetails = Criminaldetails::find($id);
	    
	    
		return view('admin.criminaldetails.edit', compact('criminaldetails'));
	}

	/**
	 * Update the specified criminaldetails in storage.
     * @param UpdateCriminaldetailsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateCriminaldetailsRequest $request)
	{
		$criminaldetails = Criminaldetails::findOrFail($id);

        $request = $this->saveFiles($request);

		$criminaldetails->update($request->all());

		return redirect()->route(config('quickadmin.route').'.criminaldetails.index');
	}

	/**
	 * Remove the specified criminaldetails from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Criminaldetails::destroy($id);

		return redirect()->route(config('quickadmin.route').'.criminaldetails.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Criminaldetails::destroy($toDelete);
        } else {
            Criminaldetails::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.criminaldetails.index');
    }

}
