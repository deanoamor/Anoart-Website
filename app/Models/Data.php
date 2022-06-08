<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Data extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'datas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'data_nama',
        'data_file',
        'data_title',
    ];
}
