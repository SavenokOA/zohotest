<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccessController extends Controller
{
    function create_access_token()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://accounts.zoho.com/oauth/v2/token?refresh_token=1000.8991014f9193a2e80fd7a3b83b417fe2.ee0e3d2be1e10e2277419f824c08e8fc&client_id=1000.KWZ2C7SSLY4BSN4LSWOHZLNVC3GZMS&client_secret=d726d7cd2ca32521d0fcdac69dee5f1fa032e17f99&grant_type=refresh_token',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_HTTPHEADER => array(
                'Cookie: _zcsr_tmp=c7aeb81a-f7ef-40f3-8b87-327162b54978; b266a5bf57=dcb92d0f99dd7421201f8dc746d54606; iamcsr=c7aeb81a-f7ef-40f3-8b87-327162b54978'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

}
