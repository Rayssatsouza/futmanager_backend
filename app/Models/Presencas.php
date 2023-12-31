<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presencas extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'chamada_id',
        'atleta_id',
        'presenca',
    ];

    public function chamada()
    {
        return $this->belongsTo(Chamada::class, 'chamada_id');
    }
}
