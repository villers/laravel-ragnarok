<?php

namespace App\Http\Controllers;

use App\Lib\Ragnarok\Emblem;
use App\Models\Vote;
use App\Repositories\AccRegNumRepository;
use App\Repositories\CartInventoryRepository;
use App\Repositories\CharRepository;
use App\Repositories\GuildRepository;
use App\Repositories\LoginRepository;
use App\Repositories\NewsRepository;
use App\Repositories\TotemRepository;
use App\Repositories\VendingItemRepository;
use App\Repositories\VendingRepository;
use App\Repositories\VoteRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{
    protected $charRepository;
    protected $guildRepository;
    protected $newsRepository;
    protected $vendingRepository;
    protected $vendingItemRepository;
    protected $cartInventoryRepository;
    protected $accRegNumRepository;
    protected $voteRepository;
    protected $loginRepository;
    protected $totemRepository;

    /**
     * UserController constructor.
     * @param CharRepository $charRepository
     * @param GuildRepository $guildRepository
     * @param NewsRepository $newsRepository
     * @param VendingRepository $vendingRepository
     * @param VendingItemRepository $vendingItemRepository
     * @param CartInventoryRepository $cartInventoryRepository
     * @param AccRegNumRepository $accRegNumRepository
     * @param VoteRepository $voteRepository
     * @param LoginRepository $loginRepository
     * @param TotemRepository $totemRepository
     */
    public function __construct(
        CharRepository $charRepository,
        GuildRepository $guildRepository,
        NewsRepository $newsRepository,
        VendingRepository $vendingRepository,
        VendingItemRepository $vendingItemRepository,
        CartInventoryRepository $cartInventoryRepository,
        AccRegNumRepository $accRegNumRepository,
        VoteRepository $voteRepository,
        LoginRepository $loginRepository,
        TotemRepository $totemRepository
    ) {
        $this->charRepository = $charRepository;
        $this->guildRepository = $guildRepository;
        $this->newsRepository = $newsRepository;
        $this->vendingRepository = $vendingRepository;
        $this->vendingItemRepository = $vendingItemRepository;
        $this->cartInventoryRepository = $cartInventoryRepository;
        $this->accRegNumRepository = $accRegNumRepository;
        $this->voteRepository = $voteRepository;
        $this->loginRepository = $loginRepository;
        $this->totemRepository = $totemRepository;
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
        $territoire = $this->totemRepository->getTerritoireStatus();
        return view('news', compact('news', 'territoire'));
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
     * Show the page téléchargment.
     *
     * @return \Illuminate\Http\Response
     */
    public function telechargement()
    {
        return view('telechargement');
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
        $regions = $this->totemRepository->getTotemGroupedByRegion();

        return view('territoire', compact('regions'));
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

        $response = Response::make((string)imagepng(Emblem::imagecreatefrombmpstring($ebm), null, 0, PNG_ALL_FILTERS));
        $response->header('Content-Type', 'image/png');

        return $response;
    }

    public function vendings()
    {
        $vendings = $this->vendingRepository->all();

        return view('vendings', compact('vendings'));
    }

    public function vendingsItems($id)
    {
        $vending = $this->vendingRepository->get($id);

        return view('vendingsItems', compact('vending'));
    }

    public function callbackVote(Request $request)
    {
        $login = $request->input('pseudo');
        $action = $request->input('action');
        $key = $request->input('key');
        $success = false;

        if ($login && $action === 'vote' && Config::get('ragnarok.rotop_private_key') === $key) {
            $account = $this->loginRepository->get($login, 'userid');

            if ($account) {
                $this->voteRepository->incrementOrCreate([
                    'account_id' => $account->account_id,
                ], [
                    'vote' => DB::raw('vote+'. 1),
                ]);

                $this->accRegNumRepository->incrementOrCreate([
                    'account_id' => $account->account_id,
                    'key' => '#CASHPOINTS',
                ], [
                    'value' => DB::raw('value+'. Config::get('ragnarok.server_nb_vote_add_cashpoint')),
                ]);

                $success = true;
            }
        }

        return compact('success');
    }
}
