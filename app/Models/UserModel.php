<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserModel extends Authenticatable implements JWTSubject
{
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }
    
    use HasFactory;
    protected $table = 'm_user'; //mendefinisikan nama tabel yang dipakai oleh model ini
    protected $primaryKey = 'user_id'; //mendefinisikan primary key dari tabel yang dipakai
    /** 
     * @var array
     * 
     */
    protected $fillable = ['level_id', 'username', 'nama', 'password', 'created_at', 'updated_at', 'photo'];
    protected $hidden = ['password'];
    protected $casts = ['password' => 'hashed'];



    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }

    public function getRoleName(): string
    {
        return $this->level->level_nama;
    }
    public function hasRole($role): bool
    {
        return $this->level->level_kode == $role;
    }
    public function getRole()
    {
        return $this->level->level_kode;
    }
}
