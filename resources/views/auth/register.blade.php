@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <!-- <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form> -->
                    {!! Form::open(['url'=>'/register']) !!}
                        @csrf

                        <div class="form-group row{{ $errors->has('name') ? ' has-error' : '' }}">
                            {!! Form::label('name', 'Nama', ['class'=>'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::text('name', null, ['class'=>'form-control']) !!}
                                {!! $errors->first('name', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">
                            {!! Form::label('email', 'Alamat Email', ['class'=>'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::email('email', null, ['class'=>'form-control']) !!}
                                {!! $errors->first('email', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('password') ? ' has-error' : '' }}">
                            {!! Form::label('password', 'Password', ['class'=>'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password', ['class'=>'form-control']) !!}
                                {!! $errors->first('password', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group row{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            {!! Form::label('password_confirmation', 'Konfirmasi Password', ['class'=>'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
                                {!! $errors->first('password_confirmation', '<p class="invalid-feedback">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Daftar
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
