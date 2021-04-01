@extends('dashboard.layout.master')
@extends('dashboard.layout.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    @if(!isset($rsm_asms[0]))
                        <div class="text-center">
                            <h2 class="mb-4">Please Upload Market Hierarchy First!</h2>
                            <a href="{{ route('hierarchy.index') }}" class="btn btn-success">Upload Hierarchy</a>
                        </div>
                    @else
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="rsm_asm" class="col-md-4 col-form-label text-md-right">{{ __('RSM/ASM Code') }}</label>

                                <div class="col-md-6">
                                    <select class="custom-select custom-select-md mb-3" id="rsm_asm" name="rsm_asm" required>
                                        <option value="" >Select RSM/ASM</option>
                                        @foreach( $rsm_asms as $rsm_asm)
                                            <option value="{{ $rsm_asm->code }}">{{ $rsm_asm->code }} - {{ $rsm_asm->name }}</option>
                                        @endforeach
                                    </select>
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
                        </form>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
