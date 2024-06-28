<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Repair extends Model
{
    use HasFactory;

    protected $fillable = [
        'completion',
        'status',
        'report_id',
        'technician_id'
    ];

    /**
     * Get the user that owns the Repair
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function report(): BelongsTo
    {
        return $this->belongsTo(Report::class, 'report_id');
    }

    /**
     * Get the user that owns the Repair
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function technician(): BelongsTo
    {
        return $this->belongsTo(User::class, 'technician_id', 'id');
    }
}
