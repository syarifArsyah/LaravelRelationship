<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function profile()
    {
        return $this->hasOne(\App\Models\profile::class);
    }

    public function jurusan()
    {
        return $this->belongsTo(\App\Models\jurusan::class);
    }

    public function mapel()
    {
        return $this->belongsToMany(\App\Models\mapel::class, 'rombel');
    }
}
