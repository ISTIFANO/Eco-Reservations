<?php

namespace App\Models;

use App\Models\User;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Salle extends Model
{
    protected $fillable=['id','title','description','location','number','start_date','status','images'];
    use HasFactory;

public function  user()  {
    
    return $this->belongsTo(User::class);
}
public function  reservations()  {
    
    return $this->hasMany(Reservation::class);
}

}
