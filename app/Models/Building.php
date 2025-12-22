<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @author Xanders
 * @see https://team.xsamtech.com/xanderssamoth
 */
class Building extends Model
{
    use HasFactory;

    protected $table = 'buildings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * MANY-TO-MANY
     * One user for several buildings
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
