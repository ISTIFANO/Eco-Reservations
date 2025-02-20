<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'salle_id', 'status','id','updated_at','created_at',''];

    protected $table = 'reservations';

    protected $primaryKey = 'id'; 
    public $incrementing = false;

    protected $keyType = 'string'; 
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function salle()
    {
        return $this->belongsTo(Salle::class);
    }
}
