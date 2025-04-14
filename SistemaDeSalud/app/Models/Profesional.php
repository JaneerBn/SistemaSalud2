<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Profesional extends Model
{
    protected $table = 'profesionales';
    use HasFactory;


    protected $fillable = [
        'nombre',
        'apellido',
        'especialidad',
        'horarios',
        'telefono',
        'email',
    ];


    public function citas()
    {
        return $this->hasMany(Cita::class);
    }
}
