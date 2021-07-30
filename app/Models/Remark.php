<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;

class Remark extends Model
{
    use HasFactory;

    public function tasks() {
        $this->belongsTo(Task::class);
    }
}
