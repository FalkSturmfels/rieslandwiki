@extends('layout')

@section('content')
    <div class="container-fluid">
        <h1>Seitenarten</h1>
    </div>

    <div class="verticalSpacer"></div>

    <div class="row">
        <div class="col-sm-1">
            <h4><a href={{action('PageTypesController@create')}}><i class="fa fa-plus" aria-hidden="true"></i> Neu</a>
            </h4>
        </div>
        <div class="col-sm-4">

            <div class="jumbotron">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Anzeigename</th>
                        <th>Type</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pageTypes as $pageType)
                        <tr>
                            <td>{{$pageType->displayName}}</td>
                            <td>{{$pageType->type}}</td>
                            <td>
                                <h4>
                                    <a href={{action('PageTypesController@edit', $pageType->id)}}><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                </h4>
                            </td>
                            <td>
                                <h4>
                                    <a href={{url('/')}}><i class="fa fa-times" aria-hidden="true"></i></a>
                                </h4>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection