<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nis', 
        'nisn', 
        'kelas_id', 
        'nama',
        'fase'
    ];
    // protected $guarded = ['id'];
    // protected $with = ['kelas'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('nis', 'like', '%'.$search.'%')
            ->orWhere('nisn', 'like', '%'.$search.'%')
            ->orWhere('nama', 'like', '%'.$search.'%')
            ->orWhere('fase', 'like', '%'.$search.'%');
        });
    }

    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class);
    }
}
