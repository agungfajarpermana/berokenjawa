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
            <h3>project results</h3>
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
          <div class="col s12 l12">
            <h3 class="center-align">Reviews</h3>
          </div>
        </div>
          <div class="row" id="output1">
            <!-- output 1 -->
          </div>
          <div class="row" id="output2">
            <!-- output 2 -->
          </div>
          <div class="row">
            <div class="col s12 l12" style="margin-top:-40px;margin-bottom:20px;">
              <h3 class="center-align">More Reviews</h3>
            </div>
            <section id="output3">
              <!-- output 3 -->
            </section>
          </div>
        </div>
      </div>

    <!-- Modal Structure -->
    <div id="modal1" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h4>Edit Portofolio</h4>
        <div class="row">
          <form class="col s12" id="formedit" enctype="multipart/form-data">
            <div class="row">
              <div class="file-field input-field">
                <div class="btn">
                  <span>File</span>
                  <input type="file" name="file" multiple>
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path input" id="file" type="text" placeholder="Upload one files">
                  <span class="helper-text file" data-error="wrong" data-success="Checking"></span>
                </div>
              </div>
              <div class="input-field col s12">
                <input id="nama" type="text" name="nama" class="input" placeholder="name" value="">
                <label for="nama">Nama</label>
                <span class="helper-text nama" data-error="wrong" data-success="Checking"></span>
              </div>
              <div class="input-field col s12">
                <input id="kerjaan" type="text" name="kerjaan" class="input" placeholder="pekerjaan" value="">
                <label for="kerjaan">Pekerjaan</label>
                <span class="helper-text kerjaan" data-error="wrong" data-success="Checking"></span>
              </div>
              <div class="input-field col s12">
                <textarea id="deskripsi" name="deskripsi" class="materialize-textarea input" placeholder="deskripsi"></textarea>
                <label for="deskripsi">Deskripsi</label>
                <span class="helper-text deskripsi" data-error="wrong" data-success="Checking"></span>
              </div>
              <div class="input-field col s12">
                <input id="url" type="text" name="url" class="input" placeholder="url" value="">
                <label for="url">Link URL</label>
                <span class="helper-text url" data-error="wrong" data-success="Checking"></span>
              </div>
            </div>
            <input type="hidden" name="id" id="id" value="">
            {{csrf_field()}}
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <p class="left grey-text" id="preload"></p>
        <a href="#!" class="waves-effect waves-red btn" id="update">edit portofolio</a>
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
      $('.modal').modal({
        onCloseEnd: function(){
          $('.input').each(function(key, val){
              let id = $(this).attr('id');
              $('#'+id).removeClass('invalid');
              $('.file-path').val('');
          });
        }
      });
      $('[data-fancybox]').fancybox();
      
      $(document).on('click', '.scrollPage', function(e){
          let href = $(this).attr('href');
          let elementHref = $(href);

          $('html').animate({
              scrollTop: elementHref.offset().top
          },1000,'easeInExpo');

          e.preventDefault();
      });
      
      function reset(){
        document.getElementById('formedit').reset();
      }

      function load_data_portofolio(){
        $.ajax({
          url: "{{route('owner.get.portofolio')}}",
          method: "GET",
          success: function(res){
            $('#output1').html(res.output1);
            $('#output2').html(res.output2);
            $('#output3').html(res.output3);
          }
        });
      }
      load_data_portofolio();

      $(document).on('click', '#edit', function(e){
        let id = $(this).attr('data-id');
        let token = $('input[name=_token]').val();
        $('#preload').text('Loading...');
        
        $.ajax({
          url: "{{route('owner.edit.portofolio')}}",
          method: "POST",
          data: {id:id,token:token},
          success: function(res){
            $('#id').val(res.id);
            $('#nama').val(res.nama);
            $('#kerjaan').val(res.kerjaan);
            $('#deskripsi').val(res.deskripsi);
            $('#url').val(res.url);
            $('#preload').text('');
          }
        });
        e.preventDefault();
      });

      $(document).on('click', '#update', function(e){
        $(this).addClass('disabled');
        $(this).text('process...');

        $.ajax({
          url: "{{route('owner.update.portofolio')}}",
          method: "POST",
          data: new FormData($('#formedit')[0]),
          contentType: false,
          processData: false,
          beforeSend: function(){
            $('.input').each(function(key, val){
                let id = $(this).attr('id');
                $('#'+id).removeClass('invalid');
            });
          },
          success: function(res){
            $('#update').removeClass('disabled');
            $('#update').text('edit portofolio');
            $('.modal').modal('close');
            $('.file-path').val('');
            load_data_portofolio();
            console.log(res);
          },
          error: function(res){
            $('#update').removeClass('disabled');
            $('#update').text('edit portofolio');
            $.each(res.responseJSON.errors, function(key, val){
              $('#'+ key).addClass('invalid');
              $('.'+ key).attr('data-error', val[0]);
            });
          }
        });
        e.preventDefault();
      });
    });
  </script>
</body>
</html>