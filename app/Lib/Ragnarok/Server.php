<?php
namespace App\Lib\Ragnarok;

use App\Repositories\CharRepositoryEloquent;
use App\Repositories\SiteOnlinepeakRepositoryEloquent;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;
use Voerro\Laravel\VisitorTracker\Facades\VisitStats;

class Server
{
    private $charRepository;
    private $onlinepeakRepository;

    public function __construct(CharRepositoryEloquent $charRepository, SiteOnlinepeakRepositoryEloquent $onlinepeakRepository)
    {
        $this->charRepository = $charRepository;
        $this->onlinepeakRepository = $onlinepeakRepository;
    }

    public function is_server_up()
    {
        $serverHost = Config::get('ragnarok.server_ip');

        $loginUp = $this->check_server($serverHost, Config::get('ragnarok.server_login_port'));
        $charUp = $this->check_server($serverHost, Config::get('ragnarok.server_char_port'));
        $mapUp = $this->check_server($serverHost, Config::get('ragnarok.server_map_port'));

        return ($loginUp && $charUp && $mapUp);
    }

    public function get_nb_online()
    {
        $nbOnline = $this->charRepository->countOnline();
        $nbMax = $this->onlinepeakRepository->updateMaxOnline($nbOnline);

        return compact('nbOnline', 'nbMax');
    }

    public function get_unique_online_user() {
        if (Schema::hasTable('visitortracker_visits')) {
            return VisitStats::query()->visits()
                ->except(['ajax', 'bots'])
                ->period(Carbon::now()->subMinutes(5))
                ->unique()->count();
        }

        return 0;
    }

    private function check_server($host, $port)
    {
        $sock = @fsockopen($host, $port, $errno, $errstr, 2);

        if (is_resource($sock)) {
            fclose($sock);

            return true;
        }

        return false;
    }
}
