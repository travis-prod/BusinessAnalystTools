<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Entry
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $phase_id
 * @property string $start_of_week
 * @property int $personal_feeling
 * @property int $client_feeling
 * @property int $num_of_meetings
 * @property int $num_of_communications
 * @property int $understanding
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry whereClientFeeling($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry whereNumOfCommunications($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry whereNumOfMeetings($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry wherePersonalFeeling($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry wherePhaseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry whereStartOfWeek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry whereUnderstanding($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Entry whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Entry extends Model
{
    //
}
