@extends('site.default-layout')

@section('title', 'Manage Genres')
@section('description', 'Manage the event genres for the Cultural Institution.')

@section('default-content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manage Genres</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            @if (count($genres) === 0)
            <p>
                There are no genres, yet.<br />
                <br />
                <a href="genres/create" class="btn btn-success">Create Genre<a/>
            </p>
            @else
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            @foreach ($genres as $genre)
                                <tr>
                                    <td id="g{{ $genre->id }}" width="100%">{{{ $genre->name }}}</td>
                                    <td><a href="genres/edit/{{ $genre->id }}" class="table-control" title="Edit genre &quot;{{{ $genre->name }}}&quot;"><span class="fa fa-pencil fa-fw"></span></a></td>
                                    <td><a href="genres/delete/{{ $genre->id }}" class="table-control" title="Delete genre &quot;{{{ $genre->name }}}&quot;"><span class="fa fa-trash fa-fw"></span></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <a href="genres/create" class="btn btn-success pull-right">Create Genre<a/>
            @endif
        </div>
    </div>
@stop
