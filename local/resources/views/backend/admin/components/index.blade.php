@extends('backend.admin.master')
@section('title-page')
    Quản Lý Components
@stop
@section('styles')
@stop
@section('scripts')
@stop
@section('container')
    <div class="col-lg-12 title-header">
        <div class="row">
            <div class="col-md-8">
                {{--<h2>Quản Lý Trang</h2>--}}
            </div>
            <div class="col-md-4 text-right">
                {{--@permission(('page-create'))--}}
                <a class="btn btn-success" href="{{ route('components.create') }}"> Tạo Mới Components</a>
                {{--@endpermission--}}
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    {{--{!! Form::open(array('route' => 'page.search','method'=>'POST','id'=>'formSearchPage')) !!}--}}
    {{--<div class="col-md-12">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-6">--}}
    {{--{!! Form::text('txtSearch',null, array('class' => 'form-control','id'=>'txtSearch')) !!}--}}
    {{--</div>--}}
    {{--<div class="col-md-6">--}}
    {{--{!! Form::button('Tìm Kiếm', array('id' => 'btnSearchPage','class'=>'btn btn-primary')) !!}--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--{!! Form::close() !!}--}}
    {{--@if(!empty($keywords))--}}
    {{--<div id="showKeySearch" class="col-md-12">--}}
    {{--<div class="row wrap-search">--}}
    {{--<i class="fa fa-caret-right" aria-hidden="true"></i>{{$keywords}} <a--}}
    {{--href="{{ route('page.search') }}">X</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--{{ Form::hidden('hdKeyword', $keywords) }}--}}
    {{--@endif--}}
    <div class="wrap-index">
        <div class="col-md-12">
            <table class="table">
                <tr>
                    <th>TT</th>
                    <th>Tên Components</th>
                    <th>Nội dung</th>
                    <th>Hình ảnh</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($components as $key => $data)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->image }}</td>
                        <td>
                            @permission(('page-edit'))
                            <a class="btn btn-primary" href="{{ route('components.edit',$data->id) }}">Cập Nhật</a>
                            @endpermission
                            @permission(('page-delete'))
                            {!! Form::open(['method' => 'DELETE','route' => ['components.destroy', $data->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                            @endpermission
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    {{--{!! $pages->links() !!}--}}
@stop