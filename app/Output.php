<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Output
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $entry_id
 * @property int $type_id
 * @property int $effectiveness
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Output newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Output newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Output query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Output whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Output whereEffectiveness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Output whereEntryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Output whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Output whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Output whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Output extends Model
{
    //
}
