<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/MdCtU1BFI5rfrDfViQ6UeoYb22wcKkg0n0ClxFYU.jpg';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
