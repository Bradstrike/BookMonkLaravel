@extends('components.layout')
@section('title', 'Sepetim')
@section('content')

@foreach($basket as $element)


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table style="color:white" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Ürün Adı</th>
                                <th>Ürün Fiyatı</th>
                                <th>Ürün Adedi</th>
                                <th>İşlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="color:white">
                                <td>{{$element->book->title}}</td>
                                <td>{{$element->book->list_price}} TL</td>
                                <td>{{$element->quantity}}</td>
                                <td>
                                    <a href="{{route('basket.remove', $element->book_id)}}" class="btn btn-danger">Sil</a>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <div style="color:white" class="float-right">
                        <a href="{{route('home')}}" class="btn btn-success">Alışverişe Devam Et</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endforeach
</div>
<h4 style="color:white">Toplam Fiyat: {{$element->total_price }}</h4>
<div class="a3 a5 ah a34 a1G a35">
<a href="{{route('basket.payment', auth()->user()->id)}}" class="a3 a5 a1Z a1f a1C aP ak a1n aX aZ a1w hover:a36 sm:a2u">
    Ödeme yap
</a>
</div>
<div class="a3 a5 ah a34 a1G a35">
<a href="{{route('home')}}" class="a3 a5 a1Z a1f a1C aP ak a1n aX aZ a1w hover:a36 sm:a2u">
    Alışverişe devam
</a>
</div>

</section>


</div>
@endsection