<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : '/profile/DKy6QwbSmfHDg2HC2FXj362Y0l3kE9ewSbtpVLh2.png';
        return '/storage/' .$imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
         return $this->BelongsTo(User::class);
    } 
}
