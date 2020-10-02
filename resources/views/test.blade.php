@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>#</th>
            <th>NAME</th>
            <th>SURNAME</th>
            <th>PHONE</th>
            <th>EMAIL</th>
        </tr>
        </thead>
        <tbody>
            @foreach($testDB as $item)
                <tr>
                    <td> {{$item->id}}      </td>
                    <td> {{$item->name}}    </td>
                    <td> {{$item->surname}} </td>
                    <td> {{$item->phone}}   </td>
                    <td> {{$item->email}}   </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="container">
    @if($testDB->total() > $testDB->count())
        <br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                {{ $testDB->links() }}
            </div>
        </div>
    @endif
</div>
@endsection
