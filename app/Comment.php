<?php namespace Forum;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    /**
     * Enable soft deleting.
     */
    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'comments';

    /**
     * The attributes that are not allowed for mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Date var used for soft deleting.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

}
