<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lowongan_kerja extends Model
{
    use HasFactory, HasSlug;

    protected $guarded = ['id'];

    public function kategori_loker(){
        return $this->belongsTo(kategori_loker::class,'kategori_id');
    }

    public function slugConfigs(): array
    {
        return [
            'slug' => 'nama_perusahaan'
        ];
    }
}
