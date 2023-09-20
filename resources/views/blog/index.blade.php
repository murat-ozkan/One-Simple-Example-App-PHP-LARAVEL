@extends('layouts.layout')

@section('content')

    @foreach ($blogs as $blog)
        @if ($blog["active"]) 
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $blog['title'] }}</h5>
                    <p>{{$blog["likeCount"]}} likes</p>
                    <p><a href="blogs/{{$blog["id"]}}">Detaylar...</a></p>
                </div>
            </div>
        {{-- @else
            <div class="alert alert-warning">
            Blog bulunamadı.
            </div>         --}}
        @endif
    @endforeach

@endsection