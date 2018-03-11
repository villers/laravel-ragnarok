<?php

namespace App\Http\Controllers;

use App\Lib\Ragnarok\Emblem;
use App\Repositories\CharRepository;
use App\Repositories\GuildRepository;
use App\Repositories\NewsRepository;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{
    protected $charRepository;
    protected $guildRepository;
    protected $newsRepository;

    /**
     * UserController constructor.
     * @param CharRepository $charRepository
     * @param GuildRepository $guildRepository
     * @param NewsRepository $newsRepository
     */
    public function __construct(CharRepository $charRepository, GuildRepository $guildRepository, NewsRepository $newsRepository)
    {
        $this->charRepository = $charRepository;
        $this->guildRepository = $guildRepository;
        $this->newsRepository = $newsRepository;
    }

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
        $news = $this->newsRepository->paginate('desc', 3);

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
     * Show the page partenaire.
     *
     * @return \Illuminate\Http\Response
     */
    public function partenaire()
    {
        return view('partenaire');
    }

    /**
     * Show the page territoire.
     *
     * @return \Illuminate\Http\Response
     */
    public function territoire()
    {
        return view('territoire');
    }

    /**
     * Show the page NwoE.
     *
     * @return \Illuminate\Http\Response
     */
    public function nwoe()
    {
        return view('nwoe');
    }

    /**
     * Show the page staff.
     *
     * @return \Illuminate\Http\Response
     */
    public function online()
    {
        $chars = $this->charRepository->getOnline();

        return view('online', compact('chars'));
    }

    public function emblem($id) {
        $guild = $this->guildRepository->get($id, 'guild_id')->emblem_data;
        $ebm = @gzuncompress(pack('H*', $guild));

        $response = Response::make((string)imagepng(Emblem::imagecreatefrombmpstring($ebm)));
        $response->header('Content-Type', 'image/png');

        return $response;
    }
}
