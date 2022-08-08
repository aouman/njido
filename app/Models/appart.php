<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\payements;
use App\models\user;

class appart extends Model
{
    protected $fillable = ['AppName','AppPrice'];

    public function payements()
    {
        return $this->hasMany(payements::class );
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
