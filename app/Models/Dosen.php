<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $primaryKey = 'nidn';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nidn',
        'nama'
    ];

    public function jadwals()
    {
        return $this->hasMany(Jadwal::class, 'nidn', 'nidn');
    }
}