@extends('layouts.admin')

@section('content')

<section class="content-header">
    <div class="container-fluid">
       <div class="row mb-2">
          <div class="col-sm-6">
             <h1>Barcha a'loqa ma'lumotlarini ko'rish</h1>
          </div>
          <div class="col-sm-6">
             <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Barcha ma'lumotlarni ko'rish</li>
             </ol>
          </div>
       </div>
    </div>
    <!-- /.container-fluid -->
</section>
<div class="col-md-12 mt-3">
    <!-- Default box -->
    <div class="card">
        <div class="card-body row">
            <div class="col-12">

                <div class="form-group">
                    <label for="inputName">Manzil</label>
                    <p class="form-text">{{ $item->address }}</p>

                </div>
                <hr>

                <div class="form-group">
                    <label for="inputEmail">Telefon raqam</label>
                    <p class="form-text">{{ $item->phone }}</p>

                </div>
                <hr>

                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <p class="form-text">{{ $item->email }}</p>

                </div>
                <hr>

                <div class="form-group">
                    <label for="inputEmail">Telegram</label>
                    <p class="form-text">{{ $item->telegram }}</p>

                </div>
                <hr>

                <div class="form-group">
                    <label for="inputEmail">Instagram </label>
                    <p class="form-text">{{ $item->instagram }}</p>

                </div>
                <hr>

                <div class="form-group">
                    <label for="inputEmail">Facebook </label>
                    <p class="form-text">{{ $item->facebook }}</p>

                </div>
                <hr>

                <div class="form-group">
                    <label for="inputEmail">YouTube </label>
                    <p class="form-text">{{ $item->youtube }}</p>

                </div>
                <hr>

                <div class="form-group">
                    <a href="{{ route('admin.info.edit', $item->id) }}" class="btn btn-primary"> Tahrirlash </a>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection

