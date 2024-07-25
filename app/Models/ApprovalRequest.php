<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovalRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        // 'kaprodi_id',
        'document_name',
        'document_path',
        'signed_document_path',
        'notes',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function kaprodi()
    // {
    //     return $this->belongsTo(Kaprodi::class);
    // }
}
