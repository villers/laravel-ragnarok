<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 * @package App\Models
 */
class News extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'body',
        'category_id',
        'created_at',
    ];

    /**
     * @param $date
     */
    public function setCreatedAtAttribute($date) {
        $this->attributes['created_at'] = Carbon::parse($date);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category() {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    /**
     * Get the tags associated with news item
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags() {
        return $this->belongsToMany('App\Tag', 'news_tags', 'news_id', 'tag_id');
    }

}
