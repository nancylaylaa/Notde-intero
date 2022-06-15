<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
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
                        <h1>Create Note</h1>
                    </div>
                    <p></p>
                    <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" name="judul" id="judul" class="form-control" max="13">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" name="deskripsi" id="deskripsi" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Isi</label>
                            <textarea class="form-control" name="isi" aria-label="With textarea" id="isi"></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark"> Simpan </button>
                        <a class="btn btn-danger" href="/"> Batal </a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>