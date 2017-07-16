<?php
namespace App\Lib\Ragnarok;
use App\Models\Char;
use App\Models\SiteOnlinepeak;

/**
 * Created by IntelliJ IDEA.
 * User: mickaelvillers
 * Date: 16/07/2017
 * Time: 16:42
 */

class Server {

    public function is_server_up() {

        //$toto = \App\Models\Char::where('char_id', 150000)->first()->guild;
        //$char = \App\Models\Guild::where('guild_id', 3)->first()->members;
        //dd($char[0]->char->name);


        // todo: extract to config
        $serverHost = '46.105.55.202';

        $loginUp = $this->check_server($serverHost, 6900);
        $charUp = $this->check_server($serverHost, 6121);
        $mapUp = $this->check_server($serverHost, 5121);
        return ($loginUp && $charUp && $mapUp);
    }

    public function get_nb_online() {
        $nbOnline = Char::where('online', '>', '0')->count();
        $nbMax = SiteOnlinepeak::findOrFail(1);

        if ((int)$nbOnline > (int)$nbMax->players)
        {
           $nbMax->players = $nbOnline;
           $nbMax->save();
        }

        $nbMax = $nbMax->players;

        return compact('nbOnline', 'nbMax');
    }

    private function check_server($host, $port) {
        $sock = @fsockopen($host, $port, $errno, $errstr, 2);

        if (is_resource($sock)) {
            fclose($sock);

            return true;
        }

        return false;
    }
}