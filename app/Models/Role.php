<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['id','role_name','role_description'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
    use HasFactory;
}
