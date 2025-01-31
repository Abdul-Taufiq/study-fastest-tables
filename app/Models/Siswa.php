<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'data_siswa';
    protected $dates = ['created_at', 'updated_at', 'tgl_lahir'];
    // Use casts instead:
    protected $casts = [
        'tgl_lahir' => 'datetime',
    ];
    protected $fillable = ['nama', 'jns_kelamin', 'goldar', 'alamat', 'agama', 'nik', 'tgl_lahir'];
    protected $primaryKey = 'id';


    public function scopeSearch($query, $search)
    {
        return $query->where('nama', 'like', '%' . $search . '%')
            ->orWhere('jns_kelamin', 'like', '%' . $search . '%')
            ->orWhere('goldar', 'like', '%' . $search . '%')
            ->orWhere('alamat', 'like', '%' . $search . '%')
            ->orWhere('agama', 'like', '%' . $search . '%')
            ->orWhere('nik', 'like', '%' . $search . '%')
            ->orWhere('tgl_lahir', 'like', '%' . $search . '%');
    }
}
