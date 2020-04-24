<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Output
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $entry_id
 * @property int $type_id
 * @property int $effectiveness
 * @method static Builder|Output newModelQuery()
 * @method static Builder|Output newQuery()
 * @method static Builder|Output query()
 * @method static Builder|Output whereCreatedAt($value)
 * @method static Builder|Output whereEffectiveness($value)
 * @method static Builder|Output whereEntryId($value)
 * @method static Builder|Output whereId($value)
 * @method static Builder|Output whereTypeId($value)
 * @method static Builder|Output whereUpdatedAt($value)
 * @mixin Eloquent
 * @property int $count
 * @property-read OutputTypeEnum $outputTypeEnum
 * @method static Builder|Output whereCount($value)
 */
class Output extends Model
{
    protected $fillable = [
        'count',
        'effectiveness',
    ];

    protected $with = [
        'outputTypeEnum',
    ];

    public function outputTypeEnum()
    {
        return $this->belongsTo(OutputTypeEnum::class, 'type_id');
    }
}
