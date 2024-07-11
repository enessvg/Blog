<?php

namespace App\Http\Controllers;

use App\Models\Kvkk;
use Illuminate\Http\Request;

class SiteSettingsController extends Controller
{
    public function kvkk(){
        $kvkk = Kvkk::get()->first();
        return $kvkk;
    }

    public function privacy_policy(){
        $kvkk = Kvkk::get()->first();
        return $kvkk;
    }
}
