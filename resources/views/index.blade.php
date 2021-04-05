@extends('layout/master')

@section('title')
    <title>HondaMobil - Home</title>
@endsection

@section('container')
<div class="wrapper bgded overlay" style="background-image:url('{{asset('assets/images/demo/backgrounds/header1.jpg')}}');">
    <div id="pageintro" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <article>
        <h4 class="heading">Welcome to HondaMobil</h4>
        <p>Seperti yang telah di ketahui sebagai dealer mobil honda yang memasarkan produk di wilayah daerah istimewa yogyakarata, selain itu sebagi informasi konsumen untuk mengetahui segala macam produk, promo, paket kredit, angsuran, cashback serta perhitungan kredit bagi calon pembeli mobil honda</p>
        <footer>
          <ul class="nospace inline pushright">
            <li><a class="btn" href="{{url('/contact')}}">Hubungi Kami</a></li>
            <li><a class="btn inverse" href="{{url('/product')}}">Explore</a></li>
          </ul>
        </footer>
      </article>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row2">
    <section id="introblocks" class="hoc container clear"> 
      <!-- ################################################################################################ -->
      <ul class="nospace group">
        <li class="one_half first">
          <article><a href="#"><i class="far fa-check-circle"></i></a>
            <h6 class="heading underline">Visi</h6>
            <p>Visi Dealer HondaMobil adalah “Creating Satisfied Buying Experience Honda Vehicles at HondaMobil”, dimana konsumen Honda HondaMobil akan merasakan kenyamanan dan kepuasan dari proses pembelian kendaraan sampai perawatan kendaraan secara berkala</p>
          </article>
        </li>
        <li class="one_half">
          <article class="active"><a href="#"><i class="far fa-check-circle"></i></a>
            <h6 class="heading underline">Misi</h6>
            <p>Visi Dealer HondaMobil adalah “Creating Satisfied Buying Experience Honda Vehicles at HondaMobil”, dimana konsumen Honda HondaMobil akan merasakan kenyamanan dan kepuasan dari proses pembelian kendaraan sampai perawatan kendaraan secara berkala</p>
          </article>
        </li>
      </ul>
      <!-- ################################################################################################ -->
    </section>
  </div>

  <div class="wrapper row3">
    <section class="hoc container clear"> 
      <!-- ################################################################################################ -->
      <div class="center btmspace-80">
        <h6 class="heading underline font-x2">Produk HondaMobil</h6>
      </div>
      <ul id="latest" class="nospace group">
        <li class="one_third first">
          <article>
            <figure><a class="imgover" href="#"><img src="{{asset('assets/images/demo/car.jpg')}}" alt=""></a></figure>
            <div class="excerpt">
              <h6 class="heading">Honda Brio</h6>
              <ul class="nospace meta">
                <li><i class="fas fa-user rgtspace-5"></i> <a href="#">Admin</a></li>
                <li><i class="far fa-clock rgtspace-5"></i>
                  <time datetime="2045-04-06T08:15+00:00">5 Apr 2021</time>
                </li>
              </ul>
              <p>Ac nibh blandit eleifend nullam sed nisi in justo hendrerit egestas proin consectetuer turpis quis malesuada [<a href="#">&hellip;</a>]</p>
              <footer><a class="btn" href="{{url('/product')}}">Read More</a></footer>
            </div>
          </article>
        </li>
        <li class="one_third">
          <article>
            <figure><a class="imgover" href="#"><img src="{{asset('assets/images/demo/car2.jpg')}}" alt=""></a></figure>
            <div class="excerpt">
              <h6 class="heading">Honda Jazz</h6>
              <ul class="nospace meta">
                <li><i class="fas fa-user rgtspace-5"></i> <a href="#">Admin</a></li>
                <li><i class="far fa-clock rgtspace-5"></i>
                  <time datetime="2045-04-05T08:15+00:00">5 Apr 2021</time>
                </li>
              </ul>
              <p>Felis et libero aliquam ultrices aliquam quis purus feugiat tortor sodales vestibulum nunc sollicitudin tellus [<a href="#">&hellip;</a>]</p>
              <footer><a class="btn" href="{{url('/product')}}">Read More</a></footer>
            </div>
          </article>
        </li>
        <li class="one_third">
          <article>
            <figure><a class="imgover" href="#"><img src="{{asset('assets/images/demo/car1.jpg')}}" alt=""></a></figure>
            <div class="excerpt">
              <h6 class="heading">Honda Civic</h6>
              <ul class="nospace meta">
                <li><i class="fas fa-user rgtspace-5"></i> <a href="#">Admin</a></li>
                <li><i class="far fa-clock rgtspace-5"></i>
                  <time datetime="2045-04-04T08:15+00:00">05 Apr 2021</time>
                </li>
              </ul>
              <p>A blandit augue lorem ac est pellentesque et risus sed quis magna vestibulum erat nisl luctus iaculis consequat [<a href="#">&hellip;</a>]</p>
              <footer><a class="btn" href="{{url('/product')}}">Read More</a></footer>
            </div>
          </article>
        </li>
      </ul>
      <!-- ################################################################################################ -->
    </section>
  </div>
@endsection