@extends('components.layout') @section('title', 'Anasayfa') @section('content')
<section class="a2L a1F">
    <div class="ae">
        <div class="a1R a3 a1S">
            <div class="a4 ak lg:a1T/2">
                <div class="a2w a3 a4 a5 a1Z a1V a1W a1G aM a3v sm:a3w md:a3x lg:a2x lg:a3y xl:a3z">
                    <img src="images/item-details/image-01.png" alt="details image" />
                </div>
            </div>
            <div class="a4 ak lg:a1T/2">
                <div class="xl:a3A">
                    <div class="a3B ah sm:a3">
                <h2 class="a2D a3n a1O aZ sm:a2x sm:aY[38px] lg:a3n xl:aY[38px]">
                    {{$books->title}}
                </h2>
                    </div>
                   
                    <div class="a2b a3 a1S a5 ah av a1W a1G aM">
                        <div class="a4 sm:a1T/2">
                            <div class="a3G a1G a3o sm:a3H">
                                <p class="aW aX a1t">Yazar : <span class="aZ"> {{$books->author}} </span></p>
                            </div>
                        </div>
                        <div class="a4 sm:a1T/2">
                            <div class="a3G a1G a3o sm:a3H">
                                <p class="aW aX a1t">Fiyat : <span class="aZ"> {{$books->list_price}} TL </span></p>
                            </div>
                        </div>
                    </div>
                   
                    <div class="a2e a2p av a1W a1G aM">
                        <div class="a3 a4 a1S a5 a3l a1G a3J a3K a3L">
                            <div class="a3M[6px] a3N">
                                <button class="a1f a1W a1G an a2u aW aX aZ hover:a1B hover:a1C">
                                    History
                                </button>
                            </div>
                            <div class="a3M[6px] a3N">
                                <button class="a1f a1W a1G an a2u aW aX aZ hover:a1B hover:a1C">
                                    Bids
                                </button>
                            </div>
                            <div class="a3M[6px] a3N">
                                <button class="a1f a1W a1G an a2u aW aX aZ hover:a1B hover:a1C">
                                    Details
                                </button>
                            </div>
                        </div>

                        @if($books->stock_quantity > 0)
                        <button id="payment" class="a4 a5 a1Z a1f a1C a2T[14px] aW aX aZ hover:a36">
                            Ödeme Yap
                        </button>
                        @endif
                        @if($books->stock_quantity == 0)
                        <button id="block" class="a4 a5 a1Z a1f a1C a2T[14px] aW aX aZ hover:a36">
                            Tükendi
                        </button>
                        @endif
                    </div>
            </div>
        </div>
    </div>
    
    
</section>

@endsection