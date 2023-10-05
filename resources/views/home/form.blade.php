@extends('layouts.layout')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h4>KURS EKLEME SAYFASI</h4>
        </div>
    </div>
    {{-- @if (@errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif --}}
        {{-- Bu kısım validation error olarak yazıldı ancak version eski old için çalışmadı. --}}
    
        <form method="post" class="col-md-6">
        @CSRF
        <div class="mb-3">
            <input class="form-control @error("course_title") is-invalid @enderror" type="text" name="course_title" id="course_title" placeholder="Başlık">
            @error('course_title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input class="form-control" type="text" name="course_content" id="course_content" placeholder="Kurs İçeriği">
            @error('course_content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-check">
            <input class="form-check-input" name="course_confirm" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Kabul Ediyorum
            </label>
            {{-- @error('course_confirm')
                <div class="alert alert-danger">{{ $message }}</div>
             @enderror --}}
          </div>
        <div class="mb-3 text-center">
            <input type="submit" value="Kurs Ekle" name="">
        </div>
    </form>
</div>


@endsection