<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function list(){

        $students = User::where('user_type', 2)->get();
        return view('admin.student.list', compact('students'));

    }
    public function add()
    {
        return view('admin.student.add');
    }
    public function store(Request $request)
    {
        $pass = Hash::make($request->password);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $pass,
            'user_type' => 2
        ]);
        return redirect()->route('admin.student.list');
        
    }
    public function menu()
    {

        return view('admin.meal.menu');
    }
    
}
