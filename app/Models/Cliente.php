<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cliente extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'documento'
    ];

    public function historicoReservas(): HasMany
    {
        return $this->hasMany(Reserva::class);
    }

    public function adicionarReserva(Reserva $reserva): void
    {
        $this->historicoReservas()->save($reserva);
    }

    public function getNomeAttribute($value): string
    {
        return ucfirst($value);
    }

    public function setNomeAttribute($value): void
    {
        $this->attributes['nome'] = strtolower($value);
    }

    public function getEmailAttribute($value): string
    {
        return strtolower($value);
    }

    public function setEmailAttribute($value): void
    {
        $this->attributes['email'] = strtolower($value);
    }
}

