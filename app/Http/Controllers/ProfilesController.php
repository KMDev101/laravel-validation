<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Models\Person;
use App\Models\Country;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index() {

        $profiles = Profile::all();

        return view('profiles.index', compact('profiles'));
    }
    
    public function edit($id) {

        $profiles = Profile::find($id);

        return view('profiles.editUserProfile', compact('profiles'));

    }

    public function update($id) {

        $profiles = Profile::find($id);

        $profiles->update([
            'profile_pic' => request('profile_pic'),
            'bio' => request('bio'),
            'address' => request('address'),
        ]);

        $profiles->save();

        return redirect('/profiles');

    }

    
    
}
