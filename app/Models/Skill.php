<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    // only values of name and image properities can be changed for the model 
    protected $fillable = ["name", "image"]; // used for security purposes
    public function projects()
    {
        return $this->hasMany(Project::class); // define one to many relationship
    }
}
