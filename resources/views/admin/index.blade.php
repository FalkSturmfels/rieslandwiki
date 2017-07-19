@extends('layout')

@section('content')
    <div class="container-fluid">
        <h1>Adminbereich</h1>
    </div>

    <div class="verticalSpacer"></div>

    <div class="row">
        <div class="col-sm-2">
            <li class="list-group-item">
                <a href="{{action('PageTypeController@index')}}">
                    Seitenarten
                </a>
            </li>
        </div>
    </div>
@endsection