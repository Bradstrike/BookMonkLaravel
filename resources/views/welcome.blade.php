@extends('components.layout') @section('title', 'Ürün') @section('content')
<section class="a2L a1F">


<div class="a1R a3 a1S">



@foreach ($books as $book)

<div class="a4 ak md:a1T/2 lg:a1T/3 2xl:a1T/4">
<div class="a1U a1V a1W a1G aM a2T[18px]">
<div class="af a1Y a2p av">
<img src="images/picks/image-01.svg" alt="auctions" class="a4">
</button>
</div>
<div>
<h3>
<a href="item-details.html" class="a2D a2a a1Q aX aZ hover:a1u">
{{$book->title}}
</a>
</h3>
<div class="a2b a3 a5 ah">
<div class="a4">
<div class="a3 a5">
<div class="a4">
<h4 class="a2Y aX aZ">
{{$book->author}}   
<span class="al a2Y a1o a1t">
Yazar
</span>
</h4>
</div>
</div>
</div>
<div class="a4">
<h5 class="a33 a2Y aX aZ">
{{$book->list_price}} TL
<span class="al a2Y a1o a1t">
Fiyat
</span>
</h5>
</div>
</div>
<div class="a3 a5 ah a34 a1G a35">
<a href="{{route('basket.add',$book->id)}}" class="a3 a5 a1Z a1f a1C aP ak a1n aX aZ a1w hover:a36 sm:a2u">
 Sepete Ekle
</a>
</div>
</div>
</div>
</div>

@endforeach




</div>
</div>
</section>
@endsection

