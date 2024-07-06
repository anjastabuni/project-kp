<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_status',
        'status',
        'keterangan',
    ];

    public function proposals()
    {
        return $this->hasMany(Proposal::class, 'id_status', 'id_status');
    }
}
