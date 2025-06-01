<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\LevelModel;


class UserModel extends Authenticatable
{
    use HasFactory;
 protected $table = 'm_user'; //mendefiniskan nama tabel yang digunakan model
    protected $primaryKey = 'user_id'; //mendefiniskan primary key dari tabel digunakan
    protected $fillable =['username', 'password', 'nama', 'level_id', 'created_at', 'updated_at'];
    protected $hidden = ['password'];// jangan ditampilkan saat select
    protected $casts = ['password' => 'hashed'];
    public function level(): BelongsTo 
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
     
    /**
     * Mendapatkan nama role
     */
    public function getRoleName(): string
    {
        return $this->level->level_nama;
    }

    /**
     * Cek apakah user memiliki role tertentu
     */
    public function hasRole(string $role): bool
    {
        return $this->level->level_kode == $role;
    }
}