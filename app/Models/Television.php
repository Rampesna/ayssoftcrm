<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Television extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'section_id'];

    public function Section()
    {
        return $this->hasOne(Section::class, 'id', 'section_id');
    }
}
