<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Functions;
use App\Http\Requests\CreateFunctionsRequest;
use App\Http\Requests\UpdateFunctionsRequest;
use Illuminate\Http\Request;



class FunctionsController extends Controller {

	/**
	 * Display a listing of functions
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $functions = Functions::all();

		return view('admin.functions.index', compact('functions'));
	}

	/**
	 * Show the form for creating a new functions
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.functions.create');
	}

	/**
	 * Store a newly created functions in storage.
	 *
     * @param CreateFunctionsRequest|Request $request
	 */
	public function store(CreateFunctionsRequest $request)
	{
	    
		Functions::create($request->all());

		return redirect()->route(config('quickadmin.route').'.functions.index');
	}

	/**
	 * Show the form for editing the specified functions.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$functions = Functions::find($id);
	    
	    
		return view('admin.functions.edit', compact('functions'));
	}

	/**
	 * Update the specified functions in storage.
     * @param UpdateFunctionsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateFunctionsRequest $request)
	{
		$functions = Functions::findOrFail($id);

        

		$functions->update($request->all());

		return redirect()->route(config('quickadmin.route').'.functions.index');
	}

	/**
	 * Remove the specified functions from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Functions::destroy($id);

		return redirect()->route(config('quickadmin.route').'.functions.index');
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
            Functions::destroy($toDelete);
        } else {
            Functions::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.functions.index');
    }

}
