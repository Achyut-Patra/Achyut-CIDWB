<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Stakelevel;
use App\Http\Requests\CreateStakelevelRequest;
use App\Http\Requests\UpdateStakelevelRequest;
use Illuminate\Http\Request;



class StakelevelController extends Controller {

	/**
	 * Display a listing of stakelevel
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $stakelevel = Stakelevel::all();

		return view('admin.stakelevel.index', compact('stakelevel'));
	}

	/**
	 * Show the form for creating a new stakelevel
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.stakelevel.create');
	}

	/**
	 * Store a newly created stakelevel in storage.
	 *
     * @param CreateStakelevelRequest|Request $request
	 */
	public function store(CreateStakelevelRequest $request)
	{
	    
		Stakelevel::create($request->all());

		return redirect()->route(config('quickadmin.route').'.stakelevel.index');
	}

	/**
	 * Show the form for editing the specified stakelevel.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$stakelevel = Stakelevel::find($id);
	    
	    
		return view('admin.stakelevel.edit', compact('stakelevel'));
	}

	/**
	 * Update the specified stakelevel in storage.
     * @param UpdateStakelevelRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateStakelevelRequest $request)
	{
		$stakelevel = Stakelevel::findOrFail($id);

        

		$stakelevel->update($request->all());

		return redirect()->route(config('quickadmin.route').'.stakelevel.index');
	}

	/**
	 * Remove the specified stakelevel from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Stakelevel::destroy($id);

		return redirect()->route(config('quickadmin.route').'.stakelevel.index');
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
            Stakelevel::destroy($toDelete);
        } else {
            Stakelevel::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.stakelevel.index');
    }

}
