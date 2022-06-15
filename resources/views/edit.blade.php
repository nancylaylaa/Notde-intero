<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Change a Notde</h1>
                    </div>
                    <p>We helps reduce paper usage to edit your notes that you want to change.</p>
                    @foreach($note as $data)
                    <form action="/update/{{ $data['id'] }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" class="form-control" name="judul" max="13" value="{{ $data['judul'] }}">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" value="{{ $data['deskripsi'] }}">
                        </div>
                        <div class="form-group">
                            <label>Isi Note</label>
                            <textarea class="form-control" name="isi">{{ $data['isi'] }}</textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Update">
                    </form>
                    @endforeach
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
