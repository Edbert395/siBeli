<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masuk extends Model
{
    use HasFactory;
    protected $fillable = ['kd_masuk','tgl_masuk','kd_admin','kd_supplier','total_masuk'];
}
