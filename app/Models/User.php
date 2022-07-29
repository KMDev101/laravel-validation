<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $dates = ['date_of_birth'];

    public function profile() {

        return $this->hasOne(Profile::class, 'owner_id');

    }
}
