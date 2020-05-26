<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Keyofficial;
use App\Officialtype;
use App\Officialrank;
use App\Http\Requests\CreateKeyofficialRequest;
use App\Http\Requests\UpdateKeyofficialRequest;
use Illuminate\Http\Request;
use DB;

class KeyofficialController extends Controller {

	/**
	 * Display a listing of keyofficial
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $keyofficial = Keyofficial::all();

		return view('admin.keyofficial.index', compact('keyofficial'));
	}

	/**
	 * Show the form for creating a new keyofficial
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    $officialtype = Officialtype::all();
	    $officialrank = Officialrank::all();
	    return view('admin.keyofficial.create', compact('officialtype','officialrank'));
	}

	/**
	 * Store a newly created keyofficial in storage.
	 *
     * @param CreateKeyofficialRequest|Request $request
	 */
	public function store(CreateKeyofficialRequest $request)
	{
	    
		Keyofficial::create($request->all());

		return redirect()->route(config('quickadmin.route').'.keyofficial.index');
	}

	/**
	 * Show the form for editing the specified keyofficial.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$keyofficial = Keyofficial::find($id);
	    
	    
		return view('admin.keyofficial.edit', compact('keyofficial'));
	}

	/**
	 * Update the specified keyofficial in storage.
     * @param UpdateKeyofficialRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateKeyofficialRequest $request)
	{
		$keyofficial = Keyofficial::findOrFail($id);

        

		$keyofficial->update($request->all());

		return redirect()->route(config('quickadmin.route').'.keyofficial.index');
	}

	/**
	 * Remove the specified keyofficial from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Keyofficial::destroy($id);

		return redirect()->route(config('quickadmin.route').'.keyofficial.index');
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
            Keyofficial::destroy($toDelete);
        } else {
            Keyofficial::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.keyofficial.index');
    }

}
