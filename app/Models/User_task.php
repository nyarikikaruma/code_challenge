<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User_task extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id', 'task_id', 'due_date', 'start_time', 'end_time', 'remarks', 'status_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function task() {
        return $this->belongsTo(Tasks::class);
    }
    public function status() {
        return $this->belongsTo(Status::class);
    }
}