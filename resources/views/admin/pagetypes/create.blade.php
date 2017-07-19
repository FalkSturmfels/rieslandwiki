@extends('layout')

@section('content')
    <div class="container-fluid">
        <h1>Seitenarten</h1>
    </div>

    <div class="verticalSpacer"></div>

    @include('partials.global.erros')

    <form class="form-horizontal" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        @include('admin.pagetypes.forminput', ["entity" => null])

    </form>


@endsection