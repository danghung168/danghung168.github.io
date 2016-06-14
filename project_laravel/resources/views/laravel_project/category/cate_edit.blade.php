@extends('laravel_project.index')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                     @include('laravel_project.blocks.error')
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{ route('admin.category.update', $data['id']) }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name = 'id' value="{{ $data['id'] }}">
                            <div class="form-group">
                                <label>Category Parent</label>
                                <select class="form-control">
                                        @foreach($parent as $key => $value)
                                    <option value="{{ $value['paren_id'] }}">{{ $value['name'] }}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Category Name</label>
                                <input class="form-control" name="txtCateName" placeholder="Please Enter Category Name" value="{!! old('txtCateName', isset($data) ? $data['name'] : null) !!}" />
                            </div>
                            <div class="form-group">
                                <label>Category Order</label>
                                <input class="form-control" name="txtOrder" placeholder="Please Enter Category Order" value="{!! old('txtOrder', isset($data) ? $data['order'] : null) !!}" />
                            </div>
                            <div class="form-group">
                                <label>Category Keywords</label>
                                <input class="form-control" name="txtKeywords" placeholder="Please Enter Category Keywords" value="{!! old('txtKeywords', isset($data) ? $data['keywords'] : null) !!}"/>
                            </div>
                            <div class="form-group">
                                <label>Category Description</label>
                                <textarea class="form-control" rows="3" name="txtDes">{!! old('txtDes', isset($data) ? $data['description'] : null) !!}</textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Category Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>

                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    @stop

