<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = ['id'];
    
    public function contractors()
    {
        return $this->hasMany(User::class, 'company_id');
    }
}
