@extends('layout/master')

@section('title')
    <title>HondaMobil - Product</title>
@endsection

@section('container')

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
              <footer><a class="btn btmspace-30" href="{{url('/prices')}}">Read More</a></footer>
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
              <footer><a class="btn btmspace-30" href="{{url('/prices')}}">Read More</a></footer>
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
              <footer><a class="btn btmspace-30" href="{{url('/prices')}}">Read More</a></footer>
            </div>
          </article>
        </li>
      </ul>
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
              <footer><a class="btn btmspace-30" href="{{url('/prices')}}">Read More</a></footer>
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
              <footer><a class="btn btmspace-30" href="{{url('/prices')}}">Read More</a></footer>
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
              <footer><a class="btn btmspace-30" href="{{url('/prices')}}">Read More</a></footer>
            </div>
          </article>
        </li>
      </ul>
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
              <footer><a class="btn btmspace-30" href="{{url('/prices')}}">Read More</a></footer>
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
              <footer><a class="btn btmspace-30" href="{{url('/prices')}}">Read More</a></footer>
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
              <footer><a class="btn btmspace-30" href="{{url('/prices')}}">Read More</a></footer>
            </div>
          </article>
        </li>
      </ul>
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
              <footer><a class="btn btmspace-30" href="{{url('/prices')}}">Read More</a></footer>
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
              <footer><a class="btn btmspace-30" href="{{url('/prices')}}">Read More</a></footer>
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
              <footer><a class="btn btmspace-30" href="{{url('/prices')}}">Read More</a></footer>
            </div>
          </article>
        </li>
      </ul>
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
              <footer><a class="btn btmspace-30" href="{{url('/prices')}}">Read More</a></footer>
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
              <footer><a class="btn btmspace-30" href="{{url('/prices')}}">Read More</a></footer>
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
              <footer><a class="btn btmspace-30" href="{{url('/prices')}}">Read More</a></footer>
            </div>
          </article>
        </li>
      </ul>

      
      <!-- ################################################################################################ -->
    </section>
  </div>

@endsection