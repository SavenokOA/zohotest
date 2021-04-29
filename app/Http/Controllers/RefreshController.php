<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RefreshController extends Controller
{
    function generate_refresh_token(){


        $post =[
            'code'=> '1000.09f3210e5ec41ecdbed7fddb050329cd.593f493bdb591617440a91d170393169',
            'redirect_url' =>'http://localhost',
            'client_id'=>'1000.KWZ2C7SSLY4BSN4LSWOHZLNVC3GZMS',
            'client_secret'=>'d726d7cd2ca32521d0fcdac69dee5f1fa032e17f99',
            'grant_type' =>'authorization_code'
        ];


        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://accounts.zoho.com/oauth/v2/token?code=1000.f8e185a6cd6358134cbbe71df6fc7880.265666015c04ae08fe81918d46eb5cf8&redirect_uri=http://localhost&client_id=1000.KWZ2C7SSLY4BSN4LSWOHZLNVC3GZMS&client_secret=d726d7cd2ca32521d0fcdac69dee5f1fa032e17f99&grant_type=authorization_code',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: 	application/x-www-form-urlencoded',
                'Cookie: _zcsr_tmp=c7aeb81a-f7ef-40f3-8b87-327162b54978; b266a5bf57=dcb92d0f99dd7421201f8dc746d54606; iamcsr=c7aeb81a-f7ef-40f3-8b87-327162b54978'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;





    }
}
