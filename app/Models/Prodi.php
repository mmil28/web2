<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Prodi extends Model
{
    use HasFactory;

    protected $table = 'prodi';

    protected $fillable = ['nama_prodi', 'fakultas_id', 'jenjang_id'];

    public function fakultas(): BelongsTo{
        return $this->belongsTo(related: Fakultas::class, foreignKey:'fakultas_id');
    }

    public function jenjang(): BelongsTo{
        return $this->belongsTo(related: Jenjang::class, foreignKey:'jenjang_id');
    }
}
