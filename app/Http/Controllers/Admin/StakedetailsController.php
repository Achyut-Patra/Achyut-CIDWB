<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Stakedetails;
use App\Stakelevel;
use App\Http\Requests\CreateStakedetailsRequest;
use App\Http\Requests\UpdateStakedetailsRequest;
use Illuminate\Http\Request;



class StakedetailsController extends Controller {

	/**
	 * Display a listing of stakedetails
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $stakedetails = Stakedetails::all();
        $stakelevel = Stakelevel::all();

		return view('admin.stakedetails.index', compact('stakedetails','stakelevel'));
	}

	/**
	 * Show the form for creating a new stakedetails
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	     
	    $stakelevel = Stakelevel::all();
	    return view('admin.stakedetails.create',compact('stakelevel'));
	}

	/**
	 * Store a newly created stakedetails in storage.
	 *
     * @param CreateStakedetailsRequest|Request $request
	 */
	public function store(CreateStakedetailsRequest $request)
	{
	    
		Stakedetails::create($request->all());

		return redirect()->route(config('quickadmin.route').'.stakedetails.index');
	}

	/**
	 * Show the form for editing the specified stakedetails.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$stakedetails = Stakedetails::find($id);
	    $foreignk = Stakedetails::find($id)->stakelevel;
		return view('admin.stakedetails.edit', compact('stakedetails','foreignk'));
	}

	/**
	 * Update the specified stakedetails in storage.
     * @param UpdateStakedetailsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateStakedetailsRequest $request)
	{
		$stakedetails = Stakedetails::findOrFail($id);

        

		$stakedetails->update($request->all());

		return redirect()->route(config('quickadmin.route').'.stakedetails.index');
	}

	/**
	 * Remove the specified stakedetails from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Stakedetails::destroy($id);

		return redirect()->route(config('quickadmin.route').'.stakedetails.index');
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
            Stakedetails::destroy($toDelete);
        } else {
            Stakedetails::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.stakedetails.index');
    }

}
