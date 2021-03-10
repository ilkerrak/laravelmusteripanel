@extends('layout')
@section('content')
<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="page-title">Siparişler</h3>
        </div>
        <div class="mr-left">
             <a href="{{route('orders.create')}}" class="btn btn-success">Ekle</a>
        </div>
        
    </div>
</div>

<!-- Main content -->
<section class="content">

  <div class="row">
      <div class="col-12">
        <div class="box">
          <div class="box-body">
            <div class="table-responsive">
                <table id="customers" class="table table-hover no-wrap product-order" data-page-size="10">
                    <thead>
                        <tr>
                            <th>Sipariş No</th>
                            <th>Müşteri Adı</th>
                            <th>Sipariş Tarihi</th>
                            <th>Ürün Adı</th>
                            <th>Miktar</th>
                            <th>Fiyat</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
      <tbody>
         
        @foreach($data['RotaOrders'] as $item)
                        <tr>
                            <td>{{$item->orders_no}}</td>
                            <td>{{$item->customer_fullname}}</td>
                            <td>{{$item->orders_date}}</td>
                            <td>{{$item->product_name}}</td>
                            <td>{{$item->product_quantity}}</td>
                            <td>{{$item->product_price}}</td>
                            <td><a href="{{route('orders.edit',$item->id)}}" class="text-info mr-10" data-toggle="tooltip" data-original-title="Düzenle">
                                    <i class="ti-marker-alt"></i>
                                </a> 
                                <a href="{{route('customers.destroy',$item->id)}}" class="text-danger" data-original-title="Sil" data-toggle="tooltip">
                                    <i class="ti-trash"></i>
                                </a>
                            </td>
        </tr>
            @endforeach
        </tbody>						
                </table>
            </div>
          </div>
        </div>
      </div>		  
  </div>

</section>
@endsection