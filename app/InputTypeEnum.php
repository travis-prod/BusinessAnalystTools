<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\InputTypeEnum
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $name
 * @property int $project_id
 * @method static Builder|InputTypeEnum newModelQuery()
 * @method static Builder|InputTypeEnum newQuery()
 * @method static Builder|InputTypeEnum query()
 * @method static Builder|InputTypeEnum whereCreatedAt($value)
 * @method static Builder|InputTypeEnum whereId($value)
 * @method static Builder|InputTypeEnum whereName($value)
 * @method static Builder|InputTypeEnum whereProjectId($value)
 * @method static Builder|InputTypeEnum whereUpdatedAt($value)
 * @mixin Eloquent
 */
class InputTypeEnum extends Model
{
    protected $fillable = [
        'name',
    ];
}
