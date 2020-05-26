<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Ps;
use App\Http\Requests\CreatePsRequest;
use App\Http\Requests\UpdatePsRequest;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use DB;

class PsController extends Controller {

	/**
	 * Display a listing of ps
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $ps = Ps::latest()->paginate(1630);
        //$ps = DB::table('ps')->get();
    	//$ps = Ps::get(['ps_name']);
    		return view('admin.ps.index', compact('ps'));
    	
	}

	/**
	 * Show the form for creating a new ps
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    return view('admin.ps.create');
	}

	/**
	 * Store a newly created ps in storage.
	 *
     * @param CreatePsRequest|Request $request
	 */
	public function store(CreatePsRequest $request)
	{
	    
		Ps::create($request->all());

		return redirect()->route(config('quickadmin.route').'.ps.index');
	}

	/**
	 * Show the form for editing the specified ps.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$ps = Ps::find($id);
	    
	    
		return view('admin.ps.edit', compact('ps'));
	}

	/**
	 * Update the specified ps in storage.
     * @param UpdatePsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdatePsRequest $request)
	{
		$ps = Ps::findOrFail($id);

		$ps->update($request->all());

		return redirect()->route(config('quickadmin.route').'.ps.index');
	}

	/**
	 * Remove the specified ps from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Ps::destroy($id);

		return redirect()->route(config('quickadmin.route').'.ps.index');
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
            Ps::destroy($toDelete);
        } else {
            Ps::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.ps.index');
    }

}
