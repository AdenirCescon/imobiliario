@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label">CPF</label>

                            <div class="col-12">
                                <input id="cpf" type="text" class="form-control" name="cpf" value="" required autocomplete="email" autofocus>
                            </div>

                            <div class="form-floating py-3">
                                <textarea class="form-control" id="text"></textarea>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
