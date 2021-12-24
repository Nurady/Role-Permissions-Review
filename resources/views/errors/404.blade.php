@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Not Found</div>

                <div class="card-body">
                   Tidak Ada
                   <a href="{{ route('home') }}">HOME</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
