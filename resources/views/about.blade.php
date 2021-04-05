@extends('layout/master')

@section('title')
    <title>HondaMobil - About</title>
@endsection

@section('container')
<div class="wrapper row3">
    <main class="hoc container clear"> 
      <!-- main body -->
      <!-- ################################################################################################ -->

      <div class="center btmspace-30">
        <h6 class="heading font-x2">Dealer HondaMobil Yogyakarta</h6>
      </div>
      <p style="text-align: center" class="btmspace-80">Selamat Datang di website kami Dealer Honda Tugu Jogjakarta – PT. Honda Tugu Motor, dimana website ini di buat sebagai pusat informasi khususnya kepada Costumer mobil honda di Daerah Istimewa Yogyakarta, mengingat banyaknya minat maupun antusias masyarakat Jogjakarta mengenai keingintahuannya tentang segala macam Produk Mobil Honda, tetapi tidak memiliki waktu untuk mengunjungi alamat showroom Dealer Honda Tagu. dengan adanya website ini maka cukup membuka website kami melalui smartphone atau laptop  tanpa harus mengunjungi Dealer Resmi Honda Tugu Jogja, segala Informasi yang anda butuhkan dapat di akses dan ada di sini, mulai dari no telpon, alamat dealer, sales marketing honda, spesifikasi produk mobil honda, daftar harga honda terbaru, promo bulanan, diskon, paket kredit maupun angsuran, cashback serta test drive.</p>

      
      <div class="center btmspace-80">
        <h6 class="heading font-x2">Keunggulan Kami</h6>
      </div>

      <ul class="nospace group overview btmspace-80">
        <li class="one_third">
          <article>
            <div class="clear"><a href="#"><i class="fas fa-car"></i></a>
              <h6 class="heading">Produk Mobil Honda harga termurah</h6>
            </div>
            <p>Sit amet turpis nulla congue augue lectus quis est ante non mi fusce euismod etiam augue aenean ullamcorper.</p>
          </article>
        </li>
        <li class="one_third">
          <article>
            <div class="clear"><a href="#"><i class="fas fa-car"></i></a>
              <h6 class="heading">Melayani pembelian cash dan kredit</h6>
            </div>
            <p>Neque pellentesque bibendum duis ut est quis nisl consequat gravida nulla facilisi nullam feugiat mauris enim.</p>
          </article>
        </li>
        <li class="one_third">
          <article>
            <div class="clear"><a href="#"><i class="fas fa-car"></i></a>
              <h6 class="heading">Paket DP ringan bisa di sesuaikan</h6>
            </div>
            <p>Ut luctus velit vel eleifend luctus quam ante interdum nibh non sollicitudin enim mi viverra est aenean blandit.</p>
          </article>
        </li>
        <li class="one_third">
          <article>
            <div class="clear"><a href="#"><i class="fas fa-car"></i></a>
              <h6 class="heading">Tersedia Paket DP 0%</h6>
            </div>
            <p>Fusce ut felis nulla facilisi aliquam erat volutpat morbi fermentum mauris a nunc ut non lectus nunc aliquam est.</p>
          </article>
        </li>
        <li class="one_third">
          <article>
            <div class="clear"><a href="#"><i class="fas fa-car"></i></a>
              <h6 class="heading">Perhitungan angsuran yang terjangkau</h6>
            </div>
            <p>Non nisi sed erat diam hendrerit ut auctor sed vulputate at purus vestibulum eget lorem at tortor tristique.</p>
          </article>
        </li>
        <li class="one_third">
          <article>
            <div class="clear"><a href="#"><i class="fas fa-car"></i></a>
              <h6 class="heading">Proses Cepat angsuran bisa 7 thn</h6>
            </div>
            <p>Semper nulla adipiscing mi sed rutrum fringilla mauris libero posuere lectus eleifend pretium purus vestibulum.</p>
          </article>
        </li>
      </ul>
      <footer class="center"><a class="btn" href="{{('/product')}}">Lihat Produk</a></footer>
      <!-- ################################################################################################ -->
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>

  <div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
    <section class="hoc container clear"> 
      <!-- ################################################################################################ -->
      <div class="center btmspace-80">
        <h6 class="heading underline font-x2">Apa Kata Mereka ?</h6>
      </div>
      <ul id="testimonials" class="nospace group btmspace-80">
        <li class="one_half first">
          <blockquote>Pada awalnya saya cukup kesuliatan dalam menentukan pilihan membeli mobil yang sesuai dengan kebutuhan saya maupun keluarga, namun berkat bantuan sales marketing HondaMobil, semua di bantu solusinya.</blockquote>
          <figure class="clear"><img class="circle" src="images/demo/60x60.png" alt="">
            <figcaption>
              <h6 class="heading">Abdul Hadi</h6>
              <em>Warga Bantul</em></figcaption>
          </figure>
        </li>
        <li class="one_half">
          <blockquote>Setelah menimbang dari beberapa sales HondaMobil, akhirnya saya berani untuk memutuskan membeli unit all new honda CR-V, sama Mas Trias dengan pertimbangan diskon dan cashback yang besar, bonus pembelian serta angsuran yang terjangkau		.</blockquote>
          <figure class="clear"><img class="circle" src="images/demo/60x60.png" alt="">
            <figcaption>
              <h6 class="heading">Ibu Khusni</h6>
              <em>Warga Sleman</em></figcaption>
          </figure>
        </li>
      </ul>
      <footer class="center"><a class="btn" href="{{('/product')}}">Lihat Produk</a></footer>
      <!-- ################################################################################################ -->
    </section>
  </div>
@endsection