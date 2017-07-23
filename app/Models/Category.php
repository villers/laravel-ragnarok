<?php
/**
 * Created by IntelliJ IDEA.
 * User: mickaelvillers
 * Date: 21/07/2017
 * Time: 22:15
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package App\Models
 */
class Category extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['title'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function newsItems() {
        return $this->belongsTo('App\News');
    }

    /**
     * @return array
     */
    public static function getAllCategories() {
        $result = [];
        $categories = Category::all(['id', 'title'])->toArray();
        foreach ($categories as $category) {
            $categoryId = $category['id'];
            $result[$categoryId] = $category['title'];
        }
        return $result;
    }

}