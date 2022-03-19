@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Jurusan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $s)
                            <tr>
                                <td>{{$s->first_name}} {{$s->last_name}}</td>
                                <td>{{$s->jurusan->name}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
