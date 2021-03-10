@extends('layout')
@section('content')
<section class="content">
    <div class="row align-items-end">
    <div class="col-12">
<div class="box">
    
    <div class="box-header">
        <h4 class="box-title">Sipariş Düzenle</h4>  
    </div>
    <form action="{{route('orders.update',$orders->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="box-body">
            <div class="form-group row">
                <label class="col-form-label col-md-2">Sipariş No</label>
                <div class="col-md-6">
                    <input class="form-control" type="number"  name="orders_no" value="{{$orders->orders_no}}">
                </div>
            </div>
            </div>
            <div class="box-body">
            <div class="form-group row">
                <label class="col-form-label col-md-2">Müşteri Adı</label>
                <div class="col-md-6">
                    <input class="form-control" type="text"  name="customer_fullname" value="{{$orders->customer_fullname}}">
                </div>
            </div>
            </div>
            
            <div class="box-body">
            <div class="form-group row">
                <label class="col-form-label col-md-2">Sipariş Tarihi</label>
                <div class="col-md-6">
                    <input class="form-control" type="date" name="orders_date" value="{{$orders->orders_date}}">
                </div>
            </div>
            </div>
            <div class="box-body">
            <div class="form-group row">
                <label class="col-form-label col-md-2">Ürün Adı</label>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="product_name" value="{{$orders->product_name}}">
                </div>
            </div>
            </div>
            <div class="box-body">
            <div class="form-group row">
              <label class="col-form-label col-md-2">Ürün Miktarı</label>
                  <div class="col-md-6">
                      <input class="form-control" type="number" name="product_quantity" value="{{$orders->product_quantity}}">
                  </div>
             </div>
             </div>
             <div class="box-body">
            <div class="form-group row">
              <label class="col-form-label col-md-2">Ürün Fiyatı</label>
                  <div class="col-md-6">
                      <input class="form-control" type="number" name="product_price" value="{{$orders->product_price}}">
                  </div>
             </div>
             </div>
        </div>
        <div class="box-body">
            <div align="right" class="box-footer">
                <button type="submit" class="btn btn-success">Düzenle</button>
            </div>
        </div>


    </form>
    
</div>
</div>

    </div>
</section>
@endsection