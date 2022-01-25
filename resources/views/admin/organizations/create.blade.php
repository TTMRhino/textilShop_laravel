@extends('layouts.admin_layout') 
@section('title', 'Organizations') 

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Create Organizations </h3>

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden></button>
                <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
            </div>
        @endif
    </div>
    <!-- /.card-header -->
    <div class="card-body">


    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">New Organization</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
          
            <form action="{{ route( 'Organizations.store')  }}" method="POST" >
                @csrf              
               

              <div class="card-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text"  class="form-control" name="name" id="name" placeholder="Enter Name" required>
                </div>

                

                <div class="form-group">
                    <label for="user_id">User</label>
                    <select class="form-control" name="user_id"> 
                        @foreach( $Users  as $user )
                                
                                <option value="{{ $user->id }}"> {{ $user->name }}</option>  
                           
                        @endforeach 
                    </select>
                </div>

                  <div class="form-group">
                    <label for="inn">INN</label>
                    <input type="text"  class="form-control" name="inn" id="inn" placeholder="Enter INN">
                </div>

                <div class="form-group">
                    <label for="ogrn">OGRN</label>
                    <input type="text"  class="form-control" name="ogrn" id="ogrn" placeholder="Enter OGRN">
                </div>

                <div class="form-group">
                    <label for="kpp">KPP</label>
                    <input type="text"  class="form-control" name="kpp" id="kpp" placeholder="Enter KPP">
                </div>

                <div class="form-group">
                    <label for="adres_registr">Adress registration</label>
                    <input type="text"  class="form-control" name="adres_registr" id="adres_registr" placeholder="Enter Adress registration">
                </div>

                
                <div class="form-group">
                    <label for="pay_account">Pay account</label>
                    <input type="text"  class="form-control" name="pay_account" id="pay_account" placeholder="Enter Pay account">
                </div>

                

                <div class="form-group">
                    <label for="kor_account">Kor account</label>
                    <input type="text"  class="form-control" name="kor_account" id="kor_account" placeholder="Enter Kor. account">
                </div>

                <div class="form-group">
                    <label for="bik_bank">Bik</label>
                    <input type="text"  class="form-control" name="bik_bank" id="bik_bank" placeholder="Enter BIK">
                </div>

                <div class="form-group">
                    <label for="bank_name">Bank name</label>
                    <input type="text"  class="form-control" name="bank_name" id="bank_name" placeholder="Enter Bank name">
                </div>

                <div class="form-group">
                    <label for="discount">Discount</label>
                    <input type="text"  class="form-control" name="discount" id="discount" placeholder="Enter Discount">
                </div>

               
               
                
              <!-- /.card-body -->

              <div class="card-footer ">
                <button type="submit" class="btn btn-primary">Save</button>
               
                    <a  class="btn  btn-warning" href="{{ URL::previous() }}" >Return</a>
            
                
              </div>
            </form>
          </div>
    </div>
    </div>
</div>

@endsection