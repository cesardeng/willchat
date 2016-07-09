<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use EasyWeChat\Foundation\Application;

class IndexController extends Controller
{
    public function getIndex()
    {
        $easywechat = new Application(get_wechat_options(16));


        $card = $easywechat->card;

        $res = $card->lists();

        dump($res);

        exit;



//        return view('home.index');
    }
}
