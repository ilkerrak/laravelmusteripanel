@extends('layout')
@section('content')
<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="page-title">Müşteriler</h3>
        </div>
        <div class="mr-left">
             <a href="{{route('customers.create')}}" class="btn btn-success">Ekle</a>
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
                            <th>ID</th>
                            <th>Adı Soyadı</th>
                            <th>TC No</th>
                            <th>Telefon</th>
                            <th>Email</th>
                            <th>Adres</th>
                            <th>İşlemler</th>
                        </tr>
                    </thead>
      <tbody>
         @php $i=1; @endphp
        @foreach($data['RotaCustomers'] as $item)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$item->customer_fullname}}</td>
                            <td>{{$item->customer_tcno}}</td>
                            <td>{{$item->customer_phone}}</td>
                            <td>{{$item->customer_email}}</td>
                            <td>{{$item->customer_address}}</td>
                            <td><a href="{{route('customers.edit',$item->id)}}" class="text-info mr-10" data-toggle="tooltip" data-original-title="Düzenle">
                                    <i class="ti-marker-alt"></i>
                                </a> 
                                <a href="{{route('customers.destroy',$item->id)}}" class="text-danger" data-original-title="Sil" data-toggle="tooltip">
                                    <i class="ti-trash"></i>
                                </a>
                            </td>
        </tr>
        {{$i++}}
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