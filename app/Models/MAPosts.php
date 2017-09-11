<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MAPosts extends CoreModel
{
    protected $table = 'ma_posts';

    protected $fillable = ['id', 'user_id', 'title', 'text'];
}
