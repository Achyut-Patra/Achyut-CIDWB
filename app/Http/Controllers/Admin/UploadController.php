<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Upload;
use App\Tbluploadtypes;
use App\Http\Requests\CreateUploadRequest;
use App\Http\Requests\UpdateUploadRequest;
use Illuminate\Http\Request;
use File;


class UploadController extends Controller {

	/**
	 * Display a listing of upload
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $upload = Upload::with(['tbluploadtypes'])->get()->sortByDesc('id');
		
		return view('admin.upload.index', compact('upload'));
	}

	/**
	 * Show the form for creating a new upload
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    $uploadtypename = Tbluploadtypes::all();	    
		return view('admin.upload.create', compact('uploadtypename'));
	}

	/**
	 * Store a newly created upload in storage.
	 *
     * @param CreateUploadRequest|Request $request
	 */
	public function store(CreateUploadRequest $request)
	{
	     
		$title = $request->input('title');
		$description = $request->input('description');
		$flag = $request->input('flag');
		$upload_type_id = $request->input('upload_type_id_fk');
		
		if($request->hasfile('file_name')){
			
			$this->validate($request, ['file_name' => 'mimes:pdf']);
			
			$img = $request->file('file_name');
			
			$extension = $img->getClientOriginalExtension(); // getting image extension
			$fileName = rand(111, 99999) . '.' . $extension; // renaming image
			
			$img->move(public_path("uploads"),$fileName);
			
		} else {
			//return $request;
			$fileName = '';
		}
		
		Upload::create(['title' => $title,'description' => $description,'flag' => $flag,'upload_type_id_fk' => $upload_type_id,'file_name' => $fileName]);

		return redirect()->route(config('quickadmin.route').'.upload.index');
	}

	/**
	 * Show the form for editing the specified upload.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$uploadtypename = Tbluploadtypes::all();
		$upload = Upload::find($id);
	    
		return view('admin.upload.edit', compact('upload','uploadtypename'));
	}

	/**
	 * Update the specified upload in storage.
     * @param UpdateUploadRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateUploadRequest $request)
	{
		
		//==========================Start=================================
		$title = $request->input('title');
		$description = $request->input('description');
		$flag = $request->input('flag');
		$upload_type_id = $request->input('upload_type_id_fk');
		
		if($request->hasfile('file_name')){
			//$this->validate($request, ['file_name' => 'mimes:jpeg,png,jpg,doc,docx,pdf']);
			$this->validate($request, ['file_name' => 'mimes:pdf']);
			//$destinationPath = public_path() . '/assets/uploads/leavefiles/'; // upload path
			$img = $request->file('file_name');
			//echo $img; die;
			$extension = $img->getClientOriginalExtension(); // getting image extension
			$fileName = rand(111, 99999) . '.' . $extension; // renaming image
			
			$img->move(public_path("uploads"),$fileName);
			
		} else {
			//return $request;
			$fileName = $request->input('upload_file');
		}
		
		$upload = Upload::findOrFail($id);
		$upload->update(['title' => $title,'description' => $description,'flag' => $flag,'upload_type_id_fk' => $upload_type_id,'file_name' => $fileName]);
		
		//==========================End===================================
		
		return redirect()->route(config('quickadmin.route').'.upload.index');
	}

	/**
	 * Remove the specified upload from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Upload::destroy($id);
		return redirect()->route(config('quickadmin.route').'.upload.index');
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
            Upload::destroy($toDelete);
        } else {
            Upload::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.upload.index');
    }
	
	
	public function activeinactive($id_hash,$action){ 
		if($action=='block'){ 
			$upload = Upload::findOrFail($id_hash);
			$upload->update(['flag' => 1]);
		} else if($action=='unblock'){ 
			$upload = Upload::findOrFail($id_hash);
			$upload->update(['flag' => 0]);
		} else {
			show_404();
		}
		
		return "done";
		
	}
	

}