
@extends('layouts.app')


@section('alerts')
    @include('alerts.error')
    @include('alerts.message')
@endsection

@section('content')
<div class="container">
    <form action="{{ route('account_update') }}" method="post" enctype="multipart/form-data">
        @csrf
         <div class="row">
            <div class="col-3">
                <img class="img-thumbnail" src="{{ Auth::user()->avatar ?? '/img/avatars/user-default.png' }}" alt="user@email.com">

                <div class="custom-file mt-2">
                    <label class="custom-file-label" for="avatar">Выберите файл...</label>
                    <input type="file" name="avatar" class="custom-file-input" id="avatar" value="123">
                </div>

            </div>
            <div class="col-9">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="font-italic">{{Auth::user()->name}} {{Auth::user()->surname}}</h4>
                    <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                </div>
                <div class="row">
                    <div class="col-2">
                        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" style="border-color:#ff6347;color:#ff6347">Сохранить</button>
                    </div>
                <div class="col-2">
                    <a href="{{route('home')}}" class="btn btn-outline-dark my-2 my-sm-0" type="submit" style="border-color:#ff6347;color:#ff6347">Отменить</a>
                </div>
                </div>
            </div>
         </div>
    </form>
</div>
@endsection

