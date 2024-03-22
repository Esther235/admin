<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{


    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
        ]);
    }
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|max:200',
        //     'username' => ['required', 'min:3', 'max:200', 'unique:users'],
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:5|max200'
        // ]);
        // dd('register berhasil!');
        // return $request->all();

        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|max:200',
        //     'username' => ['required', 'min:3', 'max:200', 'unique:users'],
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:5|max200'
        // ]);

        // if ($validator->fails()) {
        //     return redirect('post/create')
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);

        $validatedData['password'] = Hash::make($validatedData['password']);

        // dd('register berhasil!');
        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration successful!');
    }
}
