<?php

namespace App\Http\Controllers;

use App\Models\HamburgerActiveButton;
use Illuminate\Http\Request;

class HamburgerButtonController extends Controller
{
    public function activeBtn(){
        $model = HamburgerActiveButton::first();
        $model->event = $model->event == 'sidebar-icon-only' ? '' : 'sidebar-icon-only';
        $model->save();
        return redirect()->back();
    }
}
