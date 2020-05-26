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
        //$keyofficial = Keyofficial::all();
		$keyofficial = DB::table('keyofficial AS t1')
            ->leftJoin('officialtype AS t2', 't1.type', '=', 't2.id')
			->leftJoin('officialrank AS t3', 't1.rank', '=', 't3.id')
            ->select('t1.*', 't2.officialtype', 't3.rank as officialrank')
			->orderBy('t1.id', 'desc')
            ->get();

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
	    $officialtype = Officialtype::all();
	    $officialrank = Officialrank::all();
		//echo "<pre>"; print_r($officialrank); die;
		return view('admin.keyofficial.edit', compact('keyofficial','officialtype','officialrank'));
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
	
	public function activeinactive($id_hash,$action){ //echo $id_hash; echo $action; die();
		
		//$upload = Upload::findOrFail($id_hash);
		//$upload->update(['flag' => 0]);
		
		if($action=='block'){ //echo 'block'; die;
			$keyofficial = Keyofficial::findOrFail($id_hash);
			$keyofficial->update(['flag' => 1]);
			//$keyofficial = Keyofficial::findOrFail($id_hash);
			//$keyofficial->update(['flag' => 1]);
		} else if($action=='unblock'){ //echo 'unblock'; die;
			$keyofficial = Keyofficial::findOrFail($id_hash);
			$keyofficial->update(['flag' => 0]);
		} else {
			show_404();
		}
		//echo "done";
		return "done";
		
		 
	    /*//echo $id_hash;
		$this->load->model('upload/upload_model');

		if($action!=NULL && $id_hash!=NULL && strlen($id_hash)==32){
			if($action=='unblock'){
				$this->upload_model->active($id_hash);
			} elseif($action =='block'){
				$this->upload_model->inactive($id_hash);
			} else{
				show_404();
			}
	    	//	echo 'done';

		} else {
			show_404();
		}*/
	}
	
	public function saveorder($id_hash,$order_val){ //echo $id_hash; echo $action; die();
		
		if($order_val <> ''){ //echo 'block'; die;
			$keyofficial = Keyofficial::findOrFail($id_hash);
			$keyofficial->update(['order' => $order_val]);
		} else {
			show_404();
		}
		//echo "done";
		return "done";
	}
}
