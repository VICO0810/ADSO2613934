<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class outfit extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'image',
        'description',
        'user_id'
    ];
      //relationship: game belongs to user
      public function user() {
        return $this->belongsTo('App\Models\user');
      }
      public function scopeNames($query, $q)
      {
          if (trim($q)) {
              return $query->where(function ($query) use ($q) {
                  $query->where('name', 'LIKE', "%$q%")
                        ->orWhere('description', 'LIKE', "%$q%");
              });
          }

          return $query;
      }
}
