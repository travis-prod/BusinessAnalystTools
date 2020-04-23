<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Input
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $entry_id
 * @property int $type_id
 * @property int $effectiveness
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Input newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Input newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Input query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Input whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Input whereEffectiveness($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Input whereEntryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Input whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Input whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Input whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Input extends Model
{
    //
}
