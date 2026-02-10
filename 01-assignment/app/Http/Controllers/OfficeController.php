<?php    

namespace App\Http\Controllers;    

use App\Models\Office;    
use Illuminate\View\View;    

class OfficeController extends Controller    
{    
   public function getUser(): View    
   {    
       $offices = Office::all();    
       return view("office", ["offices" => $offices]);    
   }    
}
