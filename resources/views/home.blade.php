@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show All Article</div>

                <div class="card-body">
                    @if (auth()->user()->hasRole('admin'))
                        <a href="#">Delete Posts</a>
                    @endif

                    @can('edit posts')
                        <a href="#">Edit Post</a>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
