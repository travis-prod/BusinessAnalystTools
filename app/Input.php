<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Input
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $entry_id
 * @property int $type_id
 * @property int $effectiveness
 * @method static Builder|Input newModelQuery()
 * @method static Builder|Input newQuery()
 * @method static Builder|Input query()
 * @method static Builder|Input whereCreatedAt($value)
 * @method static Builder|Input whereEffectiveness($value)
 * @method static Builder|Input whereEntryId($value)
 * @method static Builder|Input whereId($value)
 * @method static Builder|Input whereTypeId($value)
 * @method static Builder|Input whereUpdatedAt($value)
 * @mixin Eloquent
 * @property int $count
 * @property-read InputTypeEnum $inputTypeEnum
 * @method static Builder|Input whereCount($value)
 */
class Input extends Model
{
    protected $fillable = [
        'count',
        'effectiveness',
    ];

    protected $with = [
        'inputTypeEnum',
    ];

    public function inputTypeEnum()
    {
        return $this->belongsTo(InputTypeEnum::class, 'type_id');
    }
}
