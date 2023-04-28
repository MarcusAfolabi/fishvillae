<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'reservations';

    protected $fillable = ['name', 'phone', 'email', 'adult', 'children', 'kids', 'date', 'time', 'status', 'payment_link', 'payment_approved'];
}
