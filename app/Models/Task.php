<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description"
    ];

    public function toggleComplete() {
        $this->completed = !$this->completed;
        $this->save();
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
