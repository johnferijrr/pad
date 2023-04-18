@extends('layout.main')

@section('content')
    <div class="card">
        <div class="card-header">
            Welcome
        </div>
        <div class="card-body">
            <div class="alert alert-info">
                Selamat datang di project pertama laravel 10
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-primary" onclick="myhello()">Hello</button>
    <p class="a">Platform</p>
    <p class="b">Digitalisasi</p>
    <p class="c">E-Sarpras Vokasi</p>

@endsection
