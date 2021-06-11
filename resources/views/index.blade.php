@extends('layouts.default')

@section('title', 'Home')
@section('content')





    <div class="container-fluid" style="background-color: rgb(36, 36, 36); margin-top: 80px;">
        <div class="row" style="padding: 50px;">
            @for($i = 0; $i<9; $i++)
            <div class="col-md-4 d-flex flex-column align-items-center justify-content-center">
            @include('partials.toode-card')
            </div>
            @endfor
        </div>








@endsection
