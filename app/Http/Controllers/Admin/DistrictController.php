<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\District;
use App\Http\Requests\CreateDistrictRequest;
use App\Http\Requests\UpdateDistrictRequest;
use Illuminate\Http\Request;



class DistrictController extends Controller {

	/**
	 * Display a listing of district
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $district = District::paginate(100);

		return view('admin.district.index', compact('district'));
	}

	/**
	 * Show the form for creating a new district
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.district.create');
	}

	/**
	 * Store a newly created district in storage.
	 *
     * @param CreateDistrictRequest|Request $request
	 */
	public function store(CreateDistrictRequest $request)
	{
	    
		District::create($request->all());

		return redirect()->route(config('quickadmin.route').'.district.index');
	}

	/**
	 * Show the form for editing the specified district.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$district = District::find($id);
	    
	    
		return view('admin.district.edit', compact('district'));
	}

	/**
	 * Update the specified district in storage.
     * @param UpdateDistrictRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateDistrictRequest $request)
	{
		$district = District::findOrFail($id);

        

		$district->update($request->all());

		return redirect()->route(config('quickadmin.route').'.district.index');
	}

	/**
	 * Remove the specified district from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		District::destroy($id);

		return redirect()->route(config('quickadmin.route').'.district.index');
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
            District::destroy($toDelete);
        } else {
            District::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.district.index');
    }

}
