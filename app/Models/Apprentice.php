<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    use HasFactory;

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'name',
        'email',
        'cell_number',
        'course_id',
        'computer_id'
    ];

    // Relaciones con otras tablas
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function computer()
    {
        return $this->belongsTo(Computer::class);
    }
}
