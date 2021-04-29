<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    function create_task()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://www.zohoapis.com/crm/v2/Tasks',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
    "data":[
        {
        "Subject": "Task 1",
        "Related to": "Test deal 3"
    }
],
"trigger":[
    "approval",
    "workflow",
    "blueprint"
]
}',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Zoho-oauthtoken 1000.fde77c41616eadd6fc49788ea3790e17.ad0f951aa33bbe66c1b19b298e996276',
                'Content-Type: application/json',
                'Cookie: 1a99390653=a39e9ecd87b45a785f4a04291d2d76fa; _zcsr_tmp=52f755e0-777a-4101-8378-1719193cb5c8; crmcsr=52f755e0-777a-4101-8378-1719193cb5c8'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }
}
