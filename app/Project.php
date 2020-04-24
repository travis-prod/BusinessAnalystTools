<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Project
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $name
 * @property string|null $description
 * @property string $start_date
 * @property string|null $estimated_completion_date
 * @property string|null $actual_completion_date
 * @property int|null $overall_rating
 * @method static Builder|Project newModelQuery()
 * @method static Builder|Project newQuery()
 * @method static Builder|Project query()
 * @method static Builder|Project whereActualCompletionDate($value)
 * @method static Builder|Project whereCreatedAt($value)
 * @method static Builder|Project whereDescription($value)
 * @method static Builder|Project whereEstimatedCompletionDate($value)
 * @method static Builder|Project whereId($value)
 * @method static Builder|Project whereName($value)
 * @method static Builder|Project whereOverallRating($value)
 * @method static Builder|Project whereStartDate($value)
 * @method static Builder|Project whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Project extends Model
{
    protected $fillable = [
        "name",
        "description",
        "start_date",
        "estimated_completion_date",
        "actual_completion_date",
        "overall_rating",
    ];
}
