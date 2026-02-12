<?php  

namespace App\Models;    

use Illuminate\Database\Eloquent\Builder;    
use Illuminate\Database\Eloquent\Model;    

/**    
* @mixin Builder    
*/class Memo extends Model    
{
    protected $fillable = [
        'office_id',
        'text',
    ];

    public function office()
    {
        return $this->belongsTo(Office::class);
    }
}
