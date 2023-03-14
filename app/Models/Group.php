<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_groups');
    }
    
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'group_courses');
    }
}
