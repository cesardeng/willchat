<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use EasyWeChat\Foundation\Application;

class IndexController extends Controller
{

    public function getIndex()
    {
        $easywechat = new Application([]);


        $card = $easywechat->card;

        dump($card);

        exit;



//        return view('home.index');
    }
}
