<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tanggapan extends Model
{
    use HasFactory;
    protected $table = 'tanggapans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'pengaduan_id',
        'tanggal_tanggapan',
        'tanggapan',

    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',

    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // Tentukan kolom foreign key jika perlu
    }

    // Relasi ke Pengaduan
    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class, 'pengaduan_id'); // Tentukan kolom foreign key jika perlu
    }
}
