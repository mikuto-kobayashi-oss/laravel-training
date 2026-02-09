<?php    

namespace App\Http\Controllers;    

use App\Models\Ofice;    
use Illuminate\View\View;    

class OficeController extends Controller    
{    
   public function getUser(): View    
   {    
       $ofice = Ofice::all();    
       return view("ofice", ["ofices" => $ofice]);    
   }    
}
