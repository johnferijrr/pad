<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Civitas extends Model
{
    use HasFactory;

    protected $table = 'civitas';
    protected $primaryKey = 'nik';

    public $incrementing = false;
    public $timestamps = true;


}
