<?php    

namespace App\Http\Controllers;    

use App\Models\Office;    
use Illuminate\View\View;  
use App\Models\Memo; 

class OfficeController extends Controller    
{    
   public function getOffices()
   {    
        if (!session('user_id')) {
            return redirect('/login')->with('error', 'ログインしてください');
        }

        $offices = Office::getList();
        //dd($offices);
        return view("office", ["offices" => $offices]);
   }    
}
