@extends('layouts.app')

@section('content')
    <br><br>
    <!-- INFORMATIONS
    ==========================================-->
    <div id="tf-team" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2>Payement<strong> Starpass</strong></h2>
                <div class="line">
                    <hr>
                </div>
            </div>

            <div class="well">
                <h4>Vous possedez {{$cashPoint}} cashpoints.</h4>

                1 code = 500 cashpoints
            </div>

            @if($isOnline)
                <div class="alert alert-danger">Vous devez être déconnecté du serveur</div>
                <button id="refresh" class="btn btn-primary">Rafraichir</button>
            @else
                @if(session('message'))
                    <div class="alert alert-info">{!! session('message') !!}</div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <div id="starpass_{{$starpass_idd}}"></div>
                <script type="text/javascript" src="http://script.starpass.fr/script.php?idd={{$starpass_idd}}&amp;verif_en_php=1"></script>
                <noscript>
                    Veuillez activer le Javascript de votre navigateur s'il vous pla&icirc;t.<br />
                    <a href="https://www.starpass.fr/">Micro Paiement StarPass</a>
                </noscript>
            @endif
        </div>
    </div>
@endsection


@section('script')
    <script>
        $('.navbar-default').addClass('on');
    </script>

    @if($isOnline)
        <script>
            $('#refresh').on('click', function() {
                location.reload();
            });
        </script>
    @endif
@endsection