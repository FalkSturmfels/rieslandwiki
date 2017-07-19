@extends('layout')

@section('content')
    <div class="container-fluid">
        <h1>Seitenarten - Editieren</h1>
    </div>

    <div class="verticalSpacer"></div>

    @include('partials.global.erros')

    <form class="form-horizontal" method="post" action="{{action('PageTypesController@update', $pageType->id)}}">
        {{method_field('PATCH')}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        @include('admin.pagetypes.forminput', ["entity" => $pageType])

    </form>

@endsection