<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Product
 *
 * @property integer $id
 * @property string $name
 * @property string $alias
 * @property integer $price
 * @property string $intro
 * @property string $content
 * @property \Illuminate\Database\Eloquent\Collection|\App\Product_image[] $image
 * @property string $keywords
 * @property string $description
 * @property integer $user_id
 * @property integer $cate_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\User $user
 * @property-read \App\Category $category
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereAlias($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product wherePrice($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereIntro($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereKeywords($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereCateId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Product extends Model {

	protected $table = 'products';
    
    protected $fillable = ['name', 'alias', 'price', 'intro', 'content', 'image', 'keywords', 'description', 'user_id', 'cate_id'];
    
    public $timestamps = false;

    public function image()
    {
        return  $this->hasMany('App\Product_image');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return  $this->belongsTo('App\Category');
    }
}
