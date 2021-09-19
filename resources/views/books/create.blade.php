@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/admin/books') }}">Buku</a></li>
                    <li class="breadcrumb-item active">Tambah Buku</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">
                    <h2 class="panel-title">Tambah Buku</h2>
                </div>
                <div class="card-body">
                    {!! Form::open(['url' => route('books.store'), 'method' => 'post', 'files' => 'true', 'class' => 'form-horizontal']) !!} 
                    @include('books._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection