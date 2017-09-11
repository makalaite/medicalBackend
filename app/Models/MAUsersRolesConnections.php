<?php namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class MAUsersRolesConnections extends Model
{

    protected $updated_at = false;

    protected $table = 'ma_users_roles_connections';

    protected $fillable = ['user_id', 'role_id'];

}
