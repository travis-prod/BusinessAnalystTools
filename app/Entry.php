<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Entry
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $phase_id
 * @property string $start_of_week
 * @property int $personal_feeling
 * @property int $client_feeling
 * @property int $num_of_meetings
 * @property int $num_of_communications
 * @property int $understanding
 * @method static Builder|Entry newModelQuery()
 * @method static Builder|Entry newQuery()
 * @method static Builder|Entry query()
 * @method static Builder|Entry whereClientFeeling($value)
 * @method static Builder|Entry whereCreatedAt($value)
 * @method static Builder|Entry whereId($value)
 * @method static Builder|Entry whereNumOfCommunications($value)
 * @method static Builder|Entry whereNumOfMeetings($value)
 * @method static Builder|Entry wherePersonalFeeling($value)
 * @method static Builder|Entry wherePhaseId($value)
 * @method static Builder|Entry whereStartOfWeek($value)
 * @method static Builder|Entry whereUnderstanding($value)
 * @method static Builder|Entry whereUpdatedAt($value)
 * @mixin Eloquent
 * @property string $date
 * @method static Builder|Entry whereDate($value)
 */
class Entry extends Model
{
    protected $fillable = [
        'date',
        'personal_feeling',
        'client_feeling',
        'num_of_meetings',
        'num_of_communications',
        'understanding',
    ];
}
