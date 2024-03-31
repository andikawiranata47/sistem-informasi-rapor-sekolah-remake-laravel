<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;

// class User extends Model
// {
//     use HasFactory;

//     protected $fillable = [
//         'email',
//         'password',
//         'nama',
//         'nip',
//         'akses',
//         'ttd',
//         'is_wali_kelas'
//     ];
//     // protected $guarded = ['id'];
//     // protected $with = ['kelas'];

//     public function scopeFilter($query, array $filters)
//     {
//         $query->when($filters['search'] ?? false, function ($query, $search) {
//             return $query->where('email', 'like', '%' . $search . '%')
//                 ->orWhere('nama', 'like', '%' . $search . '%')
//                 ->orWhere('nip', 'like', '%' . $search . '%')
//                 ->orWhere('akses', 'like', '%' . $search . '%');
//         });
//     }

//     public function kelas(): HasOne
//     {
//         return $this->hasOne(Kelas::class, 'user_id');
//     }
// }


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
        'nama',
        'nip',
        'akses',
        'ttd',
        'is_wali_kelas'
    ];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('email', 'like', '%' . $search . '%')
                ->orWhere('nama', 'like', '%' . $search . '%')
                ->orWhere('nip', 'like', '%' . $search . '%')
                ->orWhere('akses', 'like', '%' . $search . '%');
        });
    }

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

    public function kelas(): HasOne
    {
        return $this->hasOne(Kelas::class, 'user_id');
    }
}
