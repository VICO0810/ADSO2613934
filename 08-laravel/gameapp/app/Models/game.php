<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    use HasFactory;
        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'image',
        'developer',
        'releasedate',
        'category_id',
        'user_id',
        'price',
        'genre',
        'slider',
        'description'        
    ];
        //relationship: game belongs to user
        public function user() {
            return $this->belongsTo('App\Models\user');
    }  
       //Relationship:game belongs to category
        public function Category() {
        return $this->belongsTo('App\Models\Category');
    } 
     //Relationship:game belongs to category
        public function Collection() {
        return $this->belongsTo('App\Models\Collection');
    } 
    }
