<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public function groups()
    {
        return $this->belongsToMany(Group::class, 'user_groups');
    }
}
