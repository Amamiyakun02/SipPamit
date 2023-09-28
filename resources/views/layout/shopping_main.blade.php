<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Fashi Template" />
    <meta name="keywords" content="Fashi, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Fashi | Template</title>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap"
      rel="stylesheet"
    />

    <!-- Css Styles -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/themify-icons.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/invest.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/nice-select.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/jquery-ui.min.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css" />
  </head>
  <body>
     <!-- Page Preloder -->
      <div id="preloder">
        <div class="loader"></div>
      </div>
    
      <!-- Header Section Begin -->

        @include('layout.shopping_header')


  @yield('content')

  
    <!-- Footer Section Begin -->
      @include('layout.shopping_footer')
    <!-- Footer Section End -->

  
    <!-- Js Plugins -->
    <script src="../assets/js/shop/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/shop/bootstrap.min.js"></script>
    <script src="../assets/js/shop/jquery-ui.min.js"></script>
    <script src="../assets/js/shop/jquery.countdown.min.js"></script>
    <script src="../assets/js/shop/jquery.nice-select.min.js"></script>
    <script src="../assets/js/shop/jquery.zoom.min.js"></script>
    <script src="../assets/js/shop/jquery.dd.min.js"></script>
    <script src="../assets/js/shop/jquery.slicknav.js"></script>
    <script src="../assets/js/shop/owl.carousel.min.js"></script>
    <script src="../assets/js/shop/main.js"></script>
  </>
</html>
