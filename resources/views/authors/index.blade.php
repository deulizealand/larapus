@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Penulis</li>
                </ol>
            </nav>

            <div class="card">
                <div class="card-header">
                    <h2 class="panel-title">Penulis</h2>
                </div>
                <div class="card-body">
                    <div>
                        <p> <a class="btn btn-primary" href="{{ route('authors.create') }}">Tambah</a> </p>
                        {!! $html->table(['class'=>'table-striped']) !!}
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    {!! $html->scripts() !!}
@endsection