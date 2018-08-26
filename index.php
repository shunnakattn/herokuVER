<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Sample</title>
    <!-- BootstrapのCSS読み込み -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
     <script src="js/bootstrap.min.js"></script>
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>  -->
     <!-- ここ以下はスリックのCDN -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css">
    </head>
  <body>
    <!--header-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
      </div>
    </nav>
    <!--/header-->
      <div class="container-fluid">
        <div class="row">
          <!-- left menu -->
          <div class="col-md-2 col-xs-2 col-sm2 bg-" >
              <div class="sidebar-module">
                  <h4>Archives</h4>
                  <ol class="list-unstyled">
                    <li><a class="active" href="#">March 2014</a></li>
                    <li><a href="#">February 2014</a></li>
                    <li><a href="#">January 2014</a></li>
                    <li><a href="#">December 2013</a></li>
                    <li><a href="#">November 2013</a></li>
                    <li><a href="#">October 2013</a></li>
                    <li><a href="#">September 2013</a></li>
                    <li><a href="#">August 2013</a></li>
                    <li><a href="#">July 2013</a></li>
                    <li><a href="#">June 2013</a></li>
                    <li><a href="#">May 2013</a></li>
                    <li><a href="#">April 2013</a></li>
                  </ol>
                </div>
          </div>
          <!--slider-->
          <div class="col-md-8 col-xs-8 col-sm2 bg-" >
            
              <div class='slick'>
                <div class='slick-item'>
                  <div><h3><a href="#"><img src="img/hoge1.jpg" width="100%" height="100%"></a></h3></div>
                  <div><h3><a href="#"><img src="img/hoge2.jpg" width="100%" height="100%"></a></h3></div>
                  <div><h3><a href="#"><img src="img/hoge3.jpg" width="100%" height="100%"></a></h3></div>
                </div>
              </div><!-- /.slick -->
              <div class="mt-3">
                  <h1>Sticky footer with fixed navbar</h1>
                </div>
                <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body &gt; .container</code>.</p>
                <p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p>
                <div class="mt-3">
                    <h1>Sticky footer with fixed navbar</h1>
                  </div>
                  <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body &gt; .container</code>.</p>
                  <p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p>
                  <div class="mt-3">
                      <h1>Sticky footer with fixed navbar</h1>
                    </div>
                    <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body &gt; .container</code>.</p>
                    <p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p>
          </div><!--/.col-md-8-->

          <div class="col-md-2 col-xs-2 col-sm2 bg-warning" >
              <div class="list-group">
                  <a href="#" class="list-group-item active">Link</a>
                  <a href="#" class="list-group-item">Link</a>
                  <a href="#" class="list-group-item">Link</a>
                  <a href="#" class="list-group-item">Link</a>
                  <a href="#" class="list-group-item">Link</a>
                  <a href="#" class="list-group-item">Link</a>
                  <a href="#" class="list-group-item">Link</a>
                  <a href="#" class="list-group-item">Link</a>
                  <a href="#" class="list-group-item">Link</a>
                  <a href="#" class="list-group-item">Link</a>
                </div>
          </div>
        </div>
      </div>
      <footer style="background-color:gray; text-align: center; padding: 10px;">&copy;Footer</footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
    <script>
$(".slick-item").slick({
accessibility: true,
autoplay: true,
autoplaySpeed: 5000,
dots: true,
fade: true,
});
</script>
  </body>
</html>