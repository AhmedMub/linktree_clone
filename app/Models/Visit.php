<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Link;

class Visit extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function links()
    {

        return $this->belongsTo(Link::class);
    }
}
