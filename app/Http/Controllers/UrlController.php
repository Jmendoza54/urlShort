<?php

namespace App\Http\Controllers;

use App\Http\Resources\UrlResource;
use App\Models\Url;
use Illuminate\Http\Request;

class UrlController extends Controller
{

    public function store(Request $request){
        $url = new Url();
        $short = $this->generateCode();
        $url->short =  $short;
        $url->redirect =  $request->redirect;
        $save = $url->save();
        
        return new UrlResource($url);
    }

    public function generateCode(){
        $pattern = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $input_length = strlen($pattern);
        $random_string = '';
        for($i = 0; $i < 6; $i++) {
            $random_character = $pattern[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
    
        return $random_string;
    }

    public function redirect($short){
        $res = Url::where('short', $short)->get();
        $redirect = $res[0]->redirect;
        return redirect($redirect) ;
    }
}
