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
                                <th>Mapel</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rombels as $r)
                            <tr>
                                <td>{{$r->first_name}} {{$r->last_name}}</td>
                                <td>
                                    <ul>
                                        @foreach ($r->mapel as $item)
                                            <li>{{$item->nama_mapel}}</li>
                                        @endforeach
                                    </ul>
                                </td>
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
