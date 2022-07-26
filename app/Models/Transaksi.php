<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Transaksi extends Model
{
    use Sortable;


    protected $table = 'transaksi';

    protected $sortable = ['tgldonasi', 'donatur', 'hp', 'email', 'atasnama', 'program', 'nominal', 'affiliate', 'statuspembayaran'];
}
