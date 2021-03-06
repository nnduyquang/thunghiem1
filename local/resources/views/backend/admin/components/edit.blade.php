@extends('backend.admin.master')
@section('title-page')
    Cập Nhật Component
@stop
@section('styles')
@stop
@section('scripts')
@stop
@section('container')
    <div class="col-lg-12 title-header">
        <div class="row">
            <div class="col-md-8">
                <h2>Cập Nhật Component</h2>
            </div>
            <div class="col-md-4 text-right">
                <a class="btn btn-primary" href="{{ route('components.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Úi!</strong> Hình Như Có Gì Đó Sai Sai.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::model($component,array('route' => ['components.update',$component->id],'method'=>'PATCH')) !!}
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wrap-create-edit">
                            <strong class="text-title-left">Tên File Component:</strong>
                            <div class="form-group">
                                {!! Form::text('name',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="wrap-create-edit">
                            <strong class="text-title-left">Nội dung</strong>
                            <div class="form-group">
                                {!! Form::text('title',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="wrap-create-edit">
                            <strong class="text-title-right">Hình Đại Diện</strong>
                            <div class="form-group">
                                {!! Form::text('image', null, array('class' => 'form-control','id'=>'pathImagePost')) !!}
                                <br>
                                {!! Form::button('Tìm', array('id' => 'btnBrowseImagePost','class'=>'btn btn-primary')) !!}
                            </div>
                            <div class="form-group">
                                {{ Html::image('','',array('id'=>'showHinhPost','class'=>'show-image'))}}
                            </div>
                        </div>
                        <div class="wrap-create-edit">
                            {{ Form::checkbox('has_static_text',null,$component->has_static_text==0?false:true, array('class'=>'')) }} Có text tĩnh không?
                        </div>
                        <div class="text-info wrap-create-edit" style="display: {{$component->has_static_text==0?'none':'block'}}">
                            <div class="wrap-text">
                                <div class="one-text">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <strong class="text-title-left">Variable</strong>

                                                {!! Form::text('variable[]', null, array('class' => 'form-control','id'=>'')) !!}
                                                <strong class="text-title-left">Giá trị</strong>

                                                {!! Form::textarea('text[]',null,array('placeholder' => '','id'=>'','class' => 'form-control','rows'=>'3','style'=>'resize:none')) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-2 d-flex justify-content-center align-items-center">
                                            <button type="button" class="remove-text">X</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-more">
                                <button class="add-more-text" type="button">Thêm text</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-12" style="text-align:  center;">
            <button id="btnDanhMuc" type="submit" class="btn btn-primary">Cập Nhật Component</button>
        </div>
    {!! Form::close() !!}

@stop