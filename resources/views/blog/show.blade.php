@extends('layouts.layout')

@section('content')
Content Area
    @if ($active) 
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$title}}</h5>
                <p>{{$id}}</p>
                <p>{{$description}}</p>
                <p>{{$likeCount}} likes</p>
            </div>
        </div>
    @else
        <div class="alert alert-warning">
        Blog bulunamadı.
        </div>        
    @endif
@endsection


{{-- Blog Details for id={{$id}}
<br>
<a href="http://127.0.0.1:8000/blogs/{{ $id + 1 }}">Sonraki Id</a> --}}


