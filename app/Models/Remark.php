<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;

class Remark extends Model
{
    use HasFactory;

    protected $fillable = ['description'];

    public function task() {
        return $this->belongsTo(Task::class);
    }
}
