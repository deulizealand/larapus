@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h2 class="panel-title">Daftar Buku</h2>
                </div>
                <div class="card-body">
                    <div>
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