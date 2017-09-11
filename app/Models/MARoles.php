<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MARoles extends CoreModel
{
    protected $table = 'ma_roles';
    protected $fillable = ['id', 'name'];
}
