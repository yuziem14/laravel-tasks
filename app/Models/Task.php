<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Remark;

class Task extends Model
{
    use HasFactory;

    public function remarks() {
        $this->hasMany(Remark::class);
    }
}
