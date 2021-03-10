@extends('layout')
@section('content')
<section class="content">
    <div class="row align-items-end">
    <div class="col-12">
<div class="box">
    
    <div class="box-header">
        <h4 class="box-title">Müşteri Ekle</h4>  
    </div>
    <form action="{{route('customers.store')}}" method="POST" enctype="multipart/form-data">
       @csrf
        <div class="box-body">
            <div class="form-group row">
                <label class="col-form-label col-md-2">Müşteri Adı Soyadı</label>
                <div class="col-md-6">
                    <input class="form-control" type="text" name="customer_fullname">
                </div>
            </div>
          </div>
        <div class="box-body">

            <div class="form-group row">
                <label class="col-form-label col-md-2">Müşteri TC No</label>
                <div class="col-md-6">
                    <input class="form-control" type="number" name="customer_tcno">
                </div>
            </div>
            </div>
            <div class="box-body">
            <div class="form-group row">
                <label class="col-form-label col-md-2">Müşteri Telefon</label>
                <div class="col-md-6">
                    <input class="form-control" type="phone" name="customer_phone">
                </div>
            </div>
            </div>
            <div class="box-body">
            <div class="form-group row">
                <label class="col-form-label col-md-2">Müşteri Email</label>
                <div class="col-md-6">
                    <input class="form-control" type="mail" name="customer_email">
                </div>
            </div>
            </div>
            <div class="box-body">
            <div class="form-group row">
                <label class="col-form-label col-md-2">Müşteri Adres</label>
                <div class="col-md-6">
                    <textarea name="customer_address" class="form-control"  cols="30" rows="10"></textarea>
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