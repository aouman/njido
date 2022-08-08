<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\appart;

class payements extends Model
{
    use HasFactory;

    public function appart()
    {
        return $this->belongsTo(appart::class);
    }
    
}
