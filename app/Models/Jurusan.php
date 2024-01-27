<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function jenjang()
    {
        return $this->belongsTo(Jenjang::class);
    }

    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }
}
