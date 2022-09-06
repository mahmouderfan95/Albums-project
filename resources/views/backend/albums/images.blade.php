@extends('backend.layouts.app')
@section('title','Create images')
@section('main-title','create Images')
@section('sub-title','create Images')
@section('table')
    <div class="col-xl-12">
        <div class="card m-b-20">
            <div class="card-header">
                <h3 class="card-title">Create Images</h3>
            </div>
            <div class="card-body mb-0">
                <form method="post" action="{{route('album.store.images')}}" enctype="multipart/form-data" class="form-horizontal" >
                    @csrf
                    <input id="album_id" type="hidden" name="album_id" value="{{$album->id}}">
                    <div class="form-group ">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="form-label" >Images</label>
                            </div>
                            <div class="col-md-9">
                                <div id="dpz-multiple-files" class="dropzone dropzone-area">
                                    <div class="dz-message">You can upload more than one picture</div>
                                </div>
                                <br><br>
                                @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0 row justify-content-end">
                        <div class="col-md-9 float-right">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
