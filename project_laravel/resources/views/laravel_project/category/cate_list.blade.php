@extends('laravel_project.index')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>List</small>
                        </h1>
                    </div>
                    @if(Session::has('sesson_complet'))
                        <div class="col-sm-12 alert alert-success slide-up">
                            <p class="text-center">
                                {{ Session::get('sesson_complet') }}
                            </p>
                        </div>
                    @elseif(Session::has('sesson_update'))
                        <div class="col-sm-12 alert alert-success slide-up">
                            <p class="text-center">
                                {{ Session::get('sesson_update') }}
                            </p>
                        </div>
                    @elseif(Session::has('sesson_del'))
                        <div class="col-sm-12 alert alert-success slide-up">
                            <p class="text-center">
                                {{ Session::get('sesson_del') }}
                            </p>
                        </div>
                    @endif

                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Name</th>
                                <th>Category Parent</th>
                                <th>Order</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $Stt = 0 ?>
                        @foreach($data as $value)
                            <?php $Stt = $Stt + 1 ?>
                            <tr class="odd gradeX" align="center">
                                <td>{{ $Stt }}</td>
                                <td>{{ $value['name'] }}</td>
                                <td>
                                    @if($value['paren_id'] ==0)
                                        {!! 'None' !!}
                                    @else
                                        <?php
                                            $paren_id = $value['paren_id'];
                                            $parent_name = DB::table('categories')->where('id', $paren_id)->first();
                                            echo  $parent_name->name;
                                        ?>
                                    @endif
                                </td>
                                <td>{{ $value['order'] }}</td>
                                <td class="center">
                                    <form action="{{ route('admin.category.destroy', $value['id']) }}" method="POST">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name = 'id' value="{{ $value['id'] }}">
                                        <button type="submit" class="btn btn-danger btn-delete" onclick="return xacnhanxoa('Có chắc là xóa ko')"><i class="fa fa-pencil fa-fw "></i> Xoa</button>
                                    </form>
                                </td>
                                <td class="center">
                                    <button class="btn btn-success"><a href="{{ route('admin.category.edit', $value['id']) }}" style="color: white"><i class="fa fa-pencil fa-fw"></i>  Edit</a></button>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    @stop

