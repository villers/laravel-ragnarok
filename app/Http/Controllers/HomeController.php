<?php

namespace App\Http\Controllers;

use App\Lib\Ragnarok\Emblem;
use App\Models\Char;
use App\Models\Guild;
use App\Models\News;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the news.
     *
     * @return \Illuminate\Http\Response
     */
    public function news()
    {
        $news = News::orderBy('created_at', 'desc')
            ->orderByDesc('created_at')
            ->paginate(3);

        return view('news', compact('news'));
    }

    /**
     * Show the news.
     *
     * @return \Illuminate\Http\Response
     */
    public function informations()
    {
        return view('informations');
    }

    /**
     * Show the page staff.
     *
     * @return \Illuminate\Http\Response
     */
    public function staff()
    {
        return view('staff');
    }

    /**
     * Show the page staff.
     *
     * @return \Illuminate\Http\Response
     */
    public function online()
    {
        $chars = Char::where('online', '>', 0)
            ->with('guild')
            ->get();

        return view('online', compact('chars'));
    }

    public function emblem($id) {
        $guild = Guild::where('guild_id', $id)->firstOrFail();

        $ebm = $guild->emblem_data;
        $ebm=@gzuncompress(pack('H*',$ebm));
        // need to convert that to PNG with transparency
        $im=Emblem::imagecreatefrombmpstring($ebm);
        header('Content-Type: image/png');
        //The guild emblem ^_^
        imagepng($im);
        exit;
    }
}
