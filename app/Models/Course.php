<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sks',
        'semester',
        'description',
        'lecturer',
        'day',
    ];

    public function mahasiswa()
    {
        return $this
            ->belongsToMany(MahasiswaModel::class, 'mahasiswa_course', 'course_id', 'mahasiswa_id')
            ->withPivot('nilai')
            ->using(MahasiswaCourse::class);
    }
}
