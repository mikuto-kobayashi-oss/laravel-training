<?php    

namespace App\Http\Controllers;    

use App\Models\Office;    
use Illuminate\View\View;  
use App\Models\Memo; 

class OfficeController extends Controller    
{    
   public function getOffices(): View    
   {    
        $offices = Office::getList();
        //dd($offices);
        return view("office", ["offices" => $offices]);
   }    
}
