<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'user_name',
        'password', // Consider not making this fillable and use built-in auth mechanisms
        'credit_limit',
        'currency',
        'name',
        'dob',
        'email',
        'email_verified_at',
        'mobile',
        'time_zone',
        'bank_name',
        'bank_account_no',
        'gender',
    ];

    /**
     * Get the user that owns the player.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
