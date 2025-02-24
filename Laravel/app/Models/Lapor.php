<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapor extends Model
{
    use HasFactory;
    
    protected $table = 'lapor';
    protected $fillable = ['judul','laporan', 'aspek', 'lampiran'];
}
