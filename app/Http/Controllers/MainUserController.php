<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticationRequest;
use App\Http\Requests\StoreMain_userRequest;
use App\Http\Requests\UpdateMain_userRequest;
use App\Models\Main_user;

class MainUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registration');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMain_userRequest $request): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $formFields = $request->validate($request->rules());

        $formFields['password'] = bcrypt($formFields['password']);

        $main_user = Main_user::create($formFields);

        auth()->login($main_user);

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Main_user $main_user)
    {
        return view('home');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Main_user $main_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMain_userRequest $request, Main_user $main_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Main_user $main_user)
    {
        //
    }

    public function authenticate(AuthenticationRequest $request)
    {

//        $formFields = $request->validate($request->rules());
//
//        if (auth()->attempt($formFields)) {
//            $request->session()->regenerate();
//
           return redirect('/home');
//        }
//
//        return back()->withErrors(['email' => 'Неверные данные'])->onlyInput('email');
    }

    public function home()
    {
        return view('home');
    }

    public function login()
    {
        return view('login');
    }
}
