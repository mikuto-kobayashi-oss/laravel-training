<?php  

namespace App\Models;    

use Illuminate\Database\Eloquent\Builder;    
use Illuminate\Database\Eloquent\Model;    

/**    
* @mixin Builder    
*/class Office extends Model    
{
    protected $fillable = [
        'name',
        'address',
        'post_code',
        'stair',
        'comment',
    ];
    public static function getList()
{
    return Office::orderBy('id')->get();
}
}
