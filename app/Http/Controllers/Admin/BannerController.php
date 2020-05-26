<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
//use App\Upload;
use App\Banner;
use App\Http\Requests\CreateBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use Illuminate\Http\Request;
//use DB;
use File;

class BannerController extends Controller {

	/**
	 * Display a listing of banner
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $banner = Banner::all()->sortByDesc("id");
		/*$banner = DB::table('banner')
            ->select('*')
			->orderBy('id', 'desc')
            ->get();*/

		return view('admin.banner.index', compact('banner'));
	}

	/**
	 * Show the form for creating a new banner
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    return view('admin.banner.create');
	}

	/**
	 * Store a newly created banner in storage.
	 *
     * @param CreateBannerRequest|Request $request
	 */
	public function store(CreateBannerRequest $request)
	{
		$title = $request->input('title');
		$ordering = $request->input('ordering');
		$flag = '1';
		
		if($request->hasfile('file_name')){
			$this->validate($request, ['file_name' => 'mimes:jpeg,png,jpg']);
			//$this->validate($request, ['file_name' => 'mimes:jpeg,png,jpg,doc,docx,pdf']);
			//$this->validate($request, ['file_name' => 'mimes:pdf']);
			//$destinationPath = public_path() . '/assets/uploads/leavefiles/'; // upload path
			$img = $request->file('file_name');
			//echo $img; die;
			$extension = $img->getClientOriginalExtension(); // getting image extension
			$fileName = rand(111, 99999) . '.' . $extension; // renaming image
			
			$img->move(public_path("uploads/banner"),$fileName);
			//Input::file('documents')[$i]->move($destinationPath, $fileName); // uploading file to given path
			//return back()->with('success','Image Uploaded Successfully.')->with('path', $fileName);
			//die;
		} else {
			//return $request;
			$fileName = '';
		}		
		
		//Banner::create($request->all());
		Banner::create(['title' => $title,'ordering' => $ordering,'flag' => $flag,'banner_name' => $fileName]);
		return redirect()->route(config('quickadmin.route').'.banner.index');
	}

	/**
	 * Show the form for editing the specified banner.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$banner = Banner::find($id);
		return view('admin.banner.edit', compact('banner'));
	}

	/**
	 * Update the specified banner in storage.
     * @param UpdateBannerRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateBannerRequest $request)
	{
		$title = $request->input('title');
		$ordering = $request->input('ordering');
		
		if($request->hasfile('file_name')){
			$this->validate($request, ['file_name' => 'mimes:jpeg,png,jpg']);
			//$this->validate($request, ['file_name' => 'mimes:jpeg,png,jpg,doc,docx,pdf']);
			//$this->validate($request, ['file_name' => 'mimes:pdf']);
			//$destinationPath = public_path() . '/assets/uploads/leavefiles/'; // upload path
			$img = $request->file('file_name');
			//echo $img; die;
			$extension = $img->getClientOriginalExtension(); // getting image extension
			$fileName = rand(111, 99999) . '.' . $extension; // renaming image	
			
			//======Unlink Image Start========================
			$banner = Banner::find($id);
			$banner_name = $banner->banner_name;
			
			//$image_path = url('/uploads/banner/'.$banner_name); // Value is not URL but directory file path 
			$image_path = public_path("uploads/banner/".$banner_name);
			//echo $image_path; die;
			if(File::exists($image_path)) { 
				File::delete($image_path); 
			}
			//======Unlink Image End==========================
					
			$img->move(public_path("uploads/banner"),$fileName);
			
		} else {
			//return $request;
			$fileName = $request->input('upload_file');
		}			
		
		$banner = Banner::findOrFail($id);
		//$banner->update($request->all());		
		$banner->update(['title' => $title,'ordering' => $ordering,'banner_name' => $fileName]);

		return redirect()->route(config('quickadmin.route').'.banner.index');
	}

	/**
	 * Remove the specified banner from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		$banner = Banner::find($id);
		$banner_name = $banner->banner_name;
		
		//$image_path = url('/uploads/banner/'.$banner_name); // Value is not URL but directory file path 
		$image_path = public_path("uploads/banner/".$banner_name);
		//echo $image_path; die;
		if(File::exists($image_path)) { 
			File::delete($image_path); 
		}
		Banner::destroy($id);
		return redirect()->route(config('quickadmin.route').'.banner.index');
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
            Banner::destroy($toDelete);
        } else {
            Banner::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.banner.index');
    }
	
	public function activeinactive($id_hash,$action){ //echo $id_hash; echo $action; die();
		
		if($action=='block'){ //echo 'block'; die;
			$banner = Banner::findOrFail($id_hash);
			$banner->update(['flag' => 1]);
			//$keyofficial = Keyofficial::findOrFail($id_hash);
			//$keyofficial->update(['flag' => 1]);
		} else if($action=='unblock'){ //echo 'unblock'; die;
			$banner = Banner::findOrFail($id_hash);
			$banner->update(['flag' => 0]);
		} else {
			show_404();
		}
		return "done";
	}
	
	public function saveorder($id_hash,$order_val){ //echo $id_hash; echo $action; die();
		
		if($order_val <> ''){ 
			$banner = Banner::findOrFail($id_hash);
			$banner->update(['ordering' => $order_val]);
		} else {
			show_404();
		}
		//echo "done";
		return "done";
	}
	

}
