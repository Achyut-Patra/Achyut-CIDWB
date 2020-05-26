<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Redirect;
use Schema;
use App\Stakedetails;
use App\District;
use App\Ps;
use App\Http\Requests\CreateUseradditionRequest;
use App\Http\Requests\UpdateUseradditionRequest;

class UsersController extends Controller
{
    /**
     * Show a list of users
     * @return \Illuminate\View\View
     */
    public function index()
    {
        
        
        $des = User::with(['ps','district','stakedetails'])->get();
        return view('admin.users.index', compact('des'));
    }

    /**
     * Show a page of user creation
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $roles = Role::pluck('title', 'id');
         $stakedet = Stakedetails::where('flag',1)->get();
        $dist = District::get();
        
             $pss=[];
        
        return view('admin.users.create',compact('stakedet','dist','pss','roles'));
    }

    /**
     * Insert new user into the system
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateUseradditionRequest $request)
    {        
        
        $token=$request->_token;
        $stake_cd=$request->stake_cd;
        $descr=$request->description;
        $plstn=$request->pstnn;
        $ntps=$request->ntps;
        $pscode=$request->ntpscode;
        $roles=$request->role_id;
        if($plstn=='' || $ntps=='' || $pscode==''){
            $plstnn=$plstn;
        }else{
            $plstnn=$request->ntps;
            $pscode=$request->ntpscode;
            Ps::create(['ps_name'=>$plstnn,'ps_code'=>$pscode,'district_id_fk'=>$descr]);
        }
        
        $locakey=$request->locationkey;
        $lockey_hash=hash('sha256',$locakey);
        $wordpass=Hash::make($request->password);
        User::create(['stake_cd'=>$stake_cd,'description'=>$descr,'locationkey'=>$locakey,'locationkey_hash'=>$lockey_hash,'password'=>$wordpass,'role_id'=>$roles,'stationp'=>$plstnn,'remember_token'=>$token]);

        return redirect()->route('users.index')->withMessage(trans('quickadmin::admin.users-controller-successfully_created'));
    }

    public function ajaj($selectedVal){

        //echo $selectedVal;

        //$id_ajax=$selectedVal;
        $stakedet = Stakedetails::where('flag',1)->get();
        $dist = District::get();
        $pss = Ps::select('id','ps_name')->where('district_id_fk','=',$selectedVal)->get();
      
        $str='';
        $str .='<select class="form-control" name="pstnn">
            <option value="">-----Please Select Police Station-----</option>';
            foreach($pss as $pssval){
    $str .='<option value="'.$pssval->id.'">'.$pssval->ps_name.'</option>';
            }
        $str .='</select>';
        return $str;
    }

    /**
     * Show a user edit page
     *
     * @param $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $user  = User::findOrFail($id);
        $user = User::with(['ps','district','stakedetails'])->findOrFail($id);
        // echo "<pre>";
        // print($des);
        // die();
        $roles = Role::pluck('title', 'id');

        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update our user information
     *
     * @param Request $request
     * @param         $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateUseradditionRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user->update($input);

        return redirect()->route('users.index')->withMessage(trans('quickadmin::admin.users-controller-successfully_updated'));
    }

    /**
     * Destroy specific user
     *
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        User::destroy($id);

        return redirect()->route('users.index')->withMessage(trans('quickadmin::admin.users-controller-successfully_deleted'));
    }
}