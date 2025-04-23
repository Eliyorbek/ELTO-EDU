<?php

namespace App\Http\Controllers;

use App\Models\DarkOrLight;

class DarkOrLightController extends Controller{

    public function darkOrLight(){
        $model = DarkOrLight::where('id' , '1')->first();
        $model->name = $model->name=='style'?'dark':'style';
        $model->save();
        return redirect()->back();
    }
}
