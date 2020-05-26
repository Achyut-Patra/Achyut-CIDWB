<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Officialrank;
use App\Http\Requests\CreateOfficialrankRequest;
use App\Http\Requests\UpdateOfficialrankRequest;
use Illuminate\Http\Request;



class OfficialrankController extends Controller {

	/**
	 * Display a listing of officialrank
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $officialrank = Officialrank::all();

		return view('admin.officialrank.index', compact('officialrank'));
	}

	/**
	 * Show the form for creating a new officialrank
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.officialrank.create');
	}

	/**
	 * Store a newly created officialrank in storage.
	 *
     * @param CreateOfficialrankRequest|Request $request
	 */
	public function store(CreateOfficialrankRequest $request)
	{
	    
		Officialrank::create($request->all());

		return redirect()->route(config('quickadmin.route').'.officialrank.index');
	}

	/**
	 * Show the form for editing the specified officialrank.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$officialrank = Officialrank::find($id);
	    
	    
		return view('admin.officialrank.edit', compact('officialrank'));
	}

	/**
	 * Update the specified officialrank in storage.
     * @param UpdateOfficialrankRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateOfficialrankRequest $request)
	{
		$officialrank = Officialrank::findOrFail($id);

        

		$officialrank->update($request->all());

		return redirect()->route(config('quickadmin.route').'.officialrank.index');
	}

	/**
	 * Remove the specified officialrank from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Officialrank::destroy($id);

		return redirect()->route(config('quickadmin.route').'.officialrank.index');
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
            Officialrank::destroy($toDelete);
        } else {
            Officialrank::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.officialrank.index');
    }

}
