<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'description',
        'reporting_date',
        'society_id',
        'lamp_id'
    ];

    /**
     * Get the user that owns the Report
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function society(): BelongsTo
    {
        return $this->belongsTo(User::class, 'society_id', 'id');
    }

    /**
     * Get the user that owns the Report
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lamp(): BelongsTo
    {
        return $this->belongsTo(Lamp::class, 'lamp_id');
    }
}
