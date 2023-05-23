<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Storage;

class MahasiswaModel extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $fillable = [
        'nim',
        'nama',
        'kelas_id',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'hp',
        'photo'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function courses()
    {
        return $this
            ->belongsToMany(Course::class, 'mahasiswa_course', 'mahasiswa_id', 'course_id')
            ->withPivot('nilai')
            ->using(MahasiswaCourse::class);
    }

    public function getPhotoUrlAttribute()
    {
        return $this->photo
            ? Storage::disk('public')->url($this->photo)
            : 'https://ui-avatars.com/api/?name=' . urlencode($this->nama) . '&color=7F9CF5&background=EBF4FF';
    }
}
