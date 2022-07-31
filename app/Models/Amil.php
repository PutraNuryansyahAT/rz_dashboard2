<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amil extends Model
{

    public $timestamps = false; //making eloquent not auto insert create_at and update_at

    use HasFactory;
    protected $table = 'data_amil';
    protected $guarded = ['id_amil'];
}
