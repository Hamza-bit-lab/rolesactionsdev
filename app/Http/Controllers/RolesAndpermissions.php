<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndpermissions extends Controller
{
    public function showRoleForm(){
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    public function showPermissionsForm(){
        $permissions = Permission::all();
        return view('permissions.index', compact('permissions'));
    }

    public function createRole(){
        return view('roles.create');
    }

    public function createPermissions(){
        return view('permissions.create');
    }


    public function storeRole(Request $request){
        
    $role = $request->name;

     Role::create([
        'name' => $role
    ]);

    session()->flash('success_message', 'Role Created.');

    return redirect()->route('roles');

    }


    public function storePermissions(Request $request){
        
    $permission = $request->name;

     Permission::create([
        'name' => $permission
    ]);

    session()->flash('success_message', 'Permissions Created.');

    return redirect()->route('permissions');

    }
}
