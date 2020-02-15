<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        
    ];

    public function roleby()
    {
        return $this->hasMany(User::class, 'role_id');
    }

}
