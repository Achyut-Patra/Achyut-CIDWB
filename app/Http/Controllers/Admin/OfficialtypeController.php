<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Officialtype;
use App\Http\Requests\CreateOfficialtypeRequest;
use App\Http\Requests\UpdateOfficialtypeRequest;
use Illuminate\Http\Request;



class OfficialtypeController extends Controller {

	/**
	 * Display a listing of officialtype
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $officialtype = Officialtype::all();

		return view('admin.officialtype.index', compact('officialtype'));
	}

	/**
	 * Show the form for creating a new officialtype
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.officialtype.create');
	}

	/**
	 * Store a newly created officialtype in storage.
	 *
     * @param CreateOfficialtypeRequest|Request $request
	 */
	public function store(CreateOfficialtypeRequest $request)
	{
	    print($request);
	    die();
		Officialtype::create($request->all());

		return redirect()->route(config('quickadmin.route').'.officialtype.index');
	}

	/**
	 * Show the form for editing the specified officialtype.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$officialtype = Officialtype::find($id);
	    
	    
		return view('admin.officialtype.edit', compact('officialtype'));
	}

	/**
	 * Update the specified officialtype in storage.
     * @param UpdateOfficialtypeRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateOfficialtypeRequest $request)
	{
		$officialtype = Officialtype::findOrFail($id);

        

		$officialtype->update($request->all());

		return redirect()->route(config('quickadmin.route').'.officialtype.index');
	}

	/**
	 * Remove the specified officialtype from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Officialtype::destroy($id);

		return redirect()->route(config('quickadmin.route').'.officialtype.index');
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
            Officialtype::destroy($toDelete);
        } else {
            Officialtype::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.officialtype.index');
    }

}
