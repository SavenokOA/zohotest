<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use zcrmsdk\crm\setup\restclient\ZCRMRestClient;
use zcrmsdk\oauth\ZohoOAuth;

class MainController extends Controller
{
    public function auth()
    {
        $configuration =[
        "client_id"=>"1000.KWZ2C7SSLY4BSN4LSWOHZLNVC3GZMS",
        "client_secret"=>"d726d7cd2ca32521d0fcdac69dee5f1fa032e17f99",
        "redirect_uri"=>"http://localhost",
        "currentUserEmail"=>"oleg2455553535@gmail.com"];

    ZCRMRestClient::initialize($configuration);

        $oAuthClient = ZohoOAuth::getClientInstance();
        $refreshToken = "1000.4bed01e5a22888e16863a46860c69769.374d84ef4cc361f1663093a0f689403d";
        $userIdentifier = "oleg2455553535@gmail.com";
        $oAuthTokens = $oAuthClient->generateAccessTokenFromRefreshToken($refreshToken,$userIdentifier);

        return view('welcome');
    }


}
