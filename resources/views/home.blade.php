@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h3>Добро пожаловать {{Auth::user()->name}}!</h3>
            <h5>Вы успешно зарегестрированы!</h5>
            <a href="#">Перейти на сайт</a>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

        </div>
    </div>
</div>
@endsection
