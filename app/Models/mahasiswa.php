<?php

namespace App\Models;

use App\Models\organization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $fillable = [
        'NPM',
        'Name',
        'Slug',
        'Class',
        'Address',
        'organization_id',
    ];
    public function organization()
    {

        return $this->belongsTo(organization::class);

    }

}
