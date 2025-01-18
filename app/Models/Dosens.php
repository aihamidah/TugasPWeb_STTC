<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosens extends Model
{
    /** @use HasFactory<\Database\Factories\DosensFactory> */
    use HasFactory;

    protected $table = 'dosens';

        // Tentukan field yang bisa diisi
        protected $fillable = [
            'name',
            'nidn',
            'program_studi',
            'email',
            'phone',
            'address',
        ];
}
