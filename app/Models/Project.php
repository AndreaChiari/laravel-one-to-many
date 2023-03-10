<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'description', 'linkedin', 'github', 'created_at', 'updated_at', 'image'];
    use HasFactory;
}
