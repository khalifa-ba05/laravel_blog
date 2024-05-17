<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::get();
        return view('role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $roles = new Role();
        $roles->intitule = $request->intitule;
        $roles->save();
        return redirect()->route('role_index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $roles = Role::find($id);
        if($roles){
            return view('role.show', compact('roles'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         $roles = Role::find($id);
         return view('role.edit', compact('roles')); 
        }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $roles = Role::find($id);
        if($roles){
            $roles->intitule = $request->intitule;
            $roles->save();
            return redirect()->route('role_index');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $roles = Role::find($id);
        if($roles){
             $roles->delete();
             return redirect()->route('role_index');
        }
    }
}