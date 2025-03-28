<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jag extends Model
{
    /** @use HasFactory<\Database\Factories\JagFactory> */
    use HasFactory;
    
    public function celeries() {
        return $this->belongsToMany(Celery::class, relatedPivotKey: "celery_listing_id");
    }
}
}
