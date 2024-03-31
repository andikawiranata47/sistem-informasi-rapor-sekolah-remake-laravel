<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'mata_pelajaran', 
        'kelompok'
    ];
    // protected $guarded = ['id'];

    // public function scopeFilter($query)
    // {
    //     if(request('search')){
    //         if(strlen(request('search')) == 1){
    //             return $query->where('kelompok', 'like', '%'.request('search').'%');
    //         }
    //         return $query->where('mata_pelajaran', 'like', '%'.request('search').'%')
    //             ->orWhere('kelompok', 'like', '%'.request('search').'%');
    //     }
    // }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search){           
            if(strlen($search) == 1){
                return $query->where('kelompok', 'like', '%'.$search.'%');
            }
            return $query->where('mata_pelajaran', 'like', '%'.$search.'%')
            ->orWhere('kelompok', 'like', '%'.$search.'%');
        });
    }

}
