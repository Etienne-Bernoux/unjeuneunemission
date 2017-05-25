<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Un jeune, une mission</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!--[if lte IE 8]>
    <script src="/unjeuneunemission/resources/assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="/unjeuneunemission/resources/assets/css/main.css"/>
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/unjeuneunemission/resources/assets/css/ie8.css"/><![endif]-->
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/unjeuneunemission/resources/assets/css/ie9.css"/><![endif]-->
    <!--
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> -->
</head>
<body>
<!--
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
    <div class="top-left links">
        <a href="{{ route('APropos') }}">Découvrir la mission</a>
                </div>
                <div class="top-right links">
                    @if (Auth::check())
        <a href="{{ url('/home') }}">Mes Priants</a>
                    @else
    @endif
            </div>
@endif

        <div class="content">
            <div class="title m-b-md">
                 Un jeune, une mission
            </div>
            <div class="subtitle m-b-md">
                Prier pour un jeune, pour qu'il puisse rencontrer le Christ et découvrir son amour.
            </div>
            <div class="links">
@if (!Auth::check())
    <a class= "m-b-md btn" href="{{ url('/login') }}">Je suis déja inscrit</a>
                <a class= "m-b-md btn" href="{{ url('/register') }}">Je ne suis pas inscrit</a>
                    @endif
        </div>
            <!--
            <div class="links">
                <a href="https://laravel.com/docs">Documentation</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>
    </div>-->


<!-- Header -->
<header id="header">
    <h1>Un jeune une mission</h1>
    <nav>
        <ul>
            <li><a href="#intro">Bienvenue</a></li>
            @if (!Auth::check())
                <li><a chref="{{ url('/login') }}">Se connecter</a></li>
            <!-- <li><a href="{{ url('/register') }}">S'inscrire</a><</li> -->
            @else
                <li><a href="{{ url('/home') }}">Mes Priants</a></li>

            @endif

        </ul>
    </nav>
</header>

<!-- Intro -->
<section id="intro" class="main style1 dark fullscreen">
    <div class="content">
        <header>
            <h2>Un jeune, une mission</h2>
        </header>
        <p>Priez pour un jeune, pour qu'il puisse rencontrer le Christ et découvrir son amour.</p>
        <div class="links">
            @if (!Auth::check())
                <p>
                    <a class="m-b-md button style2 pray" href="{{ url('/login') }}">Je suis déja inscrit</a>
                </p>
                <p>
                    <a class="m-b-md button style2 pray" href="{{ url('/register') }}">Je ne suis pas inscrit</a>
                </p>


            @else
                <p>
                    <a class="m-b-md button style2 pray" href="{{ url('/home') }}">Mes Priants</a>
                </p>
            @endif
        </div>
        <footer>
            <a href="#one" class="button style2 down">More</a>
        </footer>
    </div>
</section>

<!-- One -->
<section id="one" class="main style2 right dark fullscreen">
    <div class="content box style2">
        <header>
            <h2>La mission</h2>
        </header>
        <p>Comme chaque année, le FRAT de Jambville rassemble des milliers de jeunes qui désirent se rencontrer pour
            partager et vivre leur foi. Ces jeunes portent chacun un projet extraordinaire choisie par le Christ.
            Votre mission est de prier pour eux pendant le FRAT (Pentecôte 2017) pour qu'ils découvrent cette
            projet.</p>
    </div>
    <a href="#two" class="button style2 down anchored">Next</a>
</section>

<!-- Two -->
<section id="two" class="main style2 left dark fullscreen">
    <div class="content box style2">
        <header>
            <h2>Comment prier?</h2>
        </header>
        <p>Que vous soyez seul ou que vous souhaitiez inscrire plusieurs personnes, la démarche est simple.
            Enregistrez-vous sur la plateforme. Une fois inscrit, vous arrivez sur la page "mes priants". Vous
            remplissez alors le prénom et le nom de tout ceux qui s'engagent à prier. Ils reçoivent le prénom d'un
            jeune. Le weekend de Pentecôte, vous priez pour votre jeune.
        </p>
        @if (!Auth::check())
            <p>
                <a class="m-b-md button style2 pray" href="{{ url('/login') }}">Je suis déja inscrit</a>
                <a class="m-b-md button style2 pray" href="{{ url('/register') }}">Je ne suis pas inscrit</a>
            </p>


        @else
            <p>
                <a class="m-b-md btn" href="{{ url('/home') }}">Mes Priants</a>
            </p>
        @endif
    </div>
    <a href="#three" class="button style2 down anchored">Next</a>
</section>

<!-- three -->
<section id="three" class="main style2 right dark fullscreen">
    <div class="content box style">
        <header>
            <h2>La communauté de prière</h2>
        </header>
        <p>
            Pour suivre le Frat avec nous, rejoignez notre communauté Hozanna.
            <iframe width="300" height="470" src="https://hozana.org/widget/communaute/6634" style="border:none;" frameborder="0"></iframe>
        </p>
    </div>
    <a href="#four" class="button style2 down anchored">Next</a>
</section>

<!-- four -->
<section id="four" class="main style2 left dark fullscreen">
    <div class="content box style">
        <header>
            <h2>Notre équipe</h2>
        </header>
        <p>
        </p>
    </div>
    <a href="#contact" class="button style2 down anchored">Next</a>
</section>

<!-- Contact -->
<section id="contact" class="main style3 secondary">
    <div class="content">
        <header>
            <h2>Besoin d'aide</h2>
            <p>
                Contactez moi:
                <a href="mailto:ebernoux@protonmail.com">ebernoux@protonmail.com </a>
            </p>

        </header>
        <!--
        <div class="box">
            <form method="post" action="#">
                <div class="field half first"><input type="text" name="name" placeholder="Name"/></div>
                <div class="field half"><input type="email" name="email" placeholder="Email"/></div>
                <div class="field"><textarea name="message" placeholder="Message" rows="6"></textarea></div>
                <ul class="actions">
                    <li><input type="submit" value="Send Message"/></li>
                </ul>
            </form>
        </div>
        -->
    </div>
</section>

<!-- Footer -->
<footer id="footer">

    <!-- Icons -->
    <!--
    <ul class="actions">
        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
        <li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
        <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
        <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
    </ul>
-->
    <!-- Menu -->
    <ul class="menu">
        <li>&copy; Etienne Bernoux 2017</li>
        <!-- <li>Design: <a href="https://html5up.net">HTML5 UP</a></li> -->
    </ul>

</footer>

<!-- Scripts -->
<script src="/unjeuneunemission/resources/assets/js/jquery.min.js"></script>
<script src="/unjeuneunemission/resources/assets/js/jquery.poptrox.min.js"></script>
<script src="/unjeuneunemission/resources/assets/js/jquery.scrolly.min.js"></script>
<script src="/unjeuneunemission/resources/assets/js/jquery.scrollex.min.js"></script>
<script src="/unjeuneunemission/resources/assets/js/skel.min.js"></script>
<script src="/unjeuneunemission/resources/assets/js/util.js"></script>
<!--[if lte IE 8]>
<script src="/unjeuneunemission/resources/assets/js/ie/respond.min.js"></script><![endif]-->
<script src="/unjeuneunemission/resources/assets/js/main.js"></script>

</body>
</html>
