<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\Relations\HasMany;

 class LevelModel extends Model
 {
     //use HasFactory;
 
     protected $table = 'm_level';
    // protected $primarykey = 'level_id';
 
    // protected $fillable = ['level_kode', 'level_nama'];
     protected $primaryKey = 'level_id';
     protected $fillable = ['level_kode', 'level_nama']; //Foreign key
 
    // public function users()
     public function users(): HasMany
     {
         return $this->hasMany(UserModel::class, 'level_id', 'level_id');
     }
 }