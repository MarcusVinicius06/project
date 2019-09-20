<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use RealRashid\SweetAlert\Facades\Alert;


class UsersController extends Controller
{

    public function __construct() {
        $this->middleware('role_or_permission:administrador|admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $numRoles = Role::all()->count();
        return view('users.index', compact('users', 'numRoles'));
    }

    public function getDataUsers()
    {
        $users = User::all();

        $table = DataTables::of($users)
            ->addColumn('action',function ($user){
                return [
                    'edit'    => route('admin.users.edit', $user),
                    'destroy' => route('admin.users.destroy', $user),
                    'show'    => route('admin.users.show', $user)
                ];
            })
            ->addColumn('group', function ($users)
            {
                $roles = [];
                foreach ($users->roles->all() as $role) {
                    array_push($roles,$role->name);
                }
                return $roles;
            })
            ->make(true);
            // ->toJson();
        return $table;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user  = new User();
        $numUsers = User::all()->count();
        $roles = Role::all();
        return view('users.create', compact('user', 'numUsers', 'roles'));
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
            'name'     => ['required', 'string', 'max         : 255'],
            'email'    => ['required', 'string', 'email', 'max: 255', 'unique:users'],
            'password' => ['required', 'string', 'min         : 8'],
            'grupo'    => 'required',
        ]);


        $user = new User($request->all());
        $user->password = Hash::make($user->password);
        $user->assignRole($request->grupo);
        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'Usuário registrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $roles = Role::all();
        return view('users.show', compact('user', 'roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User  $user)
    {
        $roles = Role::all();
        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request,[
            'name'     => ['required', 'string', 'max         : 255'],
            'email'    => ['required', 'string', 'email', 'max: 255'],
            'password' => ['required', 'string', 'min         : 8'],
            'grupo'    => 'required',
        ]);

        $user->find($request->id);
        $user->fill($request->all());
        $user->password = Hash::make($user->password);
        $user->syncRoles($request->grupo);
        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'Usuário atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'Usuário deletado com sucesso!');
    }

     /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $user  = User::find(auth()->id());
        $roles = Role::all();

        return view('users.show', compact('user', 'roles'));
    }
}
