<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'tingkat', 
        'jurusan', 
        'abjad',
    ];
    // protected $guarded = ['id'];
    // protected $with = ['siswa', 'user'];


    public function scopeFilter($query, array $filters)
    {
        
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('tingkat', 'like', '%'.$search.'%')
            ->orWhere('jurusan', 'like', '%'.$search.'%')
            ->orWhere('abjad', 'like', '%'.$search.'%');
        });
    }

    public function siswa(): HasMany
    {
        return $this->hasMany(Siswa::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
