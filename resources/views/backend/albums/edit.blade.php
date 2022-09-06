@extends('backend.layouts.app')
@section('title','edit album')
@section('main-title','edit album')
@section('sub-title','edit album')
@section('table')
    <div class="col-xl-12">
        <div class="card m-b-20">
            <div class="card-header">
                <h3 class="card-title">Edit Album</h3>
            </div>
            <div class="card-body mb-0">
                <form method="post" action="{{ route('albums.update','test') }}" enctype="multipart/form-data" class="form-horizontal" >
                    @method('put')
                    @csrf
                    <input type="hidden" name="id" value="{{$album->id}}">
                    <div class="form-group ">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label" >Album Name</label>
                            </div>
                            <div class="col-md-9">
                                <input value="{{$album->name}}" required="required" type="text" class="form-control" name="name"  placeholder="Enter Album Name">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0 row justify-content-end">
                        <div class="col-md-9 float-right">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@stop
