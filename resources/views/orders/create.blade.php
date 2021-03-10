@extends('layout')
@section('content')

<section class="content">
    <div class="row align-items-end">
    <div class="col-12">
<div class="box">
    
    <div class="box-header">
        <h4 class="box-title">Sipariş Ekle</h4>  
    </div>
    <form action="{{route('orders.store')}}" method="POST" enctype="multipart/form-data">
       @csrf
       <div class="box-body">
        <div class="form-group row">
            <label class="col-form-label col-md-2">Müşteri Adı Soyadı</label>
            <div class="col-md-6">
              <select name="customer_fullname" class="form-control">
              <option value="0">Müşteri Seçiniz </option>  
              
              @foreach($data['RotaCustomers'] as $item)
              <option value="{{$item->customer_fullname}}">{{$item->customer_fullname}} </option>
              @endforeach
              </select>

            </div>
        </div>
      </div>
    <div class="box-body">

        <div class="form-group row">
            <label class="col-form-label col-md-2">Sipariş No</label>
            <div class="col-md-6">
                <input class="form-control" type="number" name="orders_no">
            </div>
        </div>
        </div>
        <div class="box-body">
        <div class="form-group row">
            <label class="col-form-label col-md-2">Sipariş Tarihi</label>
            <div class="col-md-6">
                <input class="form-control" type="date" name="orders_date">
            </div>
        </div>
        </div>
        <div class="box-body">
        <div class="form-group row">
            <label class="col-form-label col-md-2">Ürün Adı</label>
            <div class="col-md-6">
                <input class="form-control" type="text" name="product_name">
            </div>
        </div>
        </div>
        <div class="box-body">
        <div class="form-group row">
          <label class="col-form-label col-md-2">Ürün Miktarı</label>
              <div class="col-md-6">
                  <input class="form-control" type="number" name="product_quantity">
              </div>
         </div>
         </div>
         <div class="box-body">
        <div class="form-group row">
          <label class="col-form-label col-md-2">Ürün Fiyatı</label>
              <div class="col-md-6">
                  <input class="form-control" type="number" name="product_price">
              </div>
         </div>
         </div>
    </div>
        <div class="box-body">
            <div align="right" class="box-footer">
                <button type="submit" class="btn btn-success">Ekle</button>
            </div>
        </div>


    </form>
    
</div>
</div>

    </div>
</section>
@endsection