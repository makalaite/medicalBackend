<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class MAUsers extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    public $incrementing = false;


    protected $table = 'ma_users';
    protected $fillable = ['id', 'role_id', 'avatar_id', 'first_name', 'last_name', 'position', 'email', 'password', 'show_in_front'];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
