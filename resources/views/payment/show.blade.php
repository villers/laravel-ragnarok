@extends('layouts.app')

@section('content')
    <br><br>
    <!-- INFORMATIONS
    ==========================================-->
    <div id="tf-about">
        <div class="container">
            <div class="text-center">

                <div class="section-title center">
                    <div class="bloctitle" style="margin-top:10px;">
                        <div id="testimonial"
                             style="padding:-20px;margin-top:-20px;margin-bottom:-20px;margin-left:15px;margin-right:15px;">
                            <img style="position:absolute;margin-top:-20px;margin-left:-460px;" src="../img/don.png">
                            <h2>Faire un<strong> Don</strong>
                                <div class="line">
                                    <hr>
                                </div>
                            </h2>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div id="testimonial" style=";">
                            <br>
                            <div class="well">
                                <h4>Vous possedez <strong>{{$cashPoint}}</strong> cashpoints.<img src="../img/7959.gif"
                                                                                                  style="margin-top:-5px; margin-left:5px;">
                                </h4>

                            </div>
                            <br>
                            <p>Les Dons sont une manière <strong>d'auto-rémunérer les coûts qu'engendre le
                                    serveur.</strong> Le but n'est pas de gagner de l'argent ou d'en faire un "paye to
                                win".<br>
                                Vos dons sont totalement <strong>volontaires</strong>, <strong style="color:red;"><i>aucun
                                        remboursement ne sera effectué.</i></strong> Les transactions sont <strong>sécurisées.</strong>
                            </p>
                            <br>

                            <p style="text-decoration:underline;color:green;"><i>Toutes les fonctionnalités du serveur
                                    sont accessibles <strong>GRATUITEMENT</strong>.</i></p>
                            <p></p>
                            <br><br>

                            <div class="panel-group3">
                                <div class="panel panel-default">

                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" href="#collapse1">

                                                <strong><h2 style="font-size:20px;padding:10px;">Liste des<strong>
                                                            récompenses de dons</strong></h2><img
                                                            src="../img/fleche.png"
                                                            style="float:right;margin-top:-30px;"></strong>

                                            </a>
                                        </h4>
                                    </div>


                                    <div id="collapse1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <br><br>

                                            <p style="font-size:18px;">HEADGEAR</p>
                                            <br>


                                            <div class="panel-group4">
                                                <div class="panel panel-default">

                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" href="#collapse2">
                                                                <p><i><strong style="color:#6db860;font-size:12px;">UPPER HEAD</strong></i><img src="../img/btn.png" style="float:right;margin-top:5px;"></p>
                                                            </a>
                                                        </h4>
                                                    </div>

                                                    <div id="collapse2" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <div class="tablecp2">
                                                                <table class="table table-striped table-hover">
                                                                    <tbody>
                                                                    @foreach ($itemCashDb[1] as $item)
                                                                        <tr>
                                                                            <th scope="row"></th>
                                                                            <td><img src="../img/costume/{{ $item->item->id}}.gif"></td>
                                                                            <td><strong>x1 </strong><a style="color:blue;">Costume</a>
                                                                                {{ str_replace('_', ' ', $item->item->name_english) }} [<a>{{ $item->item->slots }}</a>]
                                                                            </td>
                                                                            <td><strong>{{ $item->price }}</strong> CP</td>
                                                                        </tr>
                                                                    @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="panel-group4">
                                                    <div class="panel panel-default">

                                                        <div class="panel-heading">
                                                            <div class="panel-title">
                                                                <a data-toggle="collapse" href="#collapse3">
                                                                    <p><i><strong style="color:#6db860;font-size:12px;">MIDDLE HEAD</strong></i><img src="../img/btn.png" style="float:right;margin-top:5px;"></p>
                                                                </a>
                                                            </div>
                                                        </div>


                                                        <div id="collapse3" class="panel-collapse collapse">
                                                            <div class="panel-body">

                                                                <div class="tablecp2">
                                                                    <table class="table table-striped table-hover">
                                                                        <tbody>
                                                                        @foreach ($itemCashDb[2] as $item)
                                                                            <tr>
                                                                                <th scope="row"></th>
                                                                                <td><img src="../img/costume/{{ $item->item->id}}.gif"></td>
                                                                                <td><strong>x1 </strong><a style="color:blue;">Costume</a>
                                                                                    {{ str_replace('_', ' ', $item->item->name_english) }} [<a>{{ $item->item->slots }}</a>]
                                                                                </td>
                                                                                <td><strong>{{ $item->price }}</strong> CP</td>
                                                                            </tr>
                                                                        @endforeach
                                                                        </tbody>
                                                                    </table>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="panel-group4">
                                                        <div class="panel panel-default">

                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" href="#collapse4">
                                                                        <p><i><strong style="color:#6db860;font-size:12px;">LOWER HEAD</strong></i><img src="../img/btn.png" style="float:right;margin-top:5px;"></p>
                                                                    </a>
                                                                </h4>
                                                            </div>


                                                            <div id="collapse4" class="panel-collapse collapse">
                                                                <div class="panel-body">

                                                                    <div class="tablecp2">
                                                                        <table class="table table-striped table-hover">
                                                                            <tbody>
                                                                            @foreach ($itemCashDb[3] as $item)
                                                                                <tr>
                                                                                    <th scope="row"></th>
                                                                                    <td><img src="../img/lowerhat/{{ $item->item->id}}.gif"></td>
                                                                                    <td><strong>x1 </strong><a style="color:blue;">Costume</a>
                                                                                        {{ str_replace('_', ' ', $item->item->name_english) }} [<a>{{ $item->item->slots }}</a>]
                                                                                    </td>
                                                                                    <td><strong>{{ $item->price }}</strong> CP</td>
                                                                                </tr>
                                                                            @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="panel-group4">
                                                            <div class="panel panel-default">

                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a data-toggle="collapse" href="#collapse5">
                                                                            <p><i><strong style="color:#6db860;font-size:12px;">UPPER & MIDDLE HEAD</strong></i><img src="../img/btn.png" style="float:right;margin-top:5px;"></p>
                                                                        </a>
                                                                    </h4>
                                                                </div>


                                                                <div id="collapse5" class="panel-collapse collapse">
                                                                    <div class="panel-body">

                                                                        <div class="tablecp2">
                                                                            <table class="table table-striped table-hover">
                                                                                <tbody>
                                                                                @foreach ($itemCashDb[4] as $item)
                                                                                    <tr>
                                                                                        <th scope="row"></th>
                                                                                        <td><img src="../img/costume/{{ $item->item->id}}.gif"></td>
                                                                                        <td><strong>x1 </strong><a style="color:blue;">Costume</a>
                                                                                            {{ str_replace('_', ' ', $item->item->name_english) }} [<a>{{ $item->item->slots }}</a>]
                                                                                        </td>
                                                                                        <td><strong>{{ $item->price }}</strong> CP</td>
                                                                                    </tr>
                                                                                @endforeach
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="panel-group4">
                                                            <div class="panel panel-default">

                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a data-toggle="collapse" href="#collapse6">
                                                                            <p><i><strong style="color:#6db860;font-size:12px;">UPPER & LOWER HEAD</strong></i><img src="../img/btn.png" style="float:right;margin-top:5px;"></p>
                                                                        </a>
                                                                    </h4>
                                                                </div>


                                                                <div id="collapse6" class="panel-collapse collapse">
                                                                    <div class="panel-body">

                                                                        <div class="tablecp2">
                                                                            <table class="table table-striped table-hover">
                                                                                <tbody>
                                                                                @foreach ($itemCashDb[5] as $item)
                                                                                    <tr>
                                                                                        <th scope="row"></th>
                                                                                        <td><img src="../img/costume/{{ $item->item->id}}.gif"></td>
                                                                                        <td><strong>x1 </strong><a style="color:blue;">Costume</a>
                                                                                            {{ str_replace('_', ' ', $item->item->name_english) }} [<a>{{ $item->item->slots }}</a>]
                                                                                        </td>
                                                                                        <td><strong>{{ $item->price }}</strong> CP</td>
                                                                                    </tr>
                                                                                @endforeach
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="panel-group4">
                                                            <div class="panel panel-default">

                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a data-toggle="collapse" href="#collapse7">
                                                                            <p><i><strong style="color:#6db860;font-size:12px;">MIDDLE & LOWER HEAD</strong></i><img src="../img/btn.png" style="float:right;margin-top:5px;"></p>
                                                                        </a>
                                                                    </h4>
                                                                </div>


                                                                <div id="collapse7" class="panel-collapse collapse">
                                                                    <div class="panel-body">

                                                                        <div class="tablecp2">
                                                                            <table class="table table-striped table-hover">
                                                                                <tbody>
                                                                                @foreach ($itemCashDb[6] as $item)
                                                                                    <tr>
                                                                                        <th scope="row"></th>
                                                                                        <td><img src="../img/costume/{{ $item->item->id}}.gif"></td>
                                                                                        <td><strong>x1 </strong><a style="color:blue;">Costume</a>
                                                                                            {{ str_replace('_', ' ', $item->item->name_english) }} [<a>{{ $item->item->slots }}</a>]
                                                                                        </td>
                                                                                        <td><strong>{{ $item->price }}</strong> CP</td>
                                                                                    </tr>
                                                                                @endforeach
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="panel-group4">
                                                            <div class="panel panel-default">

                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title">
                                                                        <a data-toggle="collapse" href="#collapse8">
                                                                            <p><i><strong style="color:#6db860;font-size:12px;">UPPER / MIDDLE / LOWER HEAD</strong></i><img src="../img/btn.png" style="float:right;margin-top:5px;"></p>
                                                                        </a>
                                                                    </h4>
                                                                </div>


                                                                <div id="collapse8" class="panel-collapse collapse">
                                                                    <div class="panel-body">

                                                                        <div class="tablecp2">
                                                                            <table class="table table-striped table-hover">
                                                                                <tbody>
                                                                                @foreach ($itemCashDb[7] as $item)
                                                                                    <tr>
                                                                                        <th scope="row"></th>
                                                                                        <td><img src="../img/costume/{{ $item->item->id}}.gif"></td>
                                                                                        <td><strong>x1 </strong><a style="color:blue;">Costume</a>
                                                                                            {{ str_replace('_', ' ', $item->item->name_english) }} [<a>{{ $item->item->slots }}</a>]
                                                                                        </td>
                                                                                        <td><strong>{{ $item->price }}</strong> CP</td>
                                                                                    </tr>
                                                                                @endforeach
                                                                                </tbody>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="tablecp">
                                                            <table class="table table-striped table-hover">
                                                                <br><br>
                                                                <p style="font-size:18px;">CONSOMMABLE</p>
                                                                <br>
                                                                <tbody>

                                                                <tr>
                                                                    <th scope="row"></th>
                                                                    <td><img src="../img/14532.gif"></td>
                                                                    <td><strong>x1</strong> Field Manual 100%</td>
                                                                    <td><strong>100</strong> CP</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row"></th>
                                                                    <td><img src="../img/14532.gif"></td>
                                                                    <td><strong>x1</strong> Job Manual 150%</td>
                                                                    <td><strong>100</strong> CP</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row"></th>
                                                                    <td><img src="../img/12210.gif"></td>
                                                                    <td><strong>x1</strong> Bubble Gum 100%</td>
                                                                    <td><strong>100</strong> CP</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row"></th>
                                                                    <td><img src="../img/12902.gif"></td>
                                                                    <td><strong>x1</strong> Field Manual Box 100% [<i
                                                                                style="color:blue;">x10</i>]
                                                                    </td>
                                                                    <td><strong>850</strong> CP</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row"></th>
                                                                    <td><img src="../img/12902.gif"></td>
                                                                    <td><strong>x1</strong> Job Manual Box 100% [<i
                                                                                style="color:blue;">x10</i>]
                                                                    </td>
                                                                    <td><strong>850</strong> CP</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row"></th>
                                                                    <td><img src="../img/12902.gif"></td>
                                                                    <td><strong>x1</strong> Bubble Gum Box 100% [<i
                                                                                style="color:blue;">x10</i>]
                                                                    </td>
                                                                    <td><strong>850</strong> CP</td>
                                                                </tr>

                                                                <tr>
                                                                    <th scope="row"></th>
                                                                    <td><img src="../img/12187.gif"></td>
                                                                    <td><strong>x1</strong> Old Green Box</td>
                                                                    <td><strong>50</strong> CP</td>
                                                                </tr>

                                                                </tbody>
                                                            </table>
                                                        </div>


                                                    </div>
                                                    <br><br>
                                                    <div class="tablecp">
                                                        <table class="table table-striped table-hover">
                                                            <p style="font-size:18px;">DIVERS</p>
                                                            <br>
                                                            <tbody>

                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td><img src="../img/665.gif"></td>
                                                                <td><strong>x1</strong> Gift Box</td>
                                                                <td><strong>5</strong> CP</td>

                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td><img src="../img/12902.gif"></td>
                                                                <td><strong>x1</strong> Old Purple Box</td>
                                                                <td><strong>10</strong> CP</td>

                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td><img src="../img/12212.gif"></td>
                                                                <td><strong>x1</strong> Giant Fly Wing</td>
                                                                <td><strong>12</strong> CP</td>

                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td><img src="../img/13571.gif"></td>
                                                                <td><strong>x1</strong> Giant Fly Wing 100 Box</td>
                                                                <td><strong>1000</strong> CP</td>

                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td><img src="../img/604.gif"></td>
                                                                <td><strong>x1</strong> Dead Branch</td>
                                                                <td><strong>10</strong> CP</td>

                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td><img src="../img/14234.gif"></td>
                                                                <td><strong>x1</strong> Dead Branch Box [<i
                                                                            style="color:blue;">x25</i>]
                                                                </td>
                                                                <td><strong>200</strong> CP</td>

                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td><img src="../img/12103.gif"></td>
                                                                <td><strong>x1</strong> Bloody Branch</td>
                                                                <td><strong>400</strong> CP</td>

                                                            </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <br><br><br><br><br>


                <div class="text-center">

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div id="testimonial" style=";">
                                <div class="section-title center">

                                    <div id="testimonial"
                                         style="padding:-20px;margin-top:-20px;margin-bottom:-20px;margin-left:15px;margin-right:15px;">

                                        <h2>STAR<strong>PASS</strong>
                                            <div class="line">
                                                <hr>
                                            </div>
                                        </h2>

                                    </div>
                                </div>
                                <br>
                                <div class="well" style="width:60%; margin-left:20%;">
                                    <p> Un <strong>code</strong> est égal à <strong>250 </strong>CashPoints</p>
                                </div>
                                <br>
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
                                    <script type="text/javascript"
                                            src="https://script.starpass.fr/script.php?idd={{$starpass_idd}}&amp;verif_en_php=1"></script>
                                    <noscript>
                                        Veuillez activer le Javascript de votre navigateur s'il vous pla&icirc;t.<br/>
                                        <a href="https://www.starpass.fr/">Micro Paiement StarPass</a>
                                    </noscript>
                                @endif
                                <br>
                                <img src="../img/starpass.png"
                                     style="width:20%; float:right; opacity:0.7; margin-top:-25px; margin-right:-35px;">
                                <br>
                            </div>

                        </div>
                    </div>
                </div>

                <br><br>
                <div class="text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div id="testimonial" style="">
                                <div class="section-title center">

                                    <div id="testimonial"
                                         style="padding:-20px;margin-top:-20px;margin-bottom:-20px;margin-left:15px;margin-right:15px;">
                                        <h2>PAY<strong>PAL</strong>
                                            <div class="line">
                                                <hr>
                                            </div>
                                        </h2>
                                    </div>
                                </div>
                                <br>
                                <div class="well" style="width:60%; margin-left:20%;">
                                    <p> Un <strong>centime</strong> d'euro est égal à un <strong>CashPoint</strong></p>
                                </div>
                                <br>
                                <h1><img src="../img/1ct.png" style="width:3.5%;margin-left:45%;"> = <img
                                            src="../img/1cp.gif"
                                            style="width:3.5%;float:right;margin-right:44%;margin-top:-2px;"></h1>


                                <br><br><br>
                                @if($isOnline)
                                    <div class="alert alert-danger">Vous devez être déconnecté du serveur</div>
                                    <button id="refresh" class="btn btn-primary">Rafraichir</button>
                                @else
                                    @if(session('paypal_success'))
                                        <div class="alert alert-info">{!! session('paypal_success') !!}</div>
                                    @endif

                                    @if(session('paypal_error'))
                                        <div class="alert alert-danger">{{ session('paypal_error') }}</div>
                                    @endif

                                    {!! Form::open(['route' => 'user.payment.paypal']) !!}
                                    <fieldset>

                                        <div class="form-group">
                                            <div class="col-md-offset-4 col-md-4">
                                                {{ Form::label('qty', 'Nombre de cash point') }} <img
                                                        src="../img/7959.gif" style="margin-top:-5px; margin-left:5px;">
                                                {{ Form::number('qty', 100, [ 'step' => '1', 'min' => '0', 'max' => '100000000' ,'class' => 'form-control']) }}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-offset-4 col-md-4">
                                                <br>
                                                {!! Form::submit('Valider', ['class' => 'btn btn-success'] ) !!}

                                            </div>
                                        </div>


                                    </fieldset>
                                    {!! Form::close() !!}
                                @endif
                                <br>
                                <img src="../img/paypal.png" style="float:right; opacity:0.7; margin-top:-20px;">
                            </div>
                        </div>

                    </div>
                </div>


                <br><br>


                <div class="text-center">

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div id="testimonial" style=";">
                                <div class="section-title center">

                                    <div id="testimonial"
                                         style="padding:-20px;margin-top:-20px;margin-bottom:-20px;margin-left:15px;margin-right:15px;">

                                        <h2>COIN<strong>BASE</strong>
                                            <div class="line">
                                                <hr>
                                            </div>
                                        </h2>

                                    </div>
                                </div>
                                <br>
                                <div class="well" style="width:60%; margin-left:20%;">
                                    <p>En développement...</p>
                                </div>
                                <br>

                                <br>
                                <img src="../img/coinbase.png"
                                     style="width:10%; float:right; opacity:0.7; margin-top:-15px; margin-right:1px;">
                                <br>
                            </div>

                        </div>
                    </div>
                </div>


                <br><br>


            </div>
        </div>
    </div>
@endsection



@section('script')
    <script>
        $('.navbar-default').addClass('on');
    </script>

    @if($isOnline)
        <script>
            $('#refresh').on('click', function () {
                location.reload();
            });
        </script>
    @endif
@endsection