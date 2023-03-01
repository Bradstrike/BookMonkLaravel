

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Sepetim</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Ürün Adı</th>
                                <th>Ürün Fiyatı</th>
                                <th>Ürün Adedi</th>
                                <th>Toplam Fiyat</th>
                                <th>İşlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="color:white">
                                <td>{{$element->book->title}}</td>
                                <td>{{$element->book->list_price}}</td>
                                <td>{{$element->quantity}}</td>
                                <td>{{$element->total_price }}</td>
                                <td>
                                    <a href="{{route('basket.remove', $element->book_id)}}" class="btn btn-danger">Sil</a>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <div class="float-right">
                        <a href="{{route('home')}}" class="btn btn-success">Alışverişe Devam Et</a>
                        <a href="{{route('basket.payment', auth()->user()->id)}}" class="btn btn-success">Ödeme Yap</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
