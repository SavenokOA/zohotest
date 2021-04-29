<?php

namespace App\Http\Controllers;
use zcrmsdk\crm\crud\ZCRMJunctionRecord;
use zcrmsdk\crm\setup\restclient\ZCRMRestClient;
require 'vendor/autoload.php';
use Illuminate\Http\Request;

class RelationController extends Controller
{


    public function __construct()
    {
        $configuration =array("client_id"=>"1000.KWZ2C7SSLY4BSN4LSWOHZLNVC3GZMS","client_secret"=>"d726d7cd2ca32521d0fcdac69dee5f1fa032e17f99","redirect_uri"=>"http://localhost","currentUserEmail"=>"oleg2455553535@gmail.com");
        ZCRMRestClient::initialize($configuration);
    }
    public function addRelation()
    {
        $record = ZCRMRestClient::getInstance()->getRecordInstance("Tasks", "4858101000000307001"); // To get record instance
        $junctionrecord = ZCRMJunctionRecord::getInstance("Deals", "4858101000000307001"); // to get the junction record instance
        $responseIns = $record->addRelation($junctionrecord); // to add a relation between the record and the junction record
        echo "HTTP Status Code:" . $responseIns->getHttpStatusCode(); // To get http response code
        echo "Status:" . $responseIns->getStatus(); // To get response status
        echo "Message:" . $responseIns->getMessage(); // To get response message
        echo "Code:" . $responseIns->getCode(); // To get status code
        echo "Details:" . $responseIns->getDetails()['id'];
    }
}$obj =new Record();
$obj->addRelation();


