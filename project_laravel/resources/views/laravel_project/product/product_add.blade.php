@extends('laravel_project.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{!! route('admin.product.store') !!}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label>Category Parent</label>
                        <select class="form-control" name="txtParent">
                            <option value="">Xin chọn Category</option>
                            @foreach($parent as $value)
                                    <option value="{{ $value['id'] }}"> {{ "--".$value['name'] }} </option>
                                @endforeach
                            {{-- <?php print_r( $value['id'])  ?> --}}
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="txtName" placeholder="Please Enter Username" value="{{ old('txtName') }}" />
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input class="form-control" name="txtPrice" placeholder="Please Enter Password" value="{{ old('txtPrice') }} " />
                    </div>
                    <div class="form-group">
                        <label>Intro</label>
                        <textarea class="form-control" rows="3" name="txtIntro">{{ old('txtIntro') }}</textarea>
                        <script type="text/javascript"> ckeditor('txtIntro')  </script>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control" rows="3" name="txtContent">{{ old('txtContent') }}</textarea>
                        <script type="text/javascript"> ckeditor('txtContent')  </script>
                    </div>
                    <div class="form-group">
                        <label>Images</label>
                        <input type="file" name="fImages">
                    </div>
                    <div class="form-group">
                        <label>Product Keywords</label>
                        <input class="form-control" name="txtKeywords" placeholder="Please Enter Category Keywords" value="{{ old('txtOrder') }}" />
                    </div>
                    <div class="form-group">
                        <label>Product Description</label>
                        <textarea class="form-control" rows="3" name="txtDes">{{ old('txtDes') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Product Add</button>
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
