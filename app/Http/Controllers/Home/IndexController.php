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


        $groupon = new Groupon();

        $card = $easywechat->card;

        $res = $card->create($groupon);

        dump($groupon);
        dump($res);

        exit;



//        return view('home.index');
    }
}
