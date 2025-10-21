<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jenjang extends Model
{
    use HasFactory;

    protected $table = 'jenjang';

    protected $fillable = ['nama_jenjang'];

    public function prodi(): HasMany
    {
        return $this->hasMany(related: Prodi::class, foreignKey: 'jenjang_id');
    }
}
