<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MASchedules extends CoreModel
{
    protected $table = 'ma_schedules';
    protected $fillable = ['id', 'user_id', 'week_day', 'from', 'to'];
}