<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Acol extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function anodes(): HasMany
    {
        return $this->hasMany(Anode::class);
    }
}
