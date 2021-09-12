<?php

namespace App\Http\Controllers;
use Yajra\Datatables\Datatables;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('users');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $roles = DB::table('roles')->pluck('name', 'id')->all();
       return view('createUser', compact('roles'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_id'=> ['required', 'numeric'],
        ]);

        if ($validator->fails()) {

            Session::flash('error', $validator->messages()->first());

            return redirect()->back()->withInput();
        }

        $user = new User();

        $user->role_id = $request->role_id;
        $user->full_name = $request->full_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);


        try{

            $user->save();

            Session::flash('success','User created');

        }catch (\Illuminate\Database\QueryException $e) {

            $msg = $e->errorInfo[2];

            Session::flash('error', $msg);
        }

        return redirect('users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $user = Auth::User();

        $data = User::findOrFail($request->id);

       return $user;


    }


    public function updateProfile(Request $request){

        try{

            $user = User::findOrFail($request->id);

             $user->full_name = $request->full_name;

              $user->save();

              Session::flash('success','Update Operation Successful');

          }catch (\Illuminate\Database\QueryException $e) {

              $msg = $e->errorInfo[2];

               Session::flash('error', $msg);
          }


          return redirect('profile');

    }


    public function removeUser(Request $request){

        $user = Auth::User();

      try{

        $data = User::findOrFail($request->id);


          if($user->email == $data->email){

              Session::flash('error', "This user is currently logged on");

              return back();

          }

              $data->delete();

          Session::flash('success','Delete Operation Succesful');

      }catch (\Illuminate\Database\QueryException $e) {

          $msg = $e->errorInfo[2];

           Session::flash('error', $msg);
      }

      return redirect('users');
    }


    public function changePassword(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'password' => ['required', 'string', 'min:8'],
            'oldPassword' => ['required', 'string', 'min:8'],

        ]);

        if ($validator->fails()) {

            Session::flash('error', $validator->messages()->first());

            return redirect()->back()->withInput();
        }
        try{

        $user = Auth::User();

        $ePassword = $user->password;

        $old = $request->oldPassword;

        if (Hash::check($old, $ePassword)) {

            $eUser = User::find($user->id);

            $eUser->password = Hash::make($request->password);

            $eUser->save();

            Auth::logout();

            return redirect("/");
        }

        Session::flash('error','Could not update profile');

    }catch (\Illuminate\Database\QueryException $e) {

        $msg = $e->errorInfo[2];

        Session::flash('error', $msg);

    }

    return back();


    }




    public function profile()
    {

       $user = Auth::user();
       return view('profile', compact('user'));

    }

    public function getUsers()
    {
       return Datatables::of(User::query())

       ->editColumn('role_id', function(User $user) {
        if ($user->role_id == 1) {

            return 'Super Administrator';
        }else{
            return 'Administrator';
        }

       })
       ->addColumn('action', function (User $user) {
        return '<a href="#" onclick="deleteUser('.$user->id.')"  class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-edit"></i> Delete User</a>';
       })

       ->make(true);
    }
}
