<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Anode extends Model
{
    use HasFactory;

    protected $fillable = ['name','color','acol_id','parent_id'];

    public function acol(): BelongsTo
    {
        return $this->belongsTo(Acol::class);
    }

    // public function arow(): BelongsTo
    // {
    //     return $this->belongsTo(Arow::class);
    // }
}
