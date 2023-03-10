<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'linkedin', 'github', 'created_at', 'updated_at', 'image', 'type_id'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
