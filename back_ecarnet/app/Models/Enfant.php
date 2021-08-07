<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enfant extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'adress',
        'postal_code',
        'city',
        'birthday',
        'phone',
        'email',
        'register_date',
        'photo',
        'size',
        'note',
        'token',
        'responsable_id'
    ];
}
