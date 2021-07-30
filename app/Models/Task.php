<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Remark;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'done'];

    public function remarks() {
        return $this->hasMany(Remark::class);
    }
}
