<!DOCTYPE html>
<!--
CREDIT TO :
Template Name: Gleblu
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<head>

@yield('title') 

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link href="{{asset('assets/layout/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">
<style>
    th{
        text-align: center;
    }
</style>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <div class="fl_left"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
        <li><i class="fab fa-whatsapp"></i> 081254346789</li>
        <li><i class="fas fa-map-marker-alt"></i> Perum. LempongSari Blok B-1</li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
    <div class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="nospace">
        <li><a href="index.html"><i class="fab fa-youtube"></i></a></li>
        <li><a href="#" title="Help Centre"><i class="fab fa-facebook"></i></a></li>
        <li><a href="#" title="Login"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#" title="Sign Up"><i class="fab fa-whatsapp"></i></a></li>
        <li id="searchform">
          <div>
            <form action="#" method="post">
              <fieldset>
                <legend>Quick Search:</legend>
                <input type="text" placeholder="Enter search term&hellip;">
                <button type="submit"><i class="fas fa-search"></i></button>
              </fieldset>
            </form>
          </div>
        </li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      <!-- ################################################################################################ -->
      <h1><a href="{{url('/')}}">HondaMobil</a></h1>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="{{Request()->is('/')?'active':''}}"><a href="{{url('/')}}">Home</a></li>
        <li class="{{Request()->is('product')?'active':''}}"><a href="{{url('/product')}}">Produk</a></li>
        <li class="{{Request()->is('about')?'active':''}}"><a href="{{url('/about')}}">Tentang Kami</a></li>
        <li class="{{Request()->is('prices')?'active':''}}"><a href="{{url('/prices')}}">Harga Honda</a></li>
        <li class="{{Request()->is('contact')?'active':''}}"><a href="{{url('/contact')}}">Hubungi Kami</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </header>
</div>


@yield('container')


<div class="wrapper row4">
    <footer id="footer" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="one_quarter first">
        <h6 class="heading">Hubungi Kami</h6>
        <ul class="nospace linklist contact btmspace-30">
          <li><i class="fas fa-map-marker-alt"></i>
            <address>
            Perum. LempongSari Blok B-1
            </address>
          </li>
          <li><i class="fas fa-phone"></i>081254346789</li>
          <li><i class="far fa-envelope"></i> hondamobil@domain.com</li>
        </ul>
        <ul class="faico clear">
          <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
          <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
          <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
          <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="heading">Produk</h6>
        <ul class="nospace linklist">
          <li>
            <article>
              <p class="nospace"><a href="#">Brio &NonBreakingSpace; Civic &NonBreakingSpace; Hatchback &NonBreakingSpace; Mobilio &NonBreakingSpace; Odyssey &NonBreakingSpace;HR-V &NonBreakingSpace; BR-V &NonBreakingSpace;CR-V &NonBreakingSpace;City &NonBreakingSpace;Civic &NonBreakingSpace;Accord Type R</a></p>
            </article>
          </li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="heading">Jam Kerja</h6>
        <ul class="nospace linklist">
          <li><a href="#">Senin - Jum'at : 08.00 - 17.00</a></li>
          <li><a href="#">Sabtu : 08.00 - 16.00</a></li>
          <li><a href="#">Minggu : 08.00 - 16.00</a></li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="heading">Gallery HondaMobil</h6>
        <ul class="nospace clear latestimg">
          <li><a class="imgover" href="#"><img src="{{asset('assets/images/demo/100x100.png')}}" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="{{asset('assets/images/demo/100x100.png')}}" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="{{asset('assets/images/demo/100x100.png')}}" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="{{asset('assets/images/demo/100x100.png')}}" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="{{asset('assets/images/demo/100x100.png')}}" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="{{asset('assets/images/demo/100x100.png')}}" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="{{asset('assets/images/demo/100x100.png')}}" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="{{asset('assets/images/demo/100x100.png')}}" alt=""></a></li>
          <li><a class="imgover" href="#"><img src="{{asset('assets/images/demo/100x100.png')}}" alt=""></a></li>
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </footer>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row5">
    <div id="copyright" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="#">HondaMobil</a></p>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
  <!-- JAVASCRIPTS -->
  <script src="{{asset('layout/scripts/jquery.min.js')}}"></script>
  <script src="{{asset('layout/scripts/jquery.backtotop.js')}}"></script>
  <script src="{{asset('layout/scripts/jquery.mobilemenu.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  </body>
  </html>