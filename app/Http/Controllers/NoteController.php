<?php
use Illuminate\Support\Facades\Http;
namespace App\Http\Controllers;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class NoteController extends Controller
{
    function getNote(){
        $client = new Client();
        $response = $client->request('GET','http://192.168.56.23/api_notde/note_crud_api.php');
        $getStatus = $response->getStatusCode();
        $body = $response->getBody();

        $note = json_decode($body,true);
        $note = $note['data'];

        return view('welcome',["note"=>$note]);
    }

    function Store(Request $request){
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $isi = $this->input->post('isi');

        $response = $client->request(
            'POST','http://192.168.56.23/api_notde/note_crud_api.php', [
                'form_params' => [
                    'judul' => $judul,
                    'deskripsi' => $deskripsi,
                    'isi' => $isi
                ]
            ]
        );

        return redirect('welcome',['pesan'=>$response]);
    }

    function create(Request $request){
    
        return view('/create');
    }

    function delete(Request $id){
        $client = new Client();

        $response = $client->request(
            'DELETE',
            'http://192.168.56.23/api_notde/note_crud_api.php?id=' . $_GET['id']
        );
        return view('welcome',['pesan'=>$response]);        
    }

    function update(Request $id){
        $id = $_GET['id'];
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];
        $isi = $_POST['isi'];

        $client = new Client();

        $response = $client->request(
            'PUT',
            'http://192.168.56.23/api_notde/note_crud_api.php?id=' . $_GET['id'],
            [
                [

                    'judul' => $judul,
                    'deskripsi' => $deskripsi,
                    'isi' => $isi
                ]
            ]
        );
        
        $response = $client->request('GET','http://192.168.56.23/Notde-intero/getData.php');
        $getStatus = $response->getStatusCode();
        $body = $response->getBody();

        $note = json_decode($body,true);
        $note = $note['data'];

        return redirect('welcome',['note'=>$note]); 
    }
}