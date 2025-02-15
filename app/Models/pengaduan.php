<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduans';
    protected $primaryKey = 'id';

    // Menambahkan kolom yang dapat diisi
    protected $fillable = [
        'user_id',
        'kategori_id',
        'isi_pengaduan',
        'tanggal_pengaduan',
        'judul_pengaduan',
        'foto',
        'status',
    ];

    protected $casts = [
        'tanggal_pengaduan' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Relasi ke User
    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relasi ke Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function tanggapans()
    {
        return $this->hasMany(Tanggapan::class, 'pengaduan_id'); // Pastikan nama kolom foreign key sesuai jika perlu
    }
}
