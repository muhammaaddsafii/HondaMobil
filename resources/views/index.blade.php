@extends('layout/master')

@section('title')
    <title>HondaMobil - Home</title>
@endsection

@section('container')
<div class="wrapper bgded overlay">
    <div id="" class=""> 
      <!-- ################################################################################################ -->
      <article>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{asset('assets/images/demo/backgrounds/header1.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{asset('assets/images/demo/backgrounds/car.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{asset('assets/images/demo/backgrounds/car1.jpg')}}" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        
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