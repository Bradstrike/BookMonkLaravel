<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NFT Tailwind Template</title>
<link rel="shortcut icon" href="/images/favicon.png" type="image/x-icon">

<link rel="stylesheet" href="/css/animate.css">
<link rel="stylesheet" href="/css/tiny-slider.css">
<link rel="stylesheet" href="/css/tailwind.css">
<script src="/js/wow.min.js"></script>
                          
<script>
      // ===== wow js
      new WOW().init();
    </script>
<script defer="" src="/js/alpine.min.js"></script>
</head>
<body class="a0" x-data="
      {
        scrolledFromTop: false
      }
    " x-init="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false" @scroll.window="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false">

<header x-data="
        {
          navbarOpen: false,
          submenuOpen: false
        }
      " class="header a1 a2 a3 a4 a5 a6 a7 a8" :class="scrolledFromTop ? 'a9 aa ab ac ad' : ' a9' ">
<div class="ae">
<div class="af ag[-16px] a3 a5 ah">
<div class="ai aj ak">

</div>
<div class="a3 a4 a5 ah ak">
<div>
<button @click="navbarOpen = !navbarOpen " :class="navbarOpen && 'navbarTogglerActive' " id="navbarToggler" name="navbarToggler" aria-label="navbarToggler" class="ar as at/2 al au[-50%] av aw ax[6px] ay focus:az lg:aA">
<span :class="navbarOpen && 'aB aC aD[7px]' " class="af aE[6px] al aF[2px] aG[30px] aH"></span>
<span :class="navbarOpen && 'aI' " class="af aE[6px] al aF[2px] aG[30px] aH"></span>
<span :class="navbarOpen && 'aD[-8px] aJ[135deg]' " class="af aE[6px] al aF[2px] aG[30px] aH"></span>
</button>
<nav :class="!navbarOpen && 'aA' " id="navbarCollapse" class="ar as aK a4 aL[250px] av aM aN lg:aO lg:al lg:a4 lg:aj lg:a6 aP lg:aQ lg:ak lg:aR xl:aS">
<ul class="aT lg:a3">
<li class="aU af">
<a href="{{route('home')}}" class="aV a3 an aW aX aZ group-hover:aZ lg:a_ lg:a10 lg:a11 lg:a12">
Anasayfa
</a>
</li>
<li class="aU submenu-item af">
<a href="javascript:void(0)" @click="submenuOpen = !submenuOpen" class="af aV a3 an aW aX aY[#bababa] after:ar after:a15 after:at/2 after:a16[-2px] after:a17 after:a18 after:au[-50%] after:aC after:a19 after:a1a after:a1b group-hover:aZ lg:a_ lg:a13 lg:a10 lg:a11 lg:a1c lg:a1d lg:after:a1e xl:a14">
Kategoriler
</a>
<div :class="submenuOpen ? 'al' : 'aA' " class="submenu af aK a2 aG[250px] a1f aa a1g a1h[top] a1i group-hover:a1j lg:a1k lg:ar lg:aD[110%] lg:al lg:aI lg:aN lg:group-hover:a1l lg:group-hover:aK">
<a href="explore-items.html" class="al a1m ax[10px] ak a1n a1o aY[#bababa] hover:aZ">
1. kategori
</a>
<a href="item-details.html" class="al a1m ax[10px] ak a1n a1o aY[#bababa] hover:aZ">
2. kategori
</a>
<a href="create-item.html" class="al a1m ax[10px] ak a1n a1o aY[#bababa] hover:aZ">
3. kategori
</a>
<a href="connect-wallet.html" class="al a1m ax[10px] ak a1n a1o aY[#bababa] hover:aZ">
4. kategori
</a>
<a href="support.html" class="al a1m ax[10px] ak a1n a1o aY[#bababa] hover:aZ">
5. kategori
</a>
<a href="signin.html" class="al a1m ax[10px] ak a1n a1o aY[#bababa] hover:aZ">
6. kategori
</a>
<a href="signup.html" class="al a1m ax[10px] ak a1n a1o aY[#bababa] hover:aZ">
7. kategori
</a>
</div>
</li>
<li class="aU af">
<a href="support.html" class="aV a3 an aW aX aY[#bababa] group-hover:aZ lg:a_ lg:a13 lg:a10 lg:a11 lg:a12 xl:a14">
Destek
</a>
</li>
<!--Kullanıcı giriş yapmamışsa bu kısım görünür-->
@if(!Auth::check()) 
<li class="aU af">
<a href="{{route('login')}}" class="aV a3 an aW aX aY[#bababa] group-hover:aZ lg:a_ lg:a13 lg:a10 lg:a11 lg:a12 xl:a14">
Giriş Yap
</a>
</li>
<li class="aU af">
<a href="{{url('/registration')}}" class="aV a3 an aW aX aY[#bababa] group-hover:aZ lg:a_ lg:a13 lg:a10 lg:a11 lg:a12 xl:a14">
Kayıt Ol
</a>
</li>
@endif
<!--Kullanıcı giriş yapmışsa bu kısım görünür-->
@if(Auth::check())
<li class="aU af">
<a href="profile.html" class="aV a3 an aW aX aY[#bababa] group-hover:aZ lg:a_ lg:a13 lg:a10 lg:a11 lg:a12 xl:a14">
Profilim
</a>
</li>
<li class="aU af">
<a href="{{route('logout')}}" class="aV a3 an aW aX aY[#bababa] group-hover:aZ lg:a_ lg:a13 lg:a10 lg:a11 lg:a12 xl:a14">
Çıkış Yap
</a>
</li>
<li class="aU af">
<h3 class="aV a3 an aW aX aY[#bababa] group-hover:aZ lg:a_ lg:a13 lg:a10 lg:a11 lg:a12 xl:a14">
{{Auth::user()->name}}
</h3>
<h3 class="aV a3 an aW aX aY[#bababa] group-hover:aZ lg:a_ lg:a13 lg:a10 lg:a11 lg:a12 xl:a14">
 Bakiyeniz: {{Auth::user()->balance}}
