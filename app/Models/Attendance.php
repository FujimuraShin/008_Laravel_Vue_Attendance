<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'body',
        'flagged_at',
        'updated_at',
    ];



    public function scopeIgnoreFlagged($query)
    {
        return $query->where('flagged_at',null);
    }

    public function flag()
    {
        return $this->update(['flagged_at' => now()]);
    }

    public function getAvatarAttribute()
    {
    return sprintf( 'https://www.gravatar.com/avatar/%s?s=100', md5( strtolower( trim( $this->email ) ) ) );
    }
    
}
