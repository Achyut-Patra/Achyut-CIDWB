<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Importantlinks;
use App\Http\Requests\CreateImportantlinksRequest;
use App\Http\Requests\UpdateImportantlinksRequest;
use Illuminate\Http\Request;



class ImportantlinksController extends Controller {

	/**
	 * Display a listing of importantlinks
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $importantlinks = Importantlinks::all();

		return view('admin.importantlinks.index', compact('importantlinks'));
	}

	/**
	 * Show the form for creating a new importantlinks
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.importantlinks.create');
	}

	/**
	 * Store a newly created importantlinks in storage.
	 *
     * @param CreateImportantlinksRequest|Request $request
	 */
	public function store(CreateImportantlinksRequest $request)
	{
	    
		Importantlinks::create($request->all());

		return redirect()->route(config('quickadmin.route').'.importantlinks.index');
	}

	/**
	 * Show the form for editing the specified importantlinks.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$importantlinks = Importantlinks::find($id);
	    
	    
		return view('admin.importantlinks.edit', compact('importantlinks'));
	}

	/**
	 * Update the specified importantlinks in storage.
     * @param UpdateImportantlinksRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateImportantlinksRequest $request)
	{
		$importantlinks = Importantlinks::findOrFail($id);

        

		$importantlinks->update($request->all());

		return redirect()->route(config('quickadmin.route').'.importantlinks.index');
	}

	/**
	 * Remove the specified importantlinks from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Importantlinks::destroy($id);

		return redirect()->route(config('quickadmin.route').'.importantlinks.index');
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
            Importantlinks::destroy($toDelete);
        } else {
            Importantlinks::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.importantlinks.index');
    }
	
	public function activeinactive($id_hash,$action){ //echo $id_hash; echo $action; die();
		
		if($action=='block'){ //echo 'block'; die;
			$importantlinks = Importantlinks::findOrFail($id_hash);
			$importantlinks->update(['flag' => 1]);
			//$keyofficial = Keyofficial::findOrFail($id_hash);
			//$keyofficial->update(['flag' => 1]);
		} else if($action=='unblock'){ //echo 'unblock'; die;
			$importantlinks = Importantlinks::findOrFail($id_hash);
			$importantlinks->update(['flag' => 0]);
		} else {
			show_404();
		}
		return "done";
	}
	
	public function saveorder($id_hash,$order_val){ //echo $id_hash; echo $action; die();
		
		if($order_val <> ''){ 
			$importantlinks = Importantlinks::findOrFail($id_hash);
			$importantlinks->update(['sort_order' => $order_val]);
		} else {
			show_404();
		}
		//echo "done";
		return "done";
	}
	

}
