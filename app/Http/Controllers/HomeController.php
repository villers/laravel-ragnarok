<?php

namespace App\Http\Controllers;

use App\Lib\Ragnarok\Emblem;
use App\Repositories\CartInventoryRepository;
use App\Repositories\CharRepository;
use App\Repositories\GuildRepository;
use App\Repositories\NewsRepository;
use App\Repositories\VendingItemRepository;
use App\Repositories\VendingRepository;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{
    protected $charRepository;
    protected $guildRepository;
    protected $newsRepository;
    protected $vendingRepository;
    protected $vendingItemRepository;
    protected $cartInventoryRepository;

    /**
     * UserController constructor.
     * @param CharRepository $charRepository
     * @param GuildRepository $guildRepository
     * @param NewsRepository $newsRepository
     * @param VendingRepository $vendingRepository
     * @param VendingItemRepository $vendingItemRepository
     * @param CartInventoryRepository $cartInventoryRepository
     */
    public function __construct(CharRepository $charRepository, GuildRepository $guildRepository, NewsRepository $newsRepository, VendingRepository $vendingRepository, VendingItemRepository $vendingItemRepository, CartInventoryRepository $cartInventoryRepository)
    {
        $this->charRepository = $charRepository;
        $this->guildRepository = $guildRepository;
        $this->newsRepository = $newsRepository;
        $this->vendingRepository = $vendingRepository;
        $this->vendingItemRepository = $vendingItemRepository;
        $this->cartInventoryRepository = $cartInventoryRepository;
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

    /**
     * @param $id
     * @return mixed
     */
    public function emblem($id)
    {
        $guild = $this->guildRepository->get($id, 'guild_id')->emblem_data;
        $ebm = @gzuncompress(pack('H*', $guild));

        $response = Response::make((string)imagepng(Emblem::imagecreatefrombmpstring($ebm)));
        $response->header('Content-Type', 'image/png');

        return $response;
    }

    public function vendings()
    {
        $vendings = $this->vendingRepository->all();

        return $vendings;
    }

    public function vendingsItems($id)
    {
        $vendingsItems = $this->vendingItemRepository->get($id, 'vending_id');
        $cartItems = $this->cartInventoryRepository->get($vendingsItems->cartinventory_id);

        return compact('vendingsItems', 'cartItems');
    }
}
