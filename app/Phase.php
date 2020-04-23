<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Phase
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string|null $description
 * @property int $project_id
 * @property string $start_date
 * @property string|null $estimated_completion_date
 * @property string|null $actual_completion_date
 * @property int|null $overall_rating
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Phase newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Phase newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Phase query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Phase whereActualCompletionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Phase whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Phase whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Phase whereEstimatedCompletionDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Phase whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Phase whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Phase whereOverallRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Phase whereProjectId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Phase whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Phase whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Phase extends Model
{
    //
}
