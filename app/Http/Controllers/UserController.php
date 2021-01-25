<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    //Show the users/form
    public function index()
    {

        return view('welcome');
    }

    public function ajax(Request $request)
    {
        if ($request->ajax()) {
            $data = User::all()->map(function ($user)
            {
                return[
                    'first_name'=>$user->first_name,
                    'last_name'=>$user->last_name,
                    'email'=>$user->email,
                    'address'=>$user->address,
                ];
            });
            return Datatables::of($data)
                ->addIndexColumn()
                ->make(true);
        }


    }


    //Store the user data
    public function store(Request $request)
    {
        $validated=$request->validate(
            [
                'first_name'=>'required|alpha',
                'last_name'=>'required|alpha',
                'email'=>'required|email',
                'address'=>'required|alpha',
            ]
        );

        User::create($validated);
        return redirect()->route('user.index');
    }
}
