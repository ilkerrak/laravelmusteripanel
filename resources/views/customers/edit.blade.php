@extends('layout')
@section('content')
<section class="content">
    <div class="row align-items-end">
    <div class="col-12">
<div class="box">
    
    <div class="box-header">
        <h4 class="box-title">Müşteri Düzenle</h4>  
    </div>
    <form action="{{route('customers.update',$customers->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="box-body">
            <div class="form-group row">
                <label class="col-form-label col-md-2">Müşteri Adı Soyadı</label>
                <div class="col-md-6">
                <input class="form-control" type="text" name="customer_fullname" value="{{$customers->customer_fullname}}">
                </div>
            </div>
          </div>
        <div class="box-body">

            <div class="form-group row">
                <label class="col-form-label col-md-2">Müşteri TC No</label>
                <div class="col-md-6">
                    <input class="form-control" type="number" name="customer_tcno" value="{{$customers->customer_tcno}}">
                </div>
            </div>
            </div>
            <div class="box-body">
            <div class="form-group row">
                <label class="col-form-label col-md-2">Müşteri Telefon</label>
                <div class="col-md-6">
                    <input class="form-control" type="phone" name="customer_phone" value="{{$customers->customer_phone}}">
                </div>
            </div>
            </div>
            <div class="box-body">
            <div class="form-group row">
                <label class="col-form-label col-md-2">Müşteri Email</label>
                <div class="col-md-6">
                    <input class="form-control" type="mail" name="customer_email" value="{{$customers->customer_email}}">
                </div>
            </div>
            </div>
            <div class="box-body">
            <div class="form-group row">
                <label class="col-form-label col-md-2">Müşteri Adres</label>
                <div class="col-md-6">
                    <textarea name="customer_address" class="form-control"  cols="30" rows="10">{{$customers->customer_address}}</textarea>
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