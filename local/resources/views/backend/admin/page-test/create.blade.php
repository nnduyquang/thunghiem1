@extends('backend.admin.master')
@section('title-page')
    Tạo Mới Trang
@stop
@section('styles')
@stop
@section('scripts')
@stop
@section('container')
    <div class="col-lg-12 title-header">
        <div class="row">
            <div class="col-md-8">
                <h2>Tạo Mới Trang</h2>
            </div>
            <div class="col-md-4 text-right">
                <a class="btn btn-primary" href="{{ route('page-test.index') }}"> Back</a>
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

    <div class="col-md-12">
        <div class="wrap-create-edit">
            {!! Form::hidden('post_type', IS_PAGE) !!}
            <strong class="text-title-left">Tên Trang:</strong>
            <div class="form-group">
                {!! Form::text('title',null, array('placeholder' => 'Tên','class' => 'form-control')) !!}
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="wrap-create-edit">
            <strong class="text-title-left">Chọn layout</strong>
            <div class="wrap-choose">
                <div class="one-panel">
                    {{ Form::radio('page-style', 'buy' , true) }}
                    {{ Html::image('images/backend/layout/smartlinks_1.png','',array('class'=>'')) }}
                </div>
                <div class="one-panel">
                    {{ Form::radio('page-style', 'buy' , false) }}
                    {{ Html::image('images/backend/layout/smartlinks_2.png','',array('class'=>'')) }}
                </div>
                <div class="one-panel">
                    {{ Form::radio('page-style', 'buy' , false) }}
                    {{ Html::image('images/backend/layout/smartlinks_3.png','',array('class'=>'')) }}
                </div>
                <div class="one-panel">
                    {{ Form::radio('page-style', 'buy' , false) }}
                    {{ Html::image('images/backend/layout/smartlinks_3.png','',array('class'=>'')) }}
                </div>
                <div class="one-panel">
                    {{ Form::radio('page-style', 'buy' , false) }}
                    {{ Html::image('images/backend/layout/smartlinks_3.png','',array('class'=>'')) }}
                </div>
            </div>
        </div>
        <div class="wrap-create-edit">
            <strong class="text-title-left">Cấu hình trang</strong>
            <div class="row">
                <div class="col-md-9">
                    <div class="config-page">
                        <div class="one-component">
                            <select name="choose-type-component" class="form-control select-type">
                                <option value="">--- Loại component ---</option>
                                {{--<option value="1" {{ old('designation') == $key ? 'selected' : ''}}>{{ $value }}</option>--}}
                                <option value="1">Tin Tức</option>
                                <option value="2">Sản phẩm</option>
                                <option value="2">Hình ảnh</option>
                            </select>
                            <p>Chọn style</p>
                            <div class="choose-style-component">
                                <div class="one-style">
                                    {{ Form::radio('component-style', 'buy' , true) }}
                                    {{ Html::image('images/backend/layout/smartlinks_1.png','',array('class'=>'')) }}
                                </div>
                                <div class="one-style">
                                    {{ Form::radio('component-style', 'buy' , false) }}
                                    {{ Html::image('images/backend/layout/smartlinks_2.png','',array('class'=>'')) }}
                                </div>
                                <div class="one-style">
                                    {{ Form::radio('component-style', 'buy' , false) }}
                                    {{ Html::image('images/backend/layout/smartlinks_3.png','',array('class'=>'')) }}
                                </div>
                                <div class="one-style">
                                    {{ Form::radio('component-style', 'buy' , false) }}
                                    {{ Html::image('images/backend/layout/smartlinks_3.png','',array('class'=>'')) }}
                                </div>
                                <div class="one-style">
                                    {{ Form::radio('component-style', 'buy' , false) }}
                                    {{ Html::image('images/backend/layout/smartlinks_3.png','',array('class'=>'')) }}
                                </div>
                            </div>
                            <p>Sắp xếp</p>
                            <select name="choose-sort" class="form-control select-type">
                                <option value="">--- Chọn ---</option>
                                {{--<option value="1" {{ old('designation') == $key ? 'selected' : ''}}>{{ $value }}</option>--}}
                                <option value="1">Mới Nhất</option>
                                <option value="2">Hot Nhất</option>
                            </select>
                            <button class="remove-component">Loại bỏ</button>
                        </div>
                        <div class="col-md-12 text-center p-0">
                            <a href="#" class="add-component">+</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">b</div>
            </div>
        </div>
    </div>


@stop