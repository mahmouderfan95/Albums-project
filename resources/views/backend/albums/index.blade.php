@extends('backend.layouts.app')
@section('title','Albums')
@section('main-title','Albums')
@section('sub-title','Albums All')
@section('table')
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">All Albums</div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="hover table-bordered border-top-0 border-bottom-0" >
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Number of images</th>
                            <th>Actions</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($albums as $album)
                            <tr>
                                <td> {{ $album->name }}</td>
                                <td> {{ $album->images->count() ?? 0 }}</td>
                                <td>
                                    <a  class="btn btn-success" href="{{route('albums.edit',[$album->id])}}">Edit</a>
                                    @if($album->images->count() > 0)
                                        <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                                Delete
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">The album is not empty</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form style="display: inline-block" action="{{route('album.delete.images',$album->id)}}" method="POST">
                                                                @method('delete')
                                                                @csrf
                                                                <button class="btn btn-danger" type="submit">Delete All Image</button>
                                                            </form>
                                                            <form style="display: inline-block" action="{{route('albums.move.images',$album->id)}}" method="POST">
                                                                @csrf
                                                                <button type="submit" class="btn btn-info">Move</button>
                                                            </form>
                                                        </div>
{{--                                                        <div class="modal-footer">--}}
{{--                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                                                            <button type="button" class="btn btn-primary">Save changes</button>--}}
{{--                                                        </div>--}}
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            <form style="display: inline-block" action="{{route('albums.destroy','test')}}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <input type="hidden" name="id" value="{{$album->id}}">
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        @endif
                                    <a  class="btn btn-info" href="{{route('album.create.images',$album->id)}}">create images</a>
                                    <a  class="btn btn-info" href="{{route('album.show.images',$album->id)}}">show images</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

@stop
