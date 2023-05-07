<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
