<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class adminsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = User::all();
        return view('backend.admins.admins',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admins.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:0,1',
        ]);
       
        $admin = new User();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->role = $request->role ?? 0;
        $admin->save();
    
        return redirect()->route('admins.index')->with('success', 'تم إضافة المدير بنجاح!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $admin = User::find($id);
        if($admin){
            return view('backend.admins.edit',compact('admin'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Validate the request
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $id,
        'password' => 'nullable|string|min:8|confirmed',
        'role' => 'required|in:0,1',
    ]);

    // Find the admin to update
    $admin = User::findOrFail($id);
    $admin->name = $request->name;
    $admin->email = $request->email;

    // If a new password is provided, hash and update it
    if ($request->password) {
        $admin->password = Hash::make($request->password);
    }

    // Update the role (admin or not)
    $admin->role = $request->role;

    // Save the changes
    $admin->save();

    return redirect()->route('admins.index')->with('success', 'Admin updated successfully!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = User::find($id);
        if($admin){
            $admin->delete();
            return redirect()->back();
        }
    }
}
