<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_proposal',
        'id_mahasiswa',
        'judul',
        'pembimbing',
        'tgl_pengajuan',
        'id_status',
        'ket',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa', 'npm');
    }
    public function status()
    {
        return $this->belongsTo(Status::class, 'id_status', 'id_status');
    }
    protected $primaryKey = 'id_proposal';
    public $incrementing = false;
    protected $keyType = 'string';
}
