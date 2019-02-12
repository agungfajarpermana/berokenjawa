<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="{{asset('assets/photos.png')}}" type="image/jpg">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
  <link rel="stylesheet" href="{{asset('css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('css/waypoints.css')}}">
  <link rel="stylesheet" href="{{asset('css/photo.css')}}">
  <title>Beroken Jawa</title>
</head>
<body class="body">
    <div class="header">
      <nav class="nav-wrapper transparent">
        <div class="container">
          <a href="{{route('home')}}" class="brand-logo">
            Beroken Jawa
            <!-- <img src="{{asset('assets/photos.png')}}" class="responsive-img" width="40px" height="40px"> -->
          </a>
          <a href="#" class="sidenav-trigger" data-target="slide-out">
            <i class="material-icons">menu</i>
          </a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{route('gallery')}}" class="">Photo's</a></li>
            <li><a href="{{route('video')}}" class="">Video's</a></li>
            @if(Auth::check())
              <li><a href="{{route('dashboard')}}" class="">Dashboard</a></li>
            @endif
          </ul>
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
            <li><a class="waves-effect" href="{{route('home')}}"><i class="material-icons">backspace</i> Home</a></li>
            <li><a class="waves-effect" href="{{route('home')}}#about"><i class="material-icons">help</i> About</a></li>
            <li><a class="waves-effect" href="{{route('home')}}#service"><i class="material-icons">stars</i> Service</a></li>
            <li><a class="waves-effect" href="{{route('video')}}"><i class="material-icons">collections</i> Video</a></li>
            <li><a class="waves-effect" href="{{route('home')}}#contact"><i class="material-icons">contact_mail</i> Contact</a></li>
            @if(Auth::check())
              <li><a href="{{route('dashboard')}}" class=""><i class="material-icons">redo</i> Dashboard</a></li>
            @endif
          </ul>
        </div>
      </nav>

      <div class="inner">
        <div class="content">
          <section class="os-animation" data-os-animation="bounceInDown" data-os-animation-delay="1s">
            <h3>Beroken Jawa <br> photo gallery</h3>
          </section>
          <section class="os-animation" data-os-animation="bounceInDown" data-os-animation-delay="1.1s">
            <a href="#showme" class="btn transparent scrollPage">Show Me</a>
          </section>
        </div>
      </div>
    </div>

    <div class="col s12 section-image" id="showme">
      <div class="container">
        <div class="row">
          <div class="col s5 l6">
            <h3 class="left">Gallery Image</h3>
          </div>
          <div class="col s7 l6">
            <a class='dropdown-trigger btn right red darken-4 dropdown' href='#' data-target='dropdown1'>
              All Categories
            </a>

              <!-- Dropdown Structure -->
              <ul id='dropdown1' class='dropdown-content'>
                <li><a href="#!" id="filter" data-value="all">All Categories</a></li>
                <li><a href="#!" id="filter" data-value="Wedding">Wedding Moments</a></li>
                <li><a href="#!" id="filter" data-value="Birthday">Birthday Moments</a></li>
                <li><a href="#!" id="filter" data-value="Opening Ceremony">Opening Ceremony</a></li>
                <li><a href="#!" id="filter" data-value="Others">Others Moments</a></li>
              </ul>
              {{csrf_field()}}
            </div>
          </div>

          <div class="row" id="img-gallery" data-page="1">
              <!-- output -->
          </div>
          <div id="pagination">
              <!-- pagination -->
          </div>
        </div>
      </div>
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
                  <a class="white-text" href="{{route('home')}}#about">
                    About
                  </a>
                </li>
                <li>
                  <a class="white-text" href="{{route('home')}}#service"> 
                    Service
                  </a>
                </li>
                <li>
                  <a class="white-text" href="{{route('gallery')}}">
                    Creation
                  </a>
                </li>
                <li>
                  <a class="white-text" href="{{route('home')}}#contact">
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
  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
  <script src="{{asset('js/jquery.easing.js')}}"></script>
  <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('js/waypoints.js')}}"></script>
  <script>
    $(document).ready(function(){
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $('.sidenav').sidenav();
      $('.materialboxed').materialbox();
      $('.dropdown-trigger').dropdown();
      // $('.scrollspy').scrollSpy();
      $('[data-fancybox]').fancybox();

      // SCROLL PAGE
      $(document).on('click', '.scrollPage', function(e){
        let href = $(this).attr('href');
        let elementHref = $(href);
        
        if(navigator.userAgent.match(/(ipod|iphone|ipad|Android)/)){
          window.setTimeout(function() {
            window.scrollTo(0,680);
          },0);
        }else{
          $('html').animate({
            scrollTop: elementHref.offset().top + 50
          },1000,'easeInExpo');
        }

        e.preventDefault();
      });

      // GET DATA GALLERY IMAGE
      function load_data_gallery(page){
        $.ajax({
          url: "{{route('gallery.img')}}?page="+page,
          method: "GET",
          success: function(res){
            $('#img-gallery').attr('data-sisa', res.total);
            (res.image != '') ? $('#img-gallery').hide().html(res.image).fadeIn(1500) : $('#img-gallery').html('<p class="white-text helper-text center-align">Belum ada gambar</p>').show('slow');
            $('#pagination').html(res.pagina);
          }
        });
      }
      load_data_gallery();

      // GET DATA GALLERY IMAGE FILTER
      function load_data_categories(page){
        let categories = $('#img-gallery').attr('data-filter');
        let token = $('input[name=_token]').val();
        $.ajax({
          url: "{{route('gallery.cat')}}?page="+page,
          method: "POST",
          data: {categories:categories,token:token},
          success: function(res){
            $('#img-gallery').attr('data-sisa', res.total);
            $('#img-gallery').attr('data-filter', categories);
            (res.image != '') ? $('#img-gallery').hide().html(res.image).fadeIn(1500) : $('#img-gallery').html('<p class="white-text helper-text center-align">Belum ada gambar</p>').show('slow');
            $('#pagination').html(res.pagina);
          }
        });
      }

      // PAGINATION
      $(document).on('click', '.pagination a', function(e){
        let categories = $('#img-gallery').attr('data-filter');
        let token = $('input[name=_token]').val();
          
        let page  = $(this).attr('href').split('page=')[1];
        $('#img-gallery').attr('data-page', page);

        if(!categories || categories == 'all'){
          load_data_gallery(page);
        }else{
          load_data_categories(page);
        }
          
        e.preventDefault();
      });

      // DROPDOWN CATEGORY
      $(document).on('click', '#filter', function(e){
        $('.dropdown').text($(this).text());
        let categories = $(this).attr('data-value');
        let token = $('input[name=_token]').val();

        $.ajax({
          url: "{{route('gallery.cat')}}",
          method: "POST",
          data: {categories:categories,token:token},
          success: function(res){
            $('#img-gallery').attr('data-sisa', res.total);
            $('#img-gallery').attr('data-filter', categories);
            (res.image != '') ? $('#img-gallery').hide().html(res.image).fadeIn(1500) : $('#img-gallery').html('<p class="white-text helper-text center-align">Belum ada gambar</p>').show('slow');
            $('#pagination').html(res.pagina);
          }
        });
      });
    });
  </script>
</body>
</html>