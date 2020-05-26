<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Statedet;
use App\Http\Requests\CreateStatedetRequest;
use App\Http\Requests\UpdateStatedetRequest;
use Illuminate\Http\Request;



class StatedetController extends Controller {

	/**
	 * Display a listing of statedet
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $statedet = Statedet::all();

		return view('admin.statedet.index', compact('statedet'));
	}

	/**
	 * Show the form for creating a new statedet
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.statedet.create');
	}

	/**
	 * Store a newly created statedet in storage.
	 *
     * @param CreateStatedetRequest|Request $request
	 */
	public function store(CreateStatedetRequest $request)
	{
	    
		Statedet::create($request->all());

		return redirect()->route(config('quickadmin.route').'.statedet.index');
	}

	/**
	 * Show the form for editing the specified statedet.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$statedet = Statedet::find($id);
	    
	    
		return view('admin.statedet.edit', compact('statedet'));
	}

	/**
	 * Update the specified statedet in storage.
     * @param UpdateStatedetRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateStatedetRequest $request)
	{
		$statedet = Statedet::findOrFail($id);

        

		$statedet->update($request->all());

		return redirect()->route(config('quickadmin.route').'.statedet.index');
	}

	/**
	 * Remove the specified statedet from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Statedet::destroy($id);

		return redirect()->route(config('quickadmin.route').'.statedet.index');
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
            Statedet::destroy($toDelete);
        } else {
            Statedet::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.statedet.index');
    }

}
