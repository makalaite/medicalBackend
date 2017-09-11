<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MAPatients extends CoreModel
{
    protected $table = 'ma_patients';

    protected $fillable = ['id', 'last_name', 'first_name', 'birth_date', 'email', 'phone', 'gender', 'password', 'remember_token', 'role_id'];
}