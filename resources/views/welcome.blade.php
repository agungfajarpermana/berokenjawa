<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Beroken Jawa</title>
        <!-- Fonts -->
        <link rel="icon" href="{{asset('assets/photos.png')}}" type="image/jpg">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/css/swiper.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" />
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
            <div class="responsive-video" style="width: 100%; height: 100vh;"
            data-vide-bg="mp4: {{asset('assets/Bumper_1.mp4')}}, poster: {{asset('assets/Bumper_1.gif')}}"
            data-vide-options="posterType: gif, loop: true, muted: true, position: 50% 50%, resizing: true,">
            
                <div class="header-url"></div>
                <div class="header-overlay"></div>
                <div class="header">
                    <nav class="nav-wrapper transparent">
                        <div class="container">
                            <a href="{{route('home')}}" class="brand-logo">
                                Beroken Jawa
                            </a>
                            <a href="#" class="sidenav-trigger" data-target="slide-out">
                                <i class="material-icons">menu</i>
                            </a>
                            <ul id="nav-mobile" class="right hide-on-med-and-down">
                                <li><a href="#getstarted" class="btn get-started scrollPage">Get Started</a></li>
                                <li><a href="#about" class="scrollPage">About</a></li>
                                <li><a href="#service" class="scrollPage">Service</a></li>
                                <li><a href="{{ route('gallery') }}" class="scrollPage">Creation</a></li>
                                <li><a href="#contact" class="scrollPage">Contact</a></li>
                                <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                                @if(Auth::check())
                                    <li><a href="{{ route('dashboard') }}" class="">Dashboard</a></li>
                                @endif
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="header-content">
                    <h1 class="flow-text white-text">We Listen. We Understand. We Transform.</h1>
                    <p class="flow-text white-text">Production House daerah BSD, Tangerang</p>
                </div>
            </div>
            <!-- sidenav -->
            <ul id="slide-out" class="sidenav">
                <li>
                    <div class="user-view">
                        <div class="background">
                            <img src="{{asset('assets/menu.jpeg')}}" class="responsive-img" style="margin-top:-10px">
                        </div>
                        <a href="#!"><img class="circle responsive-img" src="{{asset('assets/photos.png')}}" width="60px" height="60px"></a>
                        <a href="#!"><span class="white-text name">Beroken Jawa</span></a>
                        <a href="#!"><span class="white-text email"></span></a>
                    </div>
                </li>
                <li><a class="subheader">MAIN MENU</a></li>
                <li><a class="waves-effect scrollPage" href="#about"><i class="material-icons">help</i> About</a></li>
                <li><a class="waves-effect scrollPage" href="#service"><i class="material-icons">stars</i> Service</a></li>
                <li><a class="waves-effect scrollPage" href="{{route('gallery')}}"><i class="material-icons">collections</i> Creation</a></li>
                <li><a class="waves-effect scrollPage" href="#contact"><i class="material-icons">contact_mail</i> Contact</a></li>
                @if(Auth::check())
                    <li><a href="{{route('dashboard')}}" class=""><i class="material-icons">redo</i> Dashboard</a></li>
                @endif
            </ul>

            <div class="section" id="getstarted">
                <div class="container">
                    <div class="row">
                        <div class="col s12 l4">
                            <img src="{{asset('assets/portraits.jpg')}}" alt="" class="responsive-img materialboxed">
                        </div>
                        <div class="col s12 l6 offset-l1">
                            <h2 class="indigo-text text-darken-4">Portraits</h2>
                            <p>
                                fotografi dari seorang tokoh atau sekelompok orang yang menyimpan ekspresi, kepribadian dan perasaan dari subyek tersebut.
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12 l4 push-l7 offset-l1">
                            <img src="{{asset('assets/landscapes.jpg')}}" alt="" class="responsive-img materialboxed">
                        </div>
                        <div class="col s12 l6 pull-l5 right-align offset-l1">
                            <h2 class="indigo-text text-darken-4">Landscape</h2>
                            <p>
                                suatu bagian atau porsi dari pemandangan yang di lihat dari sebuah titik pandang pribadi. Pemandangan merupakan subjek utama dari sebuah landscape.
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s12 l4 ">
                            <img src="{{asset('assets/drone.jpeg')}}" alt="" class="responsive-img materialboxed">
                        </div>
                        <div class="col s12 l6 offset-l1">
                            <h2 class="indigo-text text-darken-4">Mosaic Drone</h2>
                            <p>
                                gabungan dari foto – foto yang dihasilkan oleh drone, foto hasil drone dalam satu kali penerbangan bisa ratusan item, dari ratusan item ini kemudian dilakukan proses mosaiking menggunakan aplikasi yang kemudian didapatlah sebuah foto gabungan yang disebut mosaic data drone.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="parallax-container">
                <div class="parallax1">

                </div>
            </div>

            <div class="container about-content" id="about">
                <div class="row">
                    <h1 class="indigo-text text-darken-4 center-align">Tentang Kami</h1>
                    <div class="col s12 l5">
                        <h2 class="indigo-text text-darken-4">Beroken Jawa ?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet ipsam dolor repellat officia labore at nostrum nisi harum reiciendis veritatis, voluptatum quo necessitatibus cupiditate tempora vero maxime mollitia, quia minima.</p>
                    </div>

                    <div class="col s12 l6 offset-l1">
                        <ul class="tabs">
                            <li class="tab col s6">
                                <a href="#visi" class="indigo-text text-darken-4">Visi</a>
                            </li>
                            <li class="tab col s6">
                                <a href="#misi" class="indigo-text text-darken-4">Misi</a>
                            </li>
                        </ul>
                        <div class="col s12" id="visi">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur veniam neque aut nesciunt earum saepe cum optio quaerat praesentium ipsam id, officiis architecto ipsum expedita est veritatis nihil itaque fugiat.
                            </p>
                        </div>
                        <div class="col s12" id="misi">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur veniam neque aut nesciunt earum saepe cum optio quaerat praesentium ipsam id, officiis architecto ipsum expedita est veritatis nihil itaque fugiat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="parallax-container">
                <div class="parallax2">
                    
                </div>
            </div>

            <div class="section about-we-are">
                <div class="container">
                    <h1 class="indigo-text text-darken-4 flow-text center-align">Pendapat Mereka Tentang Kami</h1>
                    <div class="swiper-container s1">
                        <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col s12 l4">
                                    <img src="{{asset('assets/kompascom.png')}}" alt="" class="responsive-img">
                                </div>
                                <div class="col s12 l8">
                                    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus numquam eaque neque quis error mollitia?.</p>
                                    <p class="owner-name"><b>Lorem</b></p>
                                    <p class="owner">CEO Kompas Gramedia</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col s12 l4">
                                    <img src="{{asset('assets/keminfo.svg')}}" alt="" class="responsive-img">
                                </div>
                                <div class="col s12 l8">
                                    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus numquam eaque neque quis error mollitia? Aspernatur dolor at amet consequuntur iure optio! Sequi quasi ratione libero incidunt enim asperiores autem.</p>
                                    <p class="owner-name"><b>Lorem</b></p>
                                    <p class="owner">Dirjen Kominfo</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col s12 l4">
                                    <img src="{{asset('assets/asian.png')}}" alt="" class="responsive-img">
                                </div>
                                <div class="col s12 l8">
                                    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus numquam eaque neque quis error mollitia? Aspernatur dolor at amet consequuntur iure optio! Sequi quasi ratione libero incidunt enim asperiores autem.</p>
                                    <p class="owner-name"><b>Lorem</b></p>
                                    <p class="owner">CEO Asian Games 2018</p>
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>

            <div class="section-learn" id="service">
                <div class="container">
                    <div class="row">
                        <div class="col s12 l6 push-l6 white">
                            <h5 class="indigo-text text-darken-4 center-align">Pilihan Layanan</h5>
                            <p class="center-align">pilih layanan yang tersedia di beroken jawa untuk menyimpan momen pentingmu.</p>
                            <div class="row">
                                <div class="col s12 m6 l6">
                                    <div class="card">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="{{asset('assets/photography.jpg')}}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Photography<i class="material-icons right">more_vert</i></span>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Photography<i class="material-icons right">close</i></span>
                                            <ul class="collection">
                                                <li class="collection-item">Wedding</li>
                                                <li class="collection-item">Birthday</li>
                                                <li class="collection-item">Opening Ceremony</li>
                                                <li class="collection-item">And Other Moments</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l6">
                                    <div class="card">
                                        <div class="card-image waves-effect waves-block waves-light">
                                            <img class="activator" src="{{asset('assets/graph.jpg')}}">
                                        </div>
                                        <div class="card-content">
                                            <span class="card-title activator grey-text text-darken-4">Videography<i class="material-icons right">more_vert</i></span>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Videography<i class="material-icons right">close</i></span>
                                            <ul class="collection">
                                                <li class="collection-item">Wedding</li>
                                                <li class="collection-item">Birthday</li>
                                                <li class="collection-item">Opening Ceremony</li>
                                                <li class="collection-item">And Other Moments</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-person">
                <div class="container">
                    <div class="swiper-container s2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col s12 l4">
                                        <img src="{{asset('assets/portrait.jpeg')}}" alt="" class="circle responsive-img circle-img" style="width: 150px; height:150px;">
                                    </div>
                                    <div class="col s12 l8">
                                        <p class="left-align person-description">
                                            Hasil fotonya bagus dan memuaskan sesuai dengan yang saya harapkan. Terima kasih Beroken Jawa.
                                        </p>
                                        <p class="left-align person-owner"><b>Lorem</b></p>
                                        <p class="left-align person-job">CEO Asian Games 2018</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col s12 l4">
                                        <img src="{{asset('assets/portrait.jpeg')}}" alt="" class="circle responsive-img circle-img" style="width: 150px; height:150px;">
                                    </div>
                                    <div class="col s12 l8">
                                        <p class="left-align person-description">
                                            Hasil fotonya bagus dan memuaskan sesuai dengan yang saya harapkan. Terima kasih Beroken Jawa.
                                        </p>
                                        <p class="left-align person-owner"><b>Lorem</b></p>
                                        <p class="left-align person-job">CEO Asian Games 2018</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>

            <div class="parallax-container">
                <div class="parallax3">
                    
                </div>
            </div>

            <div class="section-contact container" id="contact">
                <h1 class="indigo-text text-darken-4 flow-text center-align">Hubungi Kami</h1>
                    <div class="row">
                        <div class="col s12 l5">
                            <ul class="collapsible popout">
                                <li>
                                    <div class="collapsible-header red-text text-darken-4"><i class="material-icons">place</i>Alamat</div>
                                    <div class="collapsible-body"><span>Giri Loka II, BSD Tangerang.</span></div>
                                </li>
                                <li>
                                    <div class="collapsible-header cyan-text text-darken-3"><i class="material-icons">phone</i>Telephone</div>
                                    <div class="collapsible-body"><span>0813-8459-4677</span></div>
                                </li>
                                <li>
                                    <div class="collapsible-header yellow-text text-darken-4"><i class="material-icons">email</i>Email</div>
                                    <div class="collapsible-body"><span>berokenjawa@gmail.com</span></div>
                                </li>
                            </ul>
                        </div>
                        <div class="col s12 l5 offset-l2">
                            <form action="#" id="form_email">
                                <div class="row">
                                    <div class="input-field col s12 l6">
                                        <i class="material-icons prefix">account_circle</i>
                                        <input id="name" type="text" name="name" value="" class="input" oncut="return false">
                                        <label for="name">Nama Kamu</label>
                                        <span class="helper-text name" data-error="wrong" data-success="Checking"></span>
                                    </div>
                                    <div class="input-field col s12 l6">
                                        <i class="material-icons prefix">phone</i>
                                        <input id="phones" type="text" name="phones" value="" class="input" oncut="return false">
                                        <label for="phones">Telephone Kamu</label>
                                        <span class="helper-text phones" data-error="wrong" data-success="Checking"></span>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">email</i>
                                        <input id="email" type="text" name="email" value="" class="input" oncut="return false">
                                        <label for="email">Email Kamu</label>
                                        <span class="helper-text email" data-error="wrong" data-success="Checking"></span>
                                    </div>
                                    <div class="input-field col s12">
                                        <i class="material-icons prefix">mode_edit</i>
                                        <textarea id="pesan" class="materialize-textarea input" name="pesan" oncut="return false"></textarea>
                                        <label for="pesan">Pesan Kamu</label>
                                        <span class="helper-text pesan" data-error="wrong" data-success="Checking"></span>
                                    </div>
                                    <button class="btn waves-effect waves-light right" type="submit" id="send">Kirim
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>
                                {{csrf_field()}}
                            </form>
                        </div>
                    </div>
                </div>
            
            <div class="fixed-action-btn">
                <a class="btn-floating btn-large teal accent-3" onclick="window.open('https://api.whatsapp.com/send?phone=6281384594646');">
                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                </a>
            </div>

            <div class="section-footer">
                <footer class="page-footer grey darken-4">
                    <div class="container">
                        <div class="row">
                            <div class="col l4 s12">
                                <h5 class="white-text">Beroken Jawa</h5>
                                <p class="white-text">You can use rows and columns here to organize your footer content.</p>
                            </div>
                            <div class="col l3 offset-l2 s12">
                                <h5 class="white-text">Menu</h5>
                                <ul>
                                    <li>
                                        <a class="white-text scrollPage" href="#about">
                                            About
                                        </a>
                                    </li>
                                    <li>
                                        <a class="white-text scrollPage" href="#service"> 
                                            Service
                                        </a>
                                    </li>
                                    <li>
                                        <a class="white-text" href="{{route('gallery')}}">
                                            Creation
                                        </a>
                                    </li>
                                    <li>
                                        <a class="white-text scrollPage" href="#contact">
                                            Contact
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col l2 s12">
                                <h5 class="white-text">Connect</h5>
                                <ul>
                                    <li>
                                        <a class="white-text" href="#!">
                                            <i class="fa fa-facebook-official" aria-hidden="true"></i>
                                            Facebook
                                        </a>
                                    </li>
                                    <li>
                                        <a class="white-text" href="#!">
                                            <i class="fa fa-twitter-square" aria-hidden="true"></i> 
                                            Twitter
                                        </a>
                                    </li>
                                    <li>
                                        <a class="white-text" href="#!">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                            Instagram
                                        </a>
                                    </li>
                                    <li>
                                        <a class="white-text" href="#!" onclick="window.open('https://www.youtube.com/channel/UC5zQxsIDS7pI-mdMbfKMC9Q');">
                                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                            Youtube
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer-copyright center-align">
                        <div class="container">
                            © 2018 Beroken Jawa dengan <span>❤</span> di BSD Tangerang
                        </div>
                    </div>
                </footer>
            </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vide/0.5.1/jquery.vide.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.2/js/swiper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
        <script src="{{asset('js/jquery.easing.js')}}"></script>
        <script>
            $(document).ready(function(){
                $('.sidenav').sidenav();
                $('.materialboxed').materialbox();
                $('.tabs').tabs();
                // $('.scrollspy').scrollSpy();
                $('.carousel.carousel-slider').carousel({
                    fullWidth: true,
                    indicators: true
                });
                $('.collapsible').collapsible();
                // $('.parallax').parallax();
                $('.fixed-action-btn').floatingActionButton({
                    hoverEnabled: false
                });
                $(document).on('click', '.scrollPage', function(e){
                    let href = $(this).attr('href');
                    let elementHref = $(href);

                    $('html').animate({
                        scrollTop: elementHref.offset().top
                    },1000,'easeInExpo');

                    e.preventDefault();
                });
                
                var swiper = new Swiper('.s1', {
                    slidesPerView: 1,
                    speed: 700,
                    spaceBetween: 100,
                    centeredSlides: true,
                    loop: true,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });

                var swipers = new Swiper('.s2', {
                    speed: 1000,
                    spaceBetween: 100,
                    loop:true,
                    autoplay: {
                        delay: 7000,
                        disableOnInteraction: false,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                });

                function reset(){
                    document.getElementById('form_email').reset();
                }

                $(document).on('click', '#send', function(e){
                    $(this).text('waiting..');
                    $(this).attr('disabled', 'disabled');

                    $.ajax({
                        url: '{{route("email")}}',
                        method: "POST",
                        data: $('#form_email').serialize(),
                        beforeSend: function(){
                            $('.input').each(function(key, val){
                                let id = $(this).attr('id');
                                $('#'+id).removeClass('invalid');
                            })
                        },
                        success: function(res){
                            $('#send').html('kirim <i class="material-icons right">send</i>');
                            $('#send').removeAttr('disabled');
                            iziToast.success({
                                title: 'OK',
                                message: 'Email Terkirim!',
                                position: 'topRight'
                            });
                            reset();
                        },
                        error: function(res){
                            $('#send').html('kirim <i class="material-icons right">send</i>');
                            $('#send').removeAttr('disabled');
                            $.each(res.responseJSON.errors, function(key, val){
                                
                                $("#" + key).addClass('invalid');
                                $("." + key).attr('data-error', val[0]);

                            });
                        }
                    });
                    e.preventDefault();
                });
            });
        </script>
    </body>
</html>
