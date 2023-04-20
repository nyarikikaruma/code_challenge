<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name'];

    public function user_tasks(){
        return $this->belongsTo(User_task::class);
    }
    public function tasks(){
        return $this->belongsTo(Tasks::class);
    }
}
