<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Phase
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $name
 * @property string|null $description
 * @property int $project_id
 * @property string $start_date
 * @property string|null $estimated_completion_date
 * @property string|null $actual_completion_date
 * @property int|null $overall_rating
 * @method static Builder|Phase newModelQuery()
 * @method static Builder|Phase newQuery()
 * @method static Builder|Phase query()
 * @method static Builder|Phase whereActualCompletionDate($value)
 * @method static Builder|Phase whereCreatedAt($value)
 * @method static Builder|Phase whereDescription($value)
 * @method static Builder|Phase whereEstimatedCompletionDate($value)
 * @method static Builder|Phase whereId($value)
 * @method static Builder|Phase whereName($value)
 * @method static Builder|Phase whereOverallRating($value)
 * @method static Builder|Phase whereProjectId($value)
 * @method static Builder|Phase whereStartDate($value)
 * @method static Builder|Phase whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Phase extends Model
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
