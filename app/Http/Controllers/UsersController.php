<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Person;
use App\Models\Country;
use App\Models\Profile;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {

        return view('users.index', [
            'users' => User::all()
        ]);

    }
    public function create() {
        return view('users.create');
    }

    public function store() {

        request()->validate([
            'first_name' => 'required | min:5 | max:20', // first_name is the name from [form]
            'last_name' => ['required', 'max:10'],
            'email' => 'required | email | unique:users',
            'phone' => 'required | numeric',
            'date_of_birth' => 'required | date',
            'user_name' => 'required | alpha_num',
            'password' => 'required | confirmed',
            
        ], [
            // custom Error Message
            'first_name.required' => 'You have to Provide your First Name :(',
            'first_name.min' => 'Minimum 5 Characters',
            'first_name.max' => 'Maximum 20 Characters',
        ]);

        $user = User::create([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'date_of_birth' => request('date_of_birth'),
            'user_name' => request('user_name'),
        ]);

        // Profile::create([
        //     'profile_pic' => request('profile_pic'),
        //     'bio' => request('bio'),
        //     'address' => request('address'),
        //     'owner_id' => $user->id
        // ]);

        // $user->profile()->create([
        //     'profile_pic' => request('profile_pic'),
        //     'bio' => request('bio'),
        //     'address' => request('address')
        //     // No need for owner_id
        // ]);

        return redirect('/users');
    }

    public function show($id) {

        $user = User::find($id);

        return view('users.show', compact('user'));

    }

    public function edit($id) {

        $user = User::find($id);

        return view('users.edit', compact('user'));

    }

    public function update($id) {

        $user = User::find($id);

        // $user = User::create([
        //     'first_name' => request('first_name'),
        //     'last_name' => request('last_name'),
        //     'email' => request('email'),
        //     'phone' => request('phone'),
        //     'date_of_birth' => request('date_of_birth'),
        //     'user_name' => request('user_name'),
        // ]);
        $first_name = request('first_name');
        $last_name = request('last_name');
        $email = request('email');
        $phone = request('phone');
        $date_of_birth = request('date_of_birth');
        $user_name = request('user_name');

        $user->first_name = $first_name;
        $user->last_name = $last_name;
        $user->email = $email;
        $user->phone = $phone;
        $user->date_of_birth = $date_of_birth;
        $user->user_name = $user_name;

        $user->save();

        return redirect('/users');

    }

    public function delete($id){
        
        $user = User::where('id', $id)->first();

        $user->delete();

        $user->profile->delete();


        // $profile->delete();

        return back();

    }

}
