<?php

namespace Sinotur\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Sinotur\Http\Requests\CrearUsuarioRequest;
use Sinotur\User;
use Sinotur\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class SeguridadController extends Controller
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
    public function index(Request $request)
    {
        $request->user()->authorizeRoles('admin');

        $name = $request->get('username');
        $tipo = $request->get('usuarios');

        $usuarios = User::orderBy('id', 'ASC')
            ->usuario($name)
            ->tipo($tipo)
            ->paginate(15);
        return view('seguridad.modificarUsuario', compact('usuarios', 'name', 'tipo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        $roles = Role::all();
        return view('seguridad.crearUsuario', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearUsuarioRequest $request)
    {
        $role_user = Role::where('name', 'miembro')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = $request->usuarios;
        $roles = $request->usuarios;
        $user->save();

        if ($roles === '1') {
            $user->roles()->sync($role_admin);
            return redirect()->action('SeguridadController@create')->with('flash', 'El Usuario fue creado exitosamente.');
        }

        $user->roles()->sync($role_user);
        //return $request->all();
        return redirect()->action('SeguridadController@index')
            ->withInput($request->except('password'))
            ->with('flash', 'El Usuario fue creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // NO HACE FALTA
        //$user = User::find($id);
        //return view('seguridad.showUsuario', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('seguridad.editUsuario', compact('user', 'roles'));
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
        $role_user = Role::where('name', 'miembro')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user = User::find($id);
        $user->name = $request->username;
        $user->email = $request->email;
        $user->role_id = $request->usuarios;
        $roles = $request->usuarios;
        $user->save();

        if ($roles === '1') {
            $user->roles()->sync($role_admin);
            return redirect()->action('SeguridadController@index')->with('flash', 'El Usuario fue actualizado exitosamente.');
        }

        $user->roles()->sync($role_user);
        return redirect()->action('SeguridadController@index')->with('flash', 'El Usuario fue actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->action('SeguridadController@index')->with('flash', 'El Usuario se ha eliminado exitosamente.');
    }
}
