@extends('layout')

@section('content')
    <div class="container-fluid">
        <h1>Seiten</h1>
    </div>

    <div class="verticalSpacer"></div>

    <div class="row">
        <div class="col-sm-1">
            <h4><a href={{action('PageController@create')}}><i class="fa fa-plus" aria-hidden="true"></i> Neu</a>
            </h4>
        </div>
        <div class="col-sm-4">

            <div class="jumbotron">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Überschrift</th>
                        <th>Unter-Überschrift</th>
                        <th></th>
                    </tr>
                    </thead>
                    {{--<tbody>
                    @foreach($pageTypes as $pageType)
                        <tr>
                            <td>{{$pageType->displayName}}</td>
                            <td>{{$pageType->type}}</td>
                            <td>
                                <h4>
                                    <a href={{action('PageTypeController@edit', $pageType->id)}}><i
                                                class="fa fa-pencil" aria-hidden="true"></i></a>
                                </h4>
                            </td>
                            <td>
                                <h4>
                                    <a data-toggle="modal" href="#removeDialog"
                                       data-backdrop="static" data-entity="{{$pageType}}">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>
                                </h4>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>--}}
                </table>
            </div>
        </div>
    </div>

    {{--@include('partials.dialogs.removedialog',
    ['entityUrl' => '/admin/pagetypes/',
     'entityType' => 'die Seitenart',
     'entityProperty' => 'displayName',
     ])--}}
@endsection