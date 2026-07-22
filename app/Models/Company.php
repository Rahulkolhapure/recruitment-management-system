<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company_name',
        'company_logo',
        'website',
        'industry',
        'company_size',
        'founded_year',
        'description',
        'email',
        'phone',
        'country',
        'state',
        'city',
        'address',
        'pincode',
        'status'
    ];

    protected function casts(): array
    {
        return [
            'status' => 'boolean',
            'founded_year' => 'integer',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}