<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MAAvatars extends CoreModel
{
    protected $table = 'ma_avatars';

    protected $fillable = ['id', 'path', 'mime_type', 'size', 'width', 'height'];
}