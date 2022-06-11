<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.88.1">
        <title>Notde - Intero</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/pricing/">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/pricing.css" rel="stylesheet">
        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        .navbar-custom {
                background-color: hsla(228, 82%, 13%, 1);
                color: white;
            }
            .header-custom {
                color: darkorange;
            }
            .card-custom {
                background-color: wheat;
                color: black;
            }
            .card-custom-header{
                background-color: hsla(228, 82%, 13%, 1);
            }
            .card-custom-footer{
                background-color: hsla(228, 82%, 13%, 1);
                color: 	rgb(200,200,200);
            }
            .card-custom-add{
                background-color: oldlace;
            }
        </style>
        
        <!-- Custom styles for this template -->
        
    </head>
    <body>
    
        <!-- navbar -->
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 navbar navbar-custom border-bottom shadow-sm">
        <h3 class="my-0 mr-md-auto font-weight-large">Notde</h3>
        </div>
        <!-- header -->
        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4 header-custom">Welcome to Notde!</h1>
        <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
        </div>
        <div class="container">
            <div class="row">
                @foreach($note as $data)
                <div class="col-md-3">
                    <div class="card-deck mb-3 text-left">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-header card-custom-header text-white">
                                <h4 class="my-0 font-weight-normal">{{ $data['judul']}}</h4>
                            </div>
                            <div class="card-body card-custom">
                                <br>
                                {{ $data['isi']}}
                                <br>
                                <a href="/edit/{{ $data['id'] }}"><span class="fa fa-pen">&ensp;</span></a>
                                <a href="/delete/{{ $data['id'] }}"> <span class="fa fa-trash"></span></a>
                            </div>
                            <div class="card-footer card-custom-footer">
                                {{ $data['created_at']}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-md-3">
                    <div class="card-deck mb-3 text-center">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-header card-custom-add">
                                <h4 class="my-0 font-weight-normal">
                                    <br>
                                </h4>
                            </div>
                            <div class="card-body card-custom-add">
                                <br>
                                <a href="#"><span class="fa fa-plus-circle"></span></a>
                                <br>
                                <br>
                            </div>
                            <div class="card-footer card-custom-add">
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>