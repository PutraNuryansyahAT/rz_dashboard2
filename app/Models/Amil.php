<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amil extends Model
{

    public $timestamps = false; //making eloquent not auto insert create_at and update_at

    use HasFactory;
    protected $table = 'data_amil';
    public $incrementing = false;
    const UPDATED_AT = 'updated_at';
    protected $fillable = ['*'];
}
