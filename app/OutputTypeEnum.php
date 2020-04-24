<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\OutputTypeEnum
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $name
 * @property int $project_id
 * @method static Builder|OutputTypeEnum newModelQuery()
 * @method static Builder|OutputTypeEnum newQuery()
 * @method static Builder|OutputTypeEnum query()
 * @method static Builder|OutputTypeEnum whereCreatedAt($value)
 * @method static Builder|OutputTypeEnum whereId($value)
 * @method static Builder|OutputTypeEnum whereName($value)
 * @method static Builder|OutputTypeEnum whereProjectId($value)
 * @method static Builder|OutputTypeEnum whereUpdatedAt($value)
 * @mixin Eloquent
 */
class OutputTypeEnum extends Model
{
    protected $fillable = [
        'name',
    ];
}
