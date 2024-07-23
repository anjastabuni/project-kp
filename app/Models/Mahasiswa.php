<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'npm',
        'nama',
        'angkatan',
        // 'email',
        'telp',
    ];

    public function proposals()
    {
        return $this->hasOne(Proposal::class, 'id_mahasiswa', 'npm');
    }
    protected $primaryKey = 'npm';
    public $incrementing = false;
    protected $keyType = 'string';
}
