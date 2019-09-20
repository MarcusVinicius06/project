<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Yajra\DataTables\Facades\DataTables;



class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numUsers = User::all()->count();
        $numRoles = Role::all()->count();
        return view('roles.index', compact('numUsers', 'numRoles'));
    }

    public function getDataRoles()
    {
        $roles = Role::all();

        return DataTables::of($roles)
            ->addColumn('action',function ($role){
                return [
                    'edit' =>  route('admin.group.edit', $role),
                    'delete' => route('admin.group.destroy', $role),
                ];
            })
            ->addColumn('permissions', function ($role)
            {
                $permissions = [];
                foreach ($role->permissions()->get()->all() as $permission) {
                    array_push($permissions, $permission->name);
                }

                return $permissions;
            })
            ->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $roles = Role::all();
        $permissions = Permission::all();
        return view('roles.create', compact('users', 'roles', 'permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:roles',
            'permission' => 'required'
        ]);

        $role = new Role();
        $role->name = $request->name;
        $role->guard_name = 'web';
        $role->givePermissionTo($request->permission);
        $role->save();

        return redirect()->route('admin.group.index')->with('success', 'Grupo adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Spatie\Permission\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Spatie\Permission\Models\Role  $role
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role  $role, $id)
    {
        $numUsers = User::all()->count();
        $numRoles = Role::all()->count();
        $permissions = Permission::all();
        $role = Role::findById($id);
        return view('roles.edit', compact('role', 'numRoles','numUsers', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'permission' => 'required'
        ]);

        $role = Role::find($id);
        $role->syncPermissions($request->permission);
        $role->name = $request->name;
        $role->guard_name = 'web';
        $role->save();

        return redirect()->route('admin.group.index')->with('success', 'Grupo atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Spatie\Permission\Models\Role  $role
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role, $id)
    {
        $role = Role::findOrFail($id);
        $role->forceDelete();

        return redirect()->route('admin.group.index')->with('success', 'Grupo deletado com sucesso!');
    }
}
