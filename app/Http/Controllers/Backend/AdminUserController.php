<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Declare this model to use
use App\Models\AdminUser;
use Illuminate\Support\Facades\Hash;
// Declare using Datatables
//use Yajra\Datatables\Facades\Datatables;

use DataTables;
//use Yajra\Datatables\Datatables;

class AdminUserController extends Controller
{
    // @foreach($users as $user)
    //     <tr>
    //         <td>{{$user->name}}</td>
    //         <td>{{$user->email}}</td>
    //         <td>{{$user->phone}}</td>
    //     </tr>
    // @endforeach
    

    // if you use simple bootstrap table
    // public function index(){
    //     $users = AdminUser::all();
    //     return view('backend.admin_user.index',compact('users'));
    // }

    // or

    // if you use datatables plugin
    // datatables.net // datatables website
    //   // laravel+datatables (for server side) website
    public function index(){
        // $users = AdminUser::all(); 
        // return view('backend.admin_user.index',compact('users'));
        return view('backend.admin_user.index');
    }

    public function ssd(){
        $data = AdminUser::query();// use query() method to fetch data row from DB
        return Datatables::of($data)->make(true);
    }

    public function create(){
        return view('backend.admin_user.create');
    }

    public function store(Request $request){
        $admin_user = new AdminUser();

        $admin_user->name = $request->name;
        $admin_user->email = $request->email;
        $admin_user->phone = $request->phone;
        $admin_user->password = Hash::make($request->password);
        $admin_user->save();

        return redirect()->route('admin.admin-user.index')->with('createMsg','Successfully Created');

    }
}
