<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MARegistrations extends CoreModel
{
    protected $table = 'ma_registrations';
    protected $fillable = ['id', 'user_id', 'patient_id', 'date'];
}
