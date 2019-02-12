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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
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
        <li><a class="waves-effect" href="{{route('owner.portofolio')}}"><i class="material-icons">collections</i> Portofolio</a></li>
        <li><a class="waves-effect" href="{{route('change')}}"><i class="material-icons">remove_red_eye</i> Change Password</a></li>
        <li><a class="waves-effect" href="{{route('logout')}}"><i class="material-icons">power_settings_new</i> Log out</a></li>
      </ul>

      <div class="container">
        <div class="row">
          <div class="col s12 uploads">
            <form action="#" class="dropzone" enctype="multipart/form-data">
              <h4 class="dz-message">Drag & Drop files disini <br><br> (or click)</h4>
              <input type="hidden" name="category" class="category" value="">
              {{csrf_field()}}
            </form>
            <div class="input-field col s12" class="validate">
              <select name="category" id="category">
                <option value="">Choose your option</option>
                <option value="Wedding">Wedding</option>
                <option value="Birthday">Birthday</option>
                <option value="Opening Ceremony">Opening Ceremony</option>
                <option value="Others">Others</option>
              </select>
              <label class="white-text">Pilih Kategori</label>
              <span class="red-text error"></span>
            </div>
            <a href="#!" class="btn upload">Upload File</a>
          </div>

          <div class="col s12 section">
            <div class="row">
              <div class="col s5 l6">
                <h3 class="">Gallery Image</h3>
              </div>
              <div class="col s7 l6">
                <a class='dropdown-trigger btn right red darken-4 dropdown center-block' href='#' data-target='dropdown1'>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
  <script src="{{asset('js/overhang.min.js')}}"></script>
  <script>
    Dropzone.autoDiscover = false;
    $(document).ready(function(){
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });

      $('.sidenav').sidenav();
      $('select').formSelect();
      $('.dropdown-trigger').dropdown();

      $('[data-fancybox]').fancybox();

      var myDropzone = new Dropzone('.dropzone',{
          url: "{{route('upload')}}",
          maxFiles: 14,
          maxFilesize: 3.1, // MB
          parallelUploads: 14,
          addRemoveLinks : true,
          acceptedFiles: "image/jpg,image/jpeg,image/png",
          autoProcessQueue: false,
          dictFileTooBig: "File Terlalu Besar Bro or Sis Maksimal 3MB",
          dictInvalidFileType: "Jenis Extension File Ga Sesuai Tuh!",
          init: function() {
            this.on("error", function (file, data) {
                $('.upload').text('upload file');
                $('.upload').removeAttr('disabled');
                $('.error').text(data.errors.category[0]);
                $('.select-wrapper input.select-dropdown').css({'border-bottom':'1px solid red'});
                $('.dz-error-message').text('Gagal Upload File');
                $('.dz-remove').css({'display':'block'});
            });
            this.on('success', function(file){
              if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0){
                  let _this = this;
                  $('.upload').text('upload file');
                  $('.upload').removeAttr('disabled');
                  $('.dz-remove').css({'display':'block'});

                  setTimeout(() => {
                    _this.removeAllFiles();
                  }, 3000);

                  $('.error').text('');
                  $('.select-wrapper input.select-dropdown').css({'border-bottom':'1px solid #9e9e9e'});
              }
              load_data_gallery();
            });
          }
        });
        
        // GET DATA GALLERY IMAGE
        function load_data_gallery(page){
          $.ajax({
            url: "{{route('img')}}?page="+page,
            method: "GET",
            success: function(res){
              $('#img-gallery').attr('data-sisa', res.total);
              (res.image != '') ? $('#img-gallery').html(res.image).show('slow') : $('#img-gallery').html('<p class="white-text helper-text center-align">Belum ada gambar</p>').show('slow');
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
            url: "{{route('categories')}}?page="+page,
            method: "POST",
            data: {categories:categories,token:token},
            success: function(res){
              $('#img-gallery').attr('data-sisa', res.total);
              $('#img-gallery').attr('data-filter', categories);
              (res.image != '') ? $('#img-gallery').html(res.image).show('slow') : $('#img-gallery').html('<p class="white-text helper-text center-align">Belum ada gambar</p>').show('slow');
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
        
        // FORM CATEGORY
        $(document).on('change', '#category', function(e){
          $('.category').val($(this).val());
        });
        
        // FORM UPLOAD
        $(document).on('click', '.upload', function(e){
          $('.dz-remove').css({'display':'none'});
          $(this).text('process upload');
          $(this).attr('disabled','disabled');

          if(myDropzone.getQueuedFiles().length > 0){
            myDropzone.processQueue();
          }else{
            $('.upload').text('upload file');
            $('.upload').removeAttr('disabled');
            $("body").overhang({
                type: "error",
                message: 'Belum ada file yang dimasukan!',
                duration: 3,
                overlay: true,
                closeConfirm: false
            });
          }
          
          e.preventDefault();
        });
        
        // FILTER CATEGORIES
        $(document).on('click', '#filter', function(e){
          $('.dropdown').text($(this).text());
          let categories = $(this).attr('data-value');
          let token = $('input[name=_token]').val();

          $.ajax({
            url: "{{route('categories')}}",
            method: "POST",
            data: {categories:categories,token:token},
            success: function(res){
              $('#img-gallery').attr('data-sisa', res.total);
              $('#img-gallery').attr('data-filter', categories);
              (res.image != '') ? $('#img-gallery').html(res.image).show('slow') : $('#img-gallery').html('<p class="white-text helper-text center-align">Belum ada gambar</p>').show('slow');
              $('#pagination').html(res.pagina);
            }
          });
        });
        
        // DELETE FILE
        $(document).on('click', '#delete', function(e){
          let id = $(this).attr('data-id');
          let page = $('#img-gallery').attr('data-page');
          let sisa = $('#img-gallery').attr('data-sisa');
          let categories = $('#img-gallery').attr('data-filter');
          let token = $('input[name=_token]').val();

          $(this).html('<i class="material-icons">do_not_disturb</i>');
          $(this).addClass('disabled','disabled');
          
          $.ajax({
            url: "{{route('delete')}}",
            method: "POST",
            data: {id:id,token:token},
            success: function(res){

              if(res.status == true){
                $('#image'+id).fadeOut('slow');

                if(sisa == 1){
                  $('#img-gallery').attr('data-page', (page == 1 ? 1 : (page-1)));
                  if(!categories){
                    load_data_gallery((page-1));
                  }else{
                    load_data_categories((page-1));
                  }
                }else{
                  if(!categories){
                    load_data_gallery(page);
                  }else{
                    load_data_categories(page);
                  }
                }
                
                iziToast.success({
                  title: 'OK',
                  message: 'Berhasil Dihapus!',
                  position: 'topRight'
                });

              }

            }
          });

          e.preventDefault();
        });
    });
  </script>
</body>
</html>