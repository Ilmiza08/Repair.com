<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class penghasilan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'tanggal',
        'id_service',
        'id_kategori',
        'total'


    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(kategori::class, 'id_kategori');
    }
}
