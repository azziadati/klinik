<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Consultation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['user_id', 'message', 'is_admin'];

    /**
     * Get the user that owns the consultation.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
