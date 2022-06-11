<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class NoteController extends Controller
{
    function getNote(){
        $client = new Client();
        $response = $client->request('GET','http://192.168.56.23/Notde-intero/getData.php');
        $getStatus = $response->getStatusCode();
        $body = $response->getBody();

        $note = json_decode($body,true);
        $note = $note['data'];

        return view('welcome',["note"=>$note]);
    }

    function postStore(Request $request){
        
    }

    function delete(){

    }

    function update(){

    }
}