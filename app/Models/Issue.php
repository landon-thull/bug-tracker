<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'closed_at'
    ];

    public function createdBy() {
        return $this->belongsTo(User::class, 'opened_by');
    }

    public function closedBy() {
        return $this->belongsTo(User::class, 'closed_by');
    }

    protected $casts = [
        'closed_at' => 'datetime'
    ];
}
