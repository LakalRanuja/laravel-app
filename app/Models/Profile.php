<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded =[];

    public function profileImage()
    {
        return ($this->image)? '/storage/' . $this->image : 'https://upload.wikimedia.org/wikipedia/commons/a/ac/No_image_available.svgfoll';
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user(){
        return $this->belongsToMany(User::class);
    }
}
