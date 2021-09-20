@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h2 class="panel-title">Dashboard</h2>
                </div>
                <div class="card-body">
                    Selamat datang di Larapus.
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-muted">Buku dipinjam</td>
                                <td>
                                    @if($borrowLogs->count() === 0) 
                                        Tidak ada buku yang dipinjam
                                    @endif
                                    <ul>
                                        @foreach($borrowLogs as $borrowLog)
                                            <li>{{ $borrowLog->book->title }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection