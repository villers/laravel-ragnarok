<nav id="footer">

    <div class="cmpvst">{{$visit['unique_count']}}</div>

    <div class="container">
        <div class="pull-left fnav">
            <p style="margin-left:10px;">ALL RIGHTS RESERVED. COPYRIGHT <a style="color:orange;">ROPLAY</a> © 2017.</p>
        </div>

        <div class="pull-right fnav">
            <ul class="footer-social">
                <li><a href="https://www.facebook.com/Ro-Play-465859550429914/"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
        </div>

        <div class="discord">
            <a href="#"><img src="../img/disc.png" onmouseover="this.src='../img/disc2.png'" onmouseout="this.src='../img/disc.png'" /></a>

        </div>

        <div class="partenaire">
            {{link_to_route('partenaire', 'Nos Partenaires')}}<img src="../img/partenaire.png">

        </div>
    </div>
</nav>