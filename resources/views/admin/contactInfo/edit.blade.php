@extends('layouts.admin')

@section('content')

<section class="content-header">
    <div class="container-fluid">
       <div class="row mb-2">
          <div class="col-sm-6">
             <h1>A'loqa ma'lumotlarini tahrirlash </h1>
          </div>
          <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Tahrirlash</li>
             </ol>
          </div>
       </div>
    </div>
    <!-- /.container-fluid -->
</section>

    <div class="col-md-9">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Tahrirlash</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{route('admin.info.update', $item->id)}}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label>Manzil</label>
                <input type="text" class="form-control" value="{{ $item->address }}" name="address" >
              </div>

              <div class="form-group">
                <label>Telefon raqam</label>
                <input type="text" class="form-control" value="{{ $item->phone }}" name="phone" >
              </div>

              <div class="form-group">
                <label> Email </label>
                <input type="text" class="form-control" value="{{ $item->email }}" name="email" >
              </div>

              <div class="form-group">
                <label>Telegram</label>
                <input type="text" class="form-control" value="{{ $item->telegram }}" name="telegram" >
              </div>

              <div class="form-group">
                <label>Instagram</label>
                <input type="text" class="form-control" value="{{ $item->instagram }}" name="instagram" >
              </div>

              <div class="form-group">
                <label>Youtube</label>
                <input type="text" class="form-control" value="{{ $item->youtube }}" name="youtube" >
              </div>

              <div class="form-group">
                <label>Facebook</label>
                <input type="text" class="form-control" value="{{ $item->facebook }}" name="facebook" >
              </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Tasdiqlash</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

      </div>
@endsection


