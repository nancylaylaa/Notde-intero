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
                    <form action="updatePasienDoCase6.php" method="post">
                        <input type = "hidden" name="id_pasien" value="<?php echo $judul;?>">
                        <div class="form-group">
                            <label>Give me a title</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $deskripsi;?>">
                        </div>
                        <div class="form-group">
                            <label>Spill it all here, </label>
                            <textarea class="form-control" aria-label="With textarea" value="<?php echo $isi;?>"></textarea>
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Safekeep">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
