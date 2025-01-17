<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Home') </title>

    <!-- EDITAR CSS -->
    <link rel="stylesheet" href="/css/tamples.css">

    <!-- BOOTSTRAP LINK -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>

</head>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

<body class="home">
    <div class="container-fluid display-table">


        <div class="row display-table-row">

            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <!-- AREA PARA COLOCAR A IMAGEM DA LOGO -->

                    <!-- imagem no canto-->
                    <!-- <a hef="home.html"><img src="http://jskrishna.com/work/merkury/images/logo.png" alt="merkery_logo" class="hidden-xs hidden-sm">
                            <img src="http://jskrishna.com/work/merkury/images/circle-logo.png" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                        </a> -->
                </div>
                <div class="navi">

                    <ul>
                        <li><a href="/home"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="#"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Fluxo de Trabalho</span></a></li>
                        <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Estatistica</span></a></li>
                        <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Lista Registros</span></a></li>
                        <li><a href="/listaLogin"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Usuários</span></a></li>
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true" type="submit"></i><span class="hidden-xs hidden-sm">Area ADM</span></a></li>
                        <li><a href="/loja"><i class="fa fa-shopping-cart" aria-hidden="true" type="submit"></i><span class="hidden-xs hidden-sm">Area de Compras</span></a></li>
                        <li><a href="/contato_index"><i class="fa fa-sort" aria-hidden="true" type="submit"></i><span class="hidden-xs hidden-sm">Contate-nos</span></a></li>
                    </ul>

                </div>
            </div>

            <div class="col-md-10 col-sm-11 display-table-cell v-align">

                <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
                <div class="row">


                    <header>

                        <div class="col-md-7">
                            <div class="search hidden-xs hidden-sm">
                                <input type="text" placeholder="Search" id="search">
                            </div>
                        </div>
                        <div class="col-md-5">


                            <div class="header-rightside">
                                
                                <ul class="list-inline header-top pull-right">
                                        @if (Route::has('events/registro'))  
                                        <li class="hidden-xs"><a href="/events/registro" class="add-project">Cadastrar</a></li>
                                        @endif
                                        <li>
                                            <a href="#" class="icon-info">
                                                <i class="fa fa-bell" aria-hidden="true"></i>
                                                <span class="label label-primary"></span>
                                            </a>
                                        </li>
                                        <!-- BOTAO DE LOG OUT -->
                                        <li><a href="/login"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                                    
                                </ul>
                                
                            </div>
                        </div>
                    </header>
                </div>
                <div class="user-dashboard">
                    <div class="painel-body">
                        <main>
                            <div class="catainer-fluid">
                                <div class="row">
                                    @if(session('msg'))
                                    <p class="msg">{{ session('msg') }}</p>
                                    @endif
                                </div>
                            </div>
                        </main>

                    </div>
                </div>
            </div>
            @yield('content')
        </div>

    </div>

</body>


</html>