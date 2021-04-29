<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendController extends Controller
{
    function create_deal(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://www.zohoapis.com/crm/v2/Deals',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
    "data":[
        {
        "Deal_Name": "Test deal 3",
        "Stage": "First Stage"
    }
],
"trigger":[
    "approval",
    "workflow",
    "blueprint"
]
}',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Zoho-oauthtoken 1000.b1d3f888a989e746e74d472b9df45d5c.54e0ec6661f071797f82a6b676da9d5d',
                'Content-Type: application/json',
                'Cookie: 1a99390653=a39e9ecd87b45a785f4a04291d2d76fa; _zcsr_tmp=52f755e0-777a-4101-8378-1719193cb5c8; crmcsr=52f755e0-777a-4101-8378-1719193cb5c8'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;

    }

}
