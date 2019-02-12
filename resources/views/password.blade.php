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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" />
  <link rel="stylesheet" href="{{asset('css/overhang.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
  <title>BerokenJawa</title>
</head>
<body>
      <nav class="nav-wrapper transparent">
        <div class="container">
          <a href="{{route('home')}}" class="brand-logo center">
            Beroken Jawa
          </a>
          <a href="#" class="sidenav-trigger" data-target="slide-out">
            <i class="material-icons">menu</i>
          </a>
        </div>
      </nav>
      <hr>
      <ul id="slide-out" class="sidenav">
        <li>
            <div class="user-view">
              <div class="background">
                <img src="{{asset('assets/menu.jpeg')}}" class="responsive-img" style="margin-top:-10px">
              </div>
              <a href="#!" style="margin-top:35px"><img class="circle responsive-img" src="{{asset('assets/photos.png')}}" width="60px" height="60px"></a>
              <a href="#!"><span class="white-text name">Selamat Datang</span></a>
              <a href="#!"><span class="white-text email">Admin Beroken Jawa</span></a>
            </div>
        </li>
        <li><a class="subheader">MAIN MENU</a></li>
        <li><a class="waves-effect" href="{{route('home')}}"><i class="material-icons">backspace</i> Home</a></li>
        <li><a class="waves-effect" href="{{route('gallery')}}"><i class="material-icons">collections</i> Creation</a></li>
        <li><a class="waves-effect" href="{{route('dashboard')}}"><i class="material-icons">redo</i> Dashboard</a></li>
        <li><a class="waves-effect" href="{{route('logout')}}"><i class="material-icons">power_settings_new</i> Log out</a></li>
      </ul>

      <div class="container">
        <div class="row">
          <div class="col s12 m8 offset-m2">
            <div class="card transparent">
              <div class="card-content white-text">
                <span class="card-title center">Change password</span>
                <form class="" id="form_password">
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="email" type="email" name="email" class="input">
                      <label for="email">Email</label>
                      <span class="helper-text email" data-error="wrong" data-success="right"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="oldpass" name="oldpass" type="text" class="input">
                      <label for="oldpass">Old password</label>
                      <span class="helper-text oldpass" data-error="wrong" data-success="right"></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s6">
                      <input id="password" name="password" type="text" class="input">
                      <label for="password">New password</label>
                      <span class="helper-text password" data-error="wrong" data-success="right"></span>
                    </div>
                    <div class="input-field col s6">
                      <input id="password_confirmation" name="password_confirmation" type="text" class="">
                      <label for="password_confirmation">Retype new password</label>
                    </div>
                  </div>
                </form>
              </div>
              <div class="card-action">
                <a href="#" class="btn waves-effect" id="update">Update password</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="page-footer grey darken-4">
        <div class="container">
          <div class="row">
            <div class="col l4 s12">
            <h5 class="white-text">Beroken Jawa</h5>
            <p class="white-text">You can use rows and columns here to organize your footer content.</p>
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
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js" integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
  <script src="{{asset('js/overhang.min.js')}}"></script>
  <script>
    $(document).ready(function(){
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $('.sidenav').sidenav();

      function reset(){
        document.getElementById('form_password').reset();
      }

      $(document).on('click', '#update', function(e){
        $(this).text('inisialisasi');
        $(this).attr('disabled', 'disabled');

        $.ajax({
          url: "{{route('update')}}",
          method: "POST",
          data: $('#form_password').serialize(),
          beforeSend: function(){
            $('.input').each(function(key, val){
              let id = $(this).attr('id');
              $('#'+id).removeClass('invalid');
            });
          },
          success: function(res){
            $('#update').text('update password');
            $('#update').removeAttr('disabled');
            if(res.status == false){
              $("body").overhang({
                type: "error",
                message: res.msg,
                duration: 3,
                overlay: true,
                closeConfirm: false
              });
              return;
            }
            iziToast.success({
              title: 'OK',
              message: 'Password Diubah!',
              position: 'topRight'
            });
            reset();
          },
          error: function(res){
            $('#update').text('update password');
            $('#update').removeAttr('disabled');

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