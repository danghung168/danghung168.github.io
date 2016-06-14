@extends('laravel_project.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Category
                        <small>Add</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @include('laravel_project.blocks.error')
                    <form action="{!! route('admin.category.store') !!}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label>Category Parent</label>
                            <select class="form-control" name="txtParent">
                                <option value="0">Xin chọn Category</option>
                                @foreach($parent as $value)
                                    <option value="{{ $value['id'] }}">{{ "--".$value['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">

                            <label>Category Name</label>
                            <input type="text" class="form-control" name="txtCateName"
                                   placeholder="Xin nhập Category vào" value="{{ old('txtCateName') }}" />
                        </div>
                        <div class="form-group">
                            <label>Category Order</label>
                            <input type="text" class="form-control" name="txtOrder"
                                   placeholder="Xin nhập Category Order vào" value="{{ old('txtOrder') }}" />
                        </div>
                        <div class="form-group">
                            <label>Category Keywords</label>
                            <input type="text" class="form-control" name="txtKeywords"
                                   placeholder="Xin nhập Category Keywords" value="{{ old('txtOrder') }}" />
                        </div>
                        <div class="form-group">
                            <label>Category Description</label>
                            <textarea class="form-control" rows="3" name="txtDes">{{ old('txtDes') }}</textarea>
                            <script type="text/javascript"> ckeditor('txtDes')  </script>
                        </div>
                        <button type="submit" class="btn btn-success">Category Add</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

@stop
