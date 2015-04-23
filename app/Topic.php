<?php namespace Forum;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Topic extends Model
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
    protected $table = 'topics';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'body', 'author_id', 'visits', 'tags', 'category'];

    /**
     * Date var used for soft deleting.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

}
