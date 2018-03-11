<?php

namespace App\Lib\Starpass;

class Starpass
{
    public function codeIsInvalide($idp, $idd, $input)
    {
        $code = (isset($input['code1'])) ? $input['code1'] : null;

        $ident = urlencode($idp.";;".$idd);
        $codes = urlencode($code);

        $get_f = @file("http://script.starpass.fr/check_php.php?ident=$ident&codes=$codes");

        if (!$get_f) {
            exit("Votre serveur n'a pas accès au serveur de StarPass, merci de contacter votre hébergeur.");
        }

        $tab = explode("|", $get_f[0]);

        return (substr($tab[0], 0, 3) != "OUI");
    }

    public function codeIsValid($idp, $idd, $input)
    {
        return !$this->codeIsInvalide($idp, $idd, $input);
    }
}
