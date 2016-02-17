<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\RoleRequest;
use App\Http\Controllers\Controller;

use App\Role;
use App\Permission;
use App\User;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('sys');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('backend.role.index',['roles'=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        // echo '<pre>';print_r($request->all()); echo '</pre>';die();
        $role = new Role;
        $role->name = $request->name;
        $role->display_name = $request->display_name;
        $role->save();

        return redirect('/sys/role')->with('status', 'Your Role has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::findOrFail($id);
        $users = User::lists('name','id');
        $permissions = Permission::lists('display_name','id');
        return view('backend.role.show',[
            'role'=>$role,
            'permissions'=>$permissions,
            'users'=>$users
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Role::findOrFail($id);
        return view('backend.role.edit',[
                'role'=>$role
            ]);
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
        echo '<pre>';print_r($id."<br />"); echo '</pre>';
        echo '<pre>';print_r($request->all()); echo '</pre>';die();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function assignPermission(Request $request,$id)
    {
        $role = Role::findOrFail($id);
        $permission = Permission::findOrFail($request->permission_id);
        // if ($role->permissions()->contains($permission))
        // {
        //     return back()->with('status', 'Permission could not be assigned. Duplicate entry!');
        // } else {
            $role->permissions()->save($permission);

            return back()->with('status', 'Permission has successfully assigned!');
        // }        
    }

    public function assignUser(Request $request,$id)
    {
        $user = User::findOrFail($request->user_id);
        $role = Role::findOrFail($id);
        $user->assign($role);

        return back()->with('status', 'User has successfully assigned!');
    }
}
