<?php
use Illuminate\Support\Facades\Http;
namespace App\Http\Controllers;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class NoteController extends Controller
{
    public function getNote(){
        $client = new Client();
        $response = $client->request('GET','http://192.168.56.23/api_notde/note_crud_api.php');
        $getStatus = $response->getStatusCode();
        $body = $response->getBody();

        $note = json_decode($body,true);
        $note = $note['data'];

        return view('welcome',["note"=>$note]);
    }

    public function Store(Request $request){
        $judul = $request->judul;
        $deskripsi = $request->deskripsi;
        $isi = $request->isi;

        $client = new client();
        
        $url = 'http://192.168.56.23/api_notde/note_crud_api.php';
        
        $response = $client->request('POST',$url, [
            'form_params' => [
                'judul' => $judul,
                'deskripsi' => $deskripsi,
                'isi' => $isi,
            ]
        ]);
        if($response->getStatusCode()){
            return redirect('/')->with('success', 'Category deleted successfully'); 
        }
    }

    public function Create(Request $request){
    
        return view('/create');
    }

    public function Destroy($id){
        $client = new Client();
        $url = 'http://192.168.56.23/api_notde/note_crud_api.php?id='.$id;
        $response = $client->request('DELETE', $url);
        if($response->getStatusCode()){
            return redirect('/')->with('success', 'Category deleted successfully'); 
        }
               
    }

    public function Edit($id){
        $client = new Client();
        $response = $client->request('GET','http://192.168.56.23/api_notde/note_crud_api.php?id='.$id);
        $getStatus = $response->getStatusCode();
        $body = $response->getBody();

        $note = json_decode($body,true);
        $note = $note['data'];

        return view('edit',["note"=>$note]);
    }

    public function Update(Request $request,$id){
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];
        $isi = $_POST['isi'];

        $client = new Client();
        $url = 'http://192.168.56.23/api_notde/note_crud_api.php?id=' . $id;
        $response = $client->request('POST',$url, [
            'form_params' => [
                'judul' => $judul,
                'deskripsi' => $deskripsi,
                'isi' => $isi,
            ]
        ]);
        if($response->getStatusCode()){
            return redirect('/')->with('success', 'Category deleted successfully'); 
        }
    }
}