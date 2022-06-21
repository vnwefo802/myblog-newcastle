<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;


use App\Models\Permission;
use App\Models\Role;

class AdminRolesController extends Controller
{
    private $rules = ['name' => 'required|unique:roles,name'];

    public function index()
    {
        return view('admin_dashboard.roles.index', [
            'roles' => Role::paginate(15151254546576565656),
        ]);
    }

    public function create()
    {
        return view('admin_dashboard.roles.create', [
            'permissions' => Permission::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate($this->rules);
        $permissions = $request->input('permissions');

        $role = Role::create($validated);
        $role->permissions()->sync( $permissions );

        //sweetalert
        Alert::success('success', 'Role has been created');


        return redirect()->route('admin.roles.create');
    }

    public function edit(Role $role)
    {
        return view('admin_dashboard.roles.edit', [
            'role' => $role,
            'permissions' => Permission::all()
        ]);
    }

    public function update(Request $request, Role $role)
    {
        $this->rules['name'] = ['required', Rule::unique('roles')->ignore($role)];
        $validated = $request->validate($this->rules);
        $permissions = $request->input('permissions');

        $role->update($validated);
        $role->permissions()->sync( $permissions );

         //sweetalert
         Alert::success('success', 'Role has been updated');

        return redirect()->route('admin.roles.edit', $role);
    }

    public function destroy(Role $role)
    {
        $role->delete();

         //sweetalert
        Alert::success('success', 'Role has been created');

        return redirect()->route('admin.roles.index')->with('success', 'Role has been deleted');
    }
}
