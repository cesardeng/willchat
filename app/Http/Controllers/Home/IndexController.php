<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use EasyWeChat\Card\Cards\Groupon;
use EasyWeChat\Foundation\Application;

class IndexController extends Controller
{
    public function getIndex()
    {
        $easywechat = new Application(get_wechat_options(16));


        $ccc = new Groupon();

        $card = $easywechat->card;

        $res = $card->create($ccc);

        dump($res);

        exit;



//        return view('home.index');
    }
}
