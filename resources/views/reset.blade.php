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
  <link rel="stylesheet" href="{{asset('css/login.css')}}">
  <title>BerokenJawa</title>
</head>
<body>
    <nav class="nav-wrapper transparent">
        <div class="container">
          <a href="{{route('home')}}" class="brand-logo center">
            <img src="{{asset('assets/photos.png')}}" class="responsive-img" width="40px" height="40px">
          </a>
        </div>
    </nav>

    <div class="container container-card">
      <div class="row">
        <div class="col s12 m12">
          <div class="card transparent">
            <div class="card-content white-text">
              <h3 class="card-title">Reset Your Password</h3>
              <div class="row">
                <form action="#" class="col s12" id="reset_pass">
                  <div class="row">
                    <div class="input-field col s12">
                      <input id="password" type="password" name="password" class="input">
                      <label for="password">New password</label>
                      <span class="helper-text password" data-error="wrong"></span>
                    </div>
                    <div class="input-field col s12">
                      <input id="password_confirmation" type="password" name="password_confirmation" class="">
                      <label for="password_confirmation">Password confirmation</label>
                      <span class="helper-text" data-error="wrong"></span>
                    </div>
                  </div>
                  <button class="btn waves-effect waves-light" type="submit" id="reset">
                    reset password
                  </button>
                  <input type="hidden" name="email" value="{{$email}}">
                  {{csrf_field()}}
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section-footer">
      <div class="footer-copyright center-align">
        <div class="container white-text">
              © 2018 BEROKEN JAWA
        </div>
      </div>
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

      function reset(){
        document.getElementById('reset_pass').reset();
      }

      $(document).on('click', '#reset', function(e){
        $(this).text('wait..');
        $(this).attr('disabled', 'disabled');

        $.ajax({
          url: "{{route('reset.submit')}}",
          method: "POST",
          data: $('#reset_pass').serialize(),
          beforeSend: function(){
            $('.input').each(function(key, val){
              let id = $(this).attr('id');
              $('#'+id).removeClass('invalid');
            });
          },
          success: function(res){
            $('#reset').text('reset password');
            $('#reset').removeAttr('disabled');
            iziToast.success({
              title: 'OK',
              message: 'Password Berhasil Diubah!',
              position: 'topRight'
            });
            // reset();
            window.location.href = "{{route('login.form')}}";
          },
          error: function(res){
            $('#reset').text('reset password');
            $('#reset').removeAttr('disabled');

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