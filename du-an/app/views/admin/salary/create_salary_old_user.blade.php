@extends('admin.layout.default')
@section('title')
    {{ $title='Đề xuất lương cá nhân' }}
@stop
@section('content')
    <div class="row margin-bottom">
        <div class="col-xs-12">
            <a href="{{ action('SalaryUserController@index') }}" class="btn btn-success">Danh sách lương</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                {{ Form::open(array('action' => 'SalaryUserController@store')) }}
                <div class="box-body">
                    <div class="form-group">
                        <label>Tên nhân viên</label>
                        <div class="row">
                            <div class="col-sm-6">
                                {{ Form::text('username', null, array('class' => 'form-control', 'id' => 'user_salary')) }}
                                <a href="#" class="btn btn-default room" id="room" onclick="getDep()">Phòng ban-chức vụ</a>
                            </div>
                        </div>
                    </div>
                     <div id = "assignBox">
                    
                </div>

                <div class="form-group">
                    <label>Mức lương nhân viên</label>
                    <div class="row">
                        <div class="col-sm-6">
                            {{ Form::text('salary', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                </div>

                <div class="" style="width: 150px; display:inline-block;">
                    <label>Ngày bắt đầu</label>
                    <input type="text" name="start" class="form-control" id="datepickerStartdate" placeholder="Từ ngày" />
                </div>

                </div>

               
                <div class="box-footer">
                    {{ Form::submit('Lưu lại', array('class' => 'btn btn-primary')) }}
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@include('admin.salary.script')
@include('admin.salary.style')
@stop
