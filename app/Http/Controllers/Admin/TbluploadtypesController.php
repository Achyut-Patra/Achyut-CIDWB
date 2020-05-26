<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Tbluploadtypes;
use App\Http\Requests\CreateTbluploadtypesRequest;
use App\Http\Requests\UpdateTbluploadtypesRequest;
use Illuminate\Http\Request;



class TbluploadtypesController extends Controller {

	/**
	 * Display a listing of tbluploadtypes
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $tbluploadtypes = Tbluploadtypes::all()->sortByDesc("id");

		return view('admin.tbluploadtypes.index', compact('tbluploadtypes'));
	}

	/**
	 * Show the form for creating a new tbluploadtypes
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.tbluploadtypes.create');
	}

	/**
	 * Store a newly created tbluploadtypes in storage.
	 *
     * @param CreateTbluploadtypesRequest|Request $request
	 */
	public function store(CreateTbluploadtypesRequest $request)
	{
	    
		Tbluploadtypes::create($request->all());

		return redirect()->route(config('quickadmin.route').'.tbluploadtypes.index');
	}

	/**
	 * Show the form for editing the specified tbluploadtypes.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$tbluploadtypes = Tbluploadtypes::find($id);
	    
	    
		return view('admin.tbluploadtypes.edit', compact('tbluploadtypes'));
	}

	/**
	 * Update the specified tbluploadtypes in storage.
     * @param UpdateTbluploadtypesRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateTbluploadtypesRequest $request)
	{
		$tbluploadtypes = Tbluploadtypes::findOrFail($id);

        

		$tbluploadtypes->update($request->all());

		return redirect()->route(config('quickadmin.route').'.tbluploadtypes.index');
	}

	/**
	 * Remove the specified tbluploadtypes from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Tbluploadtypes::destroy($id);

		return redirect()->route(config('quickadmin.route').'.tbluploadtypes.index');
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
            Tbluploadtypes::destroy($toDelete);
        } else {
            Tbluploadtypes::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.tbluploadtypes.index');
    }
	
	public function activeinactive($id_hash,$action){ //echo $id_hash; echo $action; die();
		
		//$upload = Upload::findOrFail($id_hash);
		//$upload->update(['flag' => 0]);
		
		if($action=='block'){ //echo 'block'; die;
			$uploadtypes = Tbluploadtypes::findOrFail($id_hash);
			$uploadtypes->update(['flag' => 1]);
		} else if($action=='unblock'){ //echo 'unblock'; die;
			$uploadtypes = Tbluploadtypes::findOrFail($id_hash);
			$uploadtypes->update(['flag' => 0]);
		} else {
			show_404();
		}
		//echo "done";
		return "done";
	}
	

}
