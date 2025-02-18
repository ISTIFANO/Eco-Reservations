<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    protected $fillable=['id','title','description','location','number','start_date','status'];
    use HasFactory;
}