</h3>
</li>
<li class="aU af">
  <a href="{{url('basket')}}" class="aV a3 an aW aX aY[#bababa] group-hover:aZ lg:a_ lg:a13 lg:a10 lg:a11 lg:a12 xl:a14">Sepetim</a>
@endif
</ul>
</nav>
</div>
</div>
</div>
</div>
</header>


<section id="home" class="af a2o a2p a38 a39 a3a a1E[150px]" style="background-image: url('images/hero/common-bg.jpg')">
<div class="ar a2 a1 a3b a30 a4" style="
          background: linear-gradient(
            180deg,
            rgba(20, 20, 32, 0.65) 0%,
            #141420 100%
          );
        "></div>
<div class="ae">

</section>
@yield('content')




<footer class="aM a24">
<div class="ae">
<div class="a1R a3 a1S">
<div class="a4 ak sm:a25/12 lg:a26/12 xl:a27/12">
<div class="a28">
<div class="aL[300px]">
<a href="index.htm" class="a29 a2a">
<img src="/images/logo" alt="logo" class="aq">
</a>
<p class="a2b aW a1o a1t">
Lorem ipsum dolor amet consectetur adipiscing elit do eiusmod
tempor incididunt ut labore et dolore.
</p>
<div class="a3 a5">

</a>
</div>
</div>
</div>
</div>
<div class="a4 ak sm:a25/12 lg:a26/12 xl:a26/12">
<div class="a28">
<h2 class="a2e a2f a1O aZ">
Company
</h2>
<ul>
<li>
<a href="javascript:void(0)" class="a1M a2a aW a1o a1t a7 hover:aZ">
About company
</a>
</li>
<li>
<a href="javascript:void(0)" class="a1M a2a aW a1o a1t a7 hover:aZ">
Company services
</a>
</li>
<li>
<a href="javascript:void(0)" class="a1M a2a aW a1o a1t a7 hover:aZ">
Job opportunities
</a>
</li>
<li>
<a href="javascript:void(0)" class="a1M a2a aW a1o a1t a7 hover:aZ">
Contact us
</a>
</li>
</ul>
</div>
</div>
<div class="a4 ak sm:a25/12 lg:a26/12 xl:a18/12">
<div class="a28">
<h2 class="a2e a2f a1O aZ">
Customer
</h2>
<ul>
<li>
<a href="javascript:void(0)" class="a1M a2a aW a1o a1t a7 hover:aZ">
Client support
</a>
</li>
<li>
<a href="javascript:void(0)" class="a1M a2a aW a1o a1t a7 hover:aZ">
Latest news
</a>
</li>
<li>
<a href="javascript:void(0)" class="a1M a2a aW a1o a1t a7 hover:aZ">
Company Details
</a>
</li>
<li>
<a href="javascript:void(0)" class="a1M a2a aW a1o a1t a7 hover:aZ">
Who we are
</a>
</li>
</ul>
</div>
</div>

</div>
</div>
</div>
<div class="a2n a1G">
<div class="ap a1L">
</div>
</div>
</div>
</footer>

<script src="/js/tiny-slider.js"></script>
<script>
      //======== tiny slider for clients
      tns({
        container: ".artists-slider",
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 1,
        nav: true,
        navPosition: "bottom",
        controls: false,
        controlsText: [
          '<svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M5.00001 0.0600594L5.00001 4.06006L13.92 4.06006L13.95 6.07006L5.00001 6.07006L5.00001 10.0601L1.19607e-05 5.06006L5.00001 0.0600594Z" fill="white"/></svg>',
          '<svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M8.99999 10.9399V6.93994H0.0799875L0.0499878 4.92994H8.99999V0.939941L14 5.93994L8.99999 10.9399Z" fill="white"/> </svg>',
        ],
        items: 1,
        responsive: {
          540: {
            controls: true,
            nav: false,
          },
          768: {
            items: 2,
          },
          992: {
            items: 3,
          },
          1140: {
            items: 4,
          },
        },
      });
    </script>
</body>
</html>
