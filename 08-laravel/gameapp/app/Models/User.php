<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'document',
        'fullname',
        'gender',
        'birthdate',
        'photo',
        'phone',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    //Relationship:user has a many games
    public function games (){
        return $this->hasMany('App\Models\Game');
    }
    public function colections() {
        return $this->hasMany('App\Models\class');
    }
    /**
     * Scope a query to only include users matching the search query.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $q
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNames($query, $q)
{
    if (trim($q)) {
        return $query->where(function ($query) use ($q) {
            $query->where('fullname', 'LIKE', "%$q%")
                  ->orWhere('email', 'LIKE', "%$q%")
                  ->orWhere('document', 'LIKE', "%$q%");
        });
    }

    return $query;
}
}
