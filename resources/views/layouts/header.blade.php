<?php
$server = [
    'isUp' => true,
    'nbOnline' => 1,
    'onlinePeak' => 2
]
?>
<!-- Navigation
    ==========================================-->
<nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" style="width:20%;">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Activer la navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="{{ url('/') }}" style="margin-left: -100px; font-size:50%;"><img src="https://img4.hostingpics.net/pics/875996mogo.png" border="0" alt="Hebergeur d'image" /></a>

        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ url('/') }}#tf-about" class="page-scroll">Actualités</a>
                </li>
                <li>
                    <a href="{{ url('/') }}#tf-team" class="page-scroll">Informations</a>
                </li>

                <li>
                    <a href="{{ url('/staff') }}">Staff</a>
                </li>

                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Se connecter</a></li>
                    <li><a href="{{ route('register') }}">S'inscrire</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->userid }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif

                <li>
                    <a href="http://ro-play.org/forum">Forum</a>
                </li>
            </ul>

            <div class="server-wrapper">
                <div class="status-serv">
                    <div class="col-sm-12" style="padding: 0;">
                        <span class="col-sm-6">Status</span>

                        <span class="col-sm-6">
                        <span class="circle <?php echo $server['isUp'] ? 'bg-green' : 'bg-red';?>"
                              title="<?php echo $server['isUp'] ? 'EN LIGNE' : 'HORS LIGNE';?>"></span>
                    </span>

                    </div>

                    <div class="col-sm-12" style="padding: 0;">
                        <span class="col-sm-6">Online</span>
                        <span class="col-sm-6" style="color:#2fef2f;"><?php echo $server['nbOnline']; ?></span>
                    </div>

                    <div class="col-sm-12" style="padding: 0;">
                        <span class="col-sm-6">Record</span>
                        <span class="col-sm-6" style="color: #fcac45;"><?php echo $server['onlinePeak']; ?></span>
                    </div>
                    <a style="margin-left: 13px; margin-top: 5px;" class="btn btn-primary btn-xs" href="/users/listplayers">
                        Qui est en ligne ?
                    </a>
                </div>
            </div>

        </div>
    </div>
</nav>