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
        'del_flg',
    ];

    public static function getList()
    {
        return Office::where('del_flg', 0)->get();
    }
    
    public function memos()
    {
        return $this->hasMany(Memo::class);
    }
}
