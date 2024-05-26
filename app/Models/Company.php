<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function licenses(){
        return $this->belongsToMany(Licenses::class,'company_license');
    }
}
