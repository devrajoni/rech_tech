<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return view('backend.role.index');
    }

    public function create()
    {
        $data['permissions'] = Permission::all();
        return view('backend.role.form', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255', 'unique:roles,name,'],
        ]);

        $role = Role::create([
            'name' => $request->name,
            'guard_name' => 'web',
        ]);
        if($request->get('permission')){
            foreach($request->get('permission') as $prm){
                $role->givePermissionTo($prm);
            }
        }
     
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
