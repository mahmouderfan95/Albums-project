@extends('backend.layouts.app')
@section('title','Images')
@section('main-title','Images')
@section('sub-title','All Images')
@section('table')
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">All Images</div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example2" class="hover table-bordered border-top-0 border-bottom-0" >
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Album name</th>
                            <th>created</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($images as $image)
                            <tr>
                                <td> {{ $image->name }}</td>
                                <td><img width="100" src="{{asset('uploads/images/' . $image->image)}}"></td>
                                <td>
                                    {{$image->album->name}}
                                </td>
                                <td>
                                    {{$image->created_at}}
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
