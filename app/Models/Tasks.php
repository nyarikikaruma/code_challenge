<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tasks extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'description', 'due_date', 'status_id'];

    public function user_task(){
        return $this->hasMany(User_task::class);
    }
    public function status() {
        return $this->hasMany(Status::class);
    }
}
