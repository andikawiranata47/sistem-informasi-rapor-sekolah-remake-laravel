@extends('layouts.main')

@section('judul')
    <title>Welcome</title>
@endsection

@section('navbar')
    <form class="d-flex align-items-center h-100" action="/welcome">
    @endsection

@section('container')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="d-xl-flex justify-content-between align-items-start">
<h1 class="text-dark font-weight-bold mb-2">Selamat Datang</h1>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    
                </div>

                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            </div>
        @endsection
