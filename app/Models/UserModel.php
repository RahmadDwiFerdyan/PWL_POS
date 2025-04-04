<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable; 

class UserModel extends Authenticatable
{
    use HasFactory;
    protected $table = 'm_user';//mendefinisikan nama tabel yang dipakai oleh model ini
    protected $primaryKey = 'user_id';//mendefinisikan primary key dari tabel yang dipakai
    /** 
     * @var array
     * 
    */
    protected $fillable = ['level_id', 'username', 'nama', 'password', 'created_at', 'updated_at'];
    protected $hidden = ['password'];
    protected $casts = ['password' => 'hashed'];



    public function level(): BelongsTo{
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
}

