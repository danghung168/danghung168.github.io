<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Category
 *
 * @property integer $id
 * @property string $name
 * @property string $alias
 * @property integer $order
 * @property integer $paren_id
 * @property string $keywords
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $product
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereAlias($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereOrder($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereParenId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereKeywords($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Category extends Model {

	protected $table = 'categories';
    
    protected $fillable = ['name', 'alias', 'order', 'parent_id', 'keyword', 'description'];
    
    public $timestamps = true;
    
    public function product()
    {
        return  $this->hasMany('App\Product');
    }

}
