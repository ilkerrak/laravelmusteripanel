<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jengal- Müşteri Paneli</title>
    
	<link rel="stylesheet" href="/css/vendors_css.css">
	  
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/skin_color.css">
     
  </head>

<body class="hold-transition light-skin sidebar-mini theme-primary">
	
<div class="wrapper">
  <div id="loader"></div>
	
  <header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start">
		<a href="#" class="waves-effect waves-light nav-link d-none d-md-inline-block mx-10 push-btn bg-transparent" data-toggle="push-menu" role="button">
			<span class="icon-Align-left"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
		</a>	
		<a href="/" class="logo">
		  <div class="logo-lg">
			  <span class="light-logo"><img src="https://jengal.com/wp-content/uploads/2016/06/jengal-logo-05.png" alt="logo"></span>
		  </div>
		</a>	
	</div>  
	<nav class="navbar navbar-static-top">
	  </nav>
  </header>
  
  <aside class="main-sidebar">
    <section class="sidebar">	
		
      <ul class="sidebar-menu" data-widget="tree">		
		<li>
          <a href="{{route('customers.index')}}">
            <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
			<span>Müşteriler</span>
          </a>
		</li>
		<li>
			<a href="{{route('orders.index')}}">
			  <i class="icon-Cart"><span class="path1"></span><span class="path2"></span></i>
			  <span>Siparişler</span>
			</a>
		  </li>   
	</ul>			
    </section>
	
  </aside>

  <div class="content-wrapper">
    <div class="container-full">
        <section class="content">
            @yield('content')
        </section>
    </div>
  </div>

  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
    </div>
	  &copy; 2021 <a href="https://www.jengal.com/">Jengal Yazılım</a>. Tüm Hakları Saklıdır.
  </footer>

  <aside class="control-sidebar">
	  
	<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger"><i class="ion ion-close text-white" data-toggle="control-sidebar"></i></span> </div>
  </aside>
</div>

	<script src="/js/vendors.min.js"></script>
	<script src="/js/template.js"></script>
	<script src="/js/pages/dashboard3.js"></script>
    <script src="/js/datatables.min.js"></script>
	
</body>

</html>