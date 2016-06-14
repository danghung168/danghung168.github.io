<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Product_image
 *
 * @property integer $id
 * @property string $image
 * @property integer $product_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Product $product
 * @method static \Illuminate\Database\Query\Builder|\App\Product_image whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product_image whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product_image whereProductId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product_image whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Product_image whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Product_image extends Model {

	protected $table = 'product_images';

    protected $fillable = ['image', 'product_id'];

    public $timestamps = false;
    
    public function product()
    {
        return  $this->belongsTo('App\Product');
    }
    
   

}
