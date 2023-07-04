<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'section_id', 'name', 'url', 'order',
    ];
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
    use HasFactory;
}
