<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {} {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<section class="tester is_bg_tennis">
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand is-white-color" href="{{ url('/') }}">
                        <img class="logo" src="/resources/assets/img/logo_gray.png" />
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right ">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li>
                                <a class="is-color-black nav-link" href="#about"><b>О нашей лиге</b></a>
                            </li>
                            <li>
                                <a class="is-color-black nav-link" href="#leauges"><b>Лиги</b></a>
                            </li>
                            <li>
                                <a class="is-color-black nav-link" href="{{ route('login') }}"><b>Правила и Вопросы</b></a>
                            </li>
                            <li>
                                <a class="is-color-black nav-link" href="{{ route('login') }}"><b>Корты</b></a>
                            </li>
                            <li>
                                <a class="is-color-black nav-link" href="{{ route('login') }}"><b>Тренеры</b></a>
                            </li>
                            <li>
                                <a class="is-color-black nav-link" href="{{ route('login') }}"><b>Вход</b></a>
                            </li>
                            <li>
                                <a href="#registration" class="btn btn-default top-nav-btn"><b>присоедениться сейчас</b></a>
                            </li>
                        @else
                            <li>
                                <a class="is-white-color" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                                                         document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>

                            </li>
                            <li>
                                <a class="is-white-color" href='{!! url('/tester') !!}'>Tester</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
    <div class="container height-100 display-flex align-items-center">
        <div class="row">
            <div class="col-xs-12" align="center">
                <h1 class="is-white-color is-text-shadow display-block">Добро пожаловать на Grodno.Tennis</h1>
                <h3 class="is-text-shadow is-white-color">Игра в теннис это просто отличный способ держать себя в форме, получать удовольствие и встретить новых друзей. Наши лиги открыты для взрослых и детей, и мы приветствуем игроков всех уровней! Это бесплатно.</h3>

                <a href="#registration" class="main-button btn btn-default"><b>присоедениться сейчас</b></a>

            </div>
        </div>
    </div>
    <div class="container-fluid is-margin-top--50 is-opacity-dark words">
        <div class="row" align="center">
            <div class="col-xs-4 is-white-color">
                Веселье!
            </div>
            <div class="col-xs-4 is-white-color">
                Здоровье!
            </div>
            <div class="col-xs-4 is-white-color" id="about">
                Друзья!
            </div>
        </div>
    </div>
</section>
<section class="is-white-bg">
    <div class="container">
        <div class="row">
            <div class="col-xs-12" align="center">
                <h3 class="is-color-black"><b>О нашей лиге</b></h3>
                <h3 class="is-color-black main-font is-italic">Теперь все могут играть в теннис. Легко. Регулярно. Доступно.</h3>
            </div>
        </div>
    </div>
    <div class="container-fluid" align="center">
        <div class="row">
            <div class="col-xs-8 col-sm-offset-2">
                <p class="is-color-black">
                    Если вы оказались здесь, то вы, вероятно, уже играете в теннис в Гродно или по крайней мере заинтересованы в нем. Мы обнаружили, что, хотя есть много игроков и кортов, в Гродно нету единой регулярной лиги. Это приводит к отсутствию мотивации для любителей тенниса, поскольку они не видят перспектив продвижения, чтобы улучшить свою игру. По этому, игроки которые не являются профессионалами, как правило, играют в теннис меньше, чем могли бы</p>
                <p class="is-color-black">
                    Именно поэтому мы создали Grodno.Tennis, чтобы помочь построить чувство общности, обьеденить местных игроков друг с другом, помочь игрокам, следить за их совершенствованием посредством регулярных соревновательных игр. К нам очень легко присоединиться: все, что вам нужно сделать, это зарегистрироваться, выбрать подходящую лигу, и все готово. С нами очень легко играть: у вас есть свобода, чтобы выбрать корт, время и соперника чтобы играть матч. Кроме того это все абсолютно бесплатно и нет каких-либо обязательств для Вас!</p>
                <a href="#">Присоединиться сейчас!</a>
            </div>
        </div>
        <div class="container is-margin-top-20 is-padding-bottom-30">
            <div class="row">
                <div class="col-xs-8 col-sm-offset-2" align="center">
                    <h3 class="is-color-black"><b>Приемущества для игроков</b></h3>
                    <h3 class="is-color-black main-font">Вот несколько причин регулярно играть в теннис для всех: мужчин, женщин, пожилых людей, детей, а так же в парном разряде.</h3>
                </div>
            </div>
            <div class="row is-color-black">
                <div class="col-xs-3 is-margin-top-20" align="center">
                    <img src="/resources/assets/img/benefit_1.png" class="benefit1">
                    <p class="is-margin-top-10"><b>Легко и Бесплатно</b></p>
                    <p class="is-margin-top-10 is-font-size-14">
                        Вы можете присоединиться к нашей лиге всего за несколько кликов. Это бесплатно!</p>
                </div>
                <div class="col-xs-3 is-margin-top-20" align="center">
                    <img src="/resources/assets/img/benefit_2.png" class="benefit1">
                    <p class="is-margin-top-10"><b>Весело и Адаптивно</b></p>
                    <p class="is-margin-top-10 is-font-size-14">
                        Выберите корт и начните матч самостоятельно. В любое время и в любом месте!</p>
                </div>
                <div class="col-xs-3 is-margin-top-20" align="center">
                    <img src="/resources/assets/img/benefit_3.png" class="benefit1">
                    <p class="is-margin-top-10"><b>Улучшайтесь</b></p>
                    <p class="is-margin-top-10 is-font-size-14">
                        Становитесь сильнее и здоровее. Теперь у вас есть мотивация для улучшения!</p>
                </div>
                <div class="col-xs-3 is-margin-top-20" align="center">
                    <img src="/resources/assets/img/benefit_4.png" class="benefit1">
                    <p class="is-margin-top-10"><b>Новые друзья</b></p>
                    <p class="is-margin-top-10 is-font-size-14">
                        Вы познакомитесь с новыми единомышлиниками и будете играть и развиваться вместе!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="federer">
    <div class="container display-flex align-items-center">
        <div class="row">
            <div class="col-xs-6 roger-margin">
                <p class="is-white-color is-font-size-22 ">Теннис может быть очень разочаровывающим спортом. Там нет пути без напряженной работы. Примите это. Вы должны постоянно работать, потому что всегда есть что-то, что можно улучшить. Вы должены жертвовать многим и прилагать немало усилий, иногда, даже для небольших достижений, но Вы должны знать, что, если Вы приложили усилия правильно, награда придёт. Вы должны верить в долгосрочную перспективу, но Вам нужны краткосрочные цели, чтобы мотивировать и вдохновлять Вас.
                </p>
                <br />
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div class="media">
                    <div class="media-middle media-left">
                        <img class="media-object img-circle roger-icon" src="/resources/assets/img/roger_icon.jpg" alt="...">
                    </div>
                    <div class="media-body is-white-color">
                        <h4 class="media-heading is-white-color">Роджер Федерер</h4>
                        18-ти кратный победитель турниров большого шлема.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="leauges"></div>
</section>
<section class="is-white-bg " id="leauges">
    <div class="container">
        <div class="row">
            <div class="col-xs-12" align="center">
                <h3 class="is-color-black"><b>У нас доступны следующие лиги:</b></h3>
                <h3 class="is-color-black main-font">
                    Наши лиги открыты для взрослых и детей, и мы приветствуем игроков всех уровней.</h3>
            </div>
        </div>
        <div class="row is-margin-top-20">
            <div class="col-xs-3">
                <a href="" class="btn league-btn">
                    <img class="ball-icon" src="/resources/assets/img/ball-super-big_82.png">
                    <div class="is-margin-top-10 is-color-gray">Мужская Теннисная Лига</div>
                </a>
            </div>
            <div class="col-xs-3">
                <a href="" class="btn league-btn">
                    <img class="ball-icon" src="/resources/assets/img/ball-super-big_82.png">
                    <div class="is-margin-top-10 is-color-gray">Женская Теннисная Лига</div>
                </a>
            </div>
            <div class="col-xs-3">
                <a href="" class="btn league-btn">
                    <img class="ball-icon" src="/resources/assets/img/ball-super-big_82.png">
                    <div class="is-margin-top-10 is-color-gray">Детская Теннисная Лига</div>
                </a>
            </div>
            <div class="col-xs-3">
                <a href="" class="btn league-btn">
                    <img class="ball-icon" src="/resources/assets/img/ball-super-big_82.png">
                    <div class="is-margin-top-10 is-color-gray">Парная Теннисная Лига</div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="is-white-bg is-padding-top-30">
    <div class="container">
        <div class="row">
            <div class="col-xs-12" align="center">
                <h3 class="is-color-black"><b>Все еще остались вопросы?</b></h3>
                <h3 class="is-color-black main-font">У нас есть ответы!</h3>
            </div>
        </div>
        <div class="row is-padding-top-30">
            <div class="col-xs-10 col-sm-offset-1">
                <div class="panel-group " id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default shadow">
                        <div class="panel-heading is-bg-lightgray" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <b>Как я могу присоедениться как игрок?</b>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body is-color-black">
                                Процесс очень легкий и быстрый. Чтобы присоедениться в качестве игрока, нажмите на кнопку '
                                <a href="#registration">Присоедениться сейчас!</a>
                                ' в любом месте на этой странице и следуйте простым шагам. После этого вы сможете создать свой профиль игрока. Достаточно скоро, вы получите массу удовольствия, играя в Grodno.Tennis!
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default shadow">
                        <div class="panel-heading is-bg-lightgray" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <b>Сколько стоит играть в лиге?</b>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body is-color-black">
                                Это абсолютно бесплатно!
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default shadow">
                        <div class="panel-heading is-bg-lightgray" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <b>Где, как и когда я могу создавать матчи?</b>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body is-color-black">
                                Как игрок, вы можете играть с кем-либо в вашей текущей лиге: в любое время и в любом месте. Там нет никаких обязательств и ограничений, даже если вы играете только один матч в месяц. Вы можете бросить вызов любому игроку в вашей лиге, используя платформу Grodno.Tennis. После чего вы напрямую договариваетесь о месте встречи, времени и кто берет мячи. Зависит только от вас, как вы разделите стоимость кортов, кто их забронирует и т.д.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default shadow">
                        <div class="panel-heading is-bg-lightgray" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <b>Как я могу сообщить о результатах матча?</b>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="panel-body is-color-black">
                                Все матчи должны быть зарегестрированы только с помощью онлайн платформы Grodno.Tennis. Любой человек - победитель или проигравший в матче - может обновить результат. Ваш матч не будет зарегистрирован на Grodno.Tennis, если вы ранее не зарегестрировали его (отправив вызов) через платформу. Пожалуйста, прочитайте подробнее в разделе
                                <a href="#">Правила и Вопросы</a>
                                .
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default shadow">
                        <div class="panel-heading is-bg-lightgray" role="tab" id="headingFive">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <b>Сколько матчей в месяц я могу играть?</b>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingFive">
                            <div class="panel-body is-color-black">
                                Все зависит только от вас. В лиге нет ограничений, даже если вы будете играть по одному матчу в месяц. Но чем больше вы играете, тем больше очков вы получаете! Ваша позиция в рейтинге зависит от общего количества набранных очков. Вы можете заработать очки в каждом матче на Grodno.Tennis. Вы получаете очки если:
                                <ul>
                                    <li>Играете больше матчей</li>
                                    <li>Побеждаете в матчах</li>
                                    <li>Играете и побеждаете оппонентов которые выше вас по рейтингу. Соответственно вы получаете меньше очков за соперника, который ниже вас в таблице.</li>
                                    <li>Побеждаете в основное время матча(без решающего тай-брейка)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row is-padding-bottom-30 ">
             <div class="col-xs-12 is-color-black is-font-size-14" align="center">
                Посмотрите полный список правил и вопросов <a href="#">здесь</a>.
              </div>
        </div>
    </div>
</section>
<section class="is-white-bg shadow is-padding-bottom-30">
    <div class="container" id="registration">
        <div class="row">
            <div class="col-md-12">
                    <div class="panel-heading" align="center">
                        <h3 class="is-color-black"><b>Готовы присоедениться к нашей лиге?<br/>Создайте ваш аккаунт сейчас!</b></h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Имя : </label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-mail : </label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Пароль : </label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Подтвердите пароль : </label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4" align="center">
                                    <label>При нажатии "Продолжить" вы соглашаетесь с <a href="#">Правилами</a>.</label>
                                    <button type="submit" class="main-button">
                                        Продолжить
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</section>
<section class="footer-light-bg">

</section>
<footer class="footer-main-bg">
    <div class="container">
        <div class="row is-height-50p display-flex align-items-center">
            <div class="col-xs-2 display-block">
                <img class="logo" src="/resources/assets/img/logo_gray_footer.png" />
            </div>
            <div class="col-xs-6 is-white-color is-font-size-14">
                2017 © Grodno.Tennis - Все права защищены. - Privacy - Rules.
             </div>
             <div class="col-xs-1">

             </div>
             <div class="col-xs-1">

             </div>
        </div>
    </div>
</footer>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	// = Добавляем ссылку наверх к заголовку
	$('h2').append('<a href="#header">top</a>');

	// = Вешаем событие прокрутки к нужному месту
	//	 на все ссылки якорь которых начинается на #
	$('a[href^="#"]').bind('click.smoothscroll',function (e) {
		e.preventDefault();

		var target = this.hash,
		$target = $(target);

		$('html, body').stop().animate({
			'scrollTop': $target.offset().top
		}, 900, 'swing', function () {
			window.location.hash = target;
		});
	});

});
</script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>