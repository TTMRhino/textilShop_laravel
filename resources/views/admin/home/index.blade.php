@extends('layouts.admin_layout')

@section('title', 'Главная')

@section('content')
 <!-- Content Header (Page header) -->
 <div class="content-header">

    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Admin Home</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Admin Home</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <a href="ССЫЛКА!!!" class="small-box-footer">               
            
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-shopping-cart"></i></span>           

            <div class="info-box-content">
              <span class="info-box-text">Заказы</span>
              <span class="info-box-number"> {{ $orders_count}}</span>              
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
    </a>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <a href="ССЫЛКА!!!" class="small-box-footer">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-tools"></i></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Товары</span>
              <span class="info-box-number">{{ $items_count }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">

            <a href="ССЫЛКА!!!" class="small-box-footer">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-object-group"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Группа</span>
              <span class="info-box-number">{{ $subGroup_count }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
            <a href="ССЫЛКА!!!" class="small-box-footer">
          <div class="info-box mb-3">
            
            <span class="info-box-icon bg-gradient-danger elevation-1"><i class="far fa-object-group"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Подгруппа</span>
              <span class="info-box-number">{{ $mainGroup_count }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->


        <!-- Клиенты -->
        <div class="col-12 col-sm-6 col-md-3">
            <a href="ССЫЛКА!!!" class="small-box-footer">
          <div class="info-box mb-3">
            
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Клиенты</span>
              <span class="info-box-number">{{ $customers_count }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </a>
          <!-- /.info-box -->
        </div>

        <!--Организация -->

        <div class="col-12 col-sm-6 col-md-3">
            <a href="ССЫЛКА!!!" class="small-box-footer">
          <div class="info-box mb-3">
            
            <span class="info-box-icon bg-gradient-success elevation-1"><i class="fa fa-industry" aria-hidden="true"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Организация</span>
              <span class="info-box-number">{{ $organizations_count }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </a>
          <!-- /.info-box -->
        </div>


      </div>
     

     
    </div><!--/. container-fluid -->
  </section>
  <!-- /.content -->


  <!--


<div class="row">
    <div class="col-lg-3 col-6">
       
        <div class="small-box bg-info">
        <div class="inner">
            <h3> ЗАКАЗЫ!!!</h3>

            <p>Заказов</p>
        </div>
        <div class="icon">
            <i class="fas fa-shopping-cart"></i>
        </div>
        <a href="ССЫЛКА!!!" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
        </a>
        </div>
    </div>
   
    <div class="col-lg-3 col-6">
       
        <div class="small-box bg-success">
        <div class="inner">
            <h3>ТОВАРЫ!!! <sup style="font-size: 20px"></sup></h3>

            <p>Товаров</p>
        </div>
        <div class="icon">
        <i class="fas fa-tools"></i>
        </div>
        <a href="ССЫЛКА!!!" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
        </a>
        </div>
    </div>
    
  
    <div class="col-lg-3 col-6">
        
        <div class="small-box bg-danger">
        <div class="inner">
            <h3>ГРУППА!!!</h3>

            <p>Групп</p>
        </div>
        <div class="icon">
        <i class="fas fa-object-group"></i>
        </div>
        <a href="ССЫЛКА!!!" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
        </a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
       
        <div class="small-box bg-gradient-danger">
        <div class="inner">
            <h3>ПОДГРУППА!!!</h3>

            <p>Под групп</p>
        </div>
        <div class="icon">
        <i class="far fa-object-group"></i>
        </div>
        <a href="ССЫЛКА!!!" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
        </a>
        </div>
    </div>
      

       <div class="col-lg-3 col-6">
           
            <div class="small-box bg-warning">
            <div class="inner">
                <h3>КЛИЕНТ!!!</h3>

                <p>Клиенты</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="ССЫЛКА!!!" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>                
    </div>

    <div class="col-lg-3 col-6">
       
        <div class="small-box bg-gradient-success">
        <div class="inner">
            <h3>ОРГАНИЗАЦИЯ!!!</h3>

            <p>Организации</p>
        </div>
        <div class="icon">
        <i class="fa fa-industry" aria-hidden="true"></i>

        </div>
        <a href="ССЫЛКА!!!" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
        </a>
        </div>
    </div>
</div>

-->
  @endsection