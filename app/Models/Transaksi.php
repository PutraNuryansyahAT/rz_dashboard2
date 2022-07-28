<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Transaksi extends Model
{
    use Sortable;


    protected $table = 'transaksi';

    protected $sortable = ['date_transaksi', 'donatur', 'hp', 'email', 'atasnama', 'id_program', 'nominal', 'affiliate', 'statuspembayaran'];
}
