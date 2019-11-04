
@extends('Layouts.main')

@section('title')
    Dashboard
@endsection

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-8">

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Device List</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Device Name</th>
                                        <th>IMEI</th>
                                        <th>MAC</th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                </thead>

                                <tbody>

                                    @foreach($product_list as $value)
                                        <tr>
                                            <td>{{$value -> name}}</td>
                                            <td>{{$value -> imei}}</td>
                                            <td>{{$value -> mac}}</td>
                                            <td>
                                                <a href="/product/{{$value->id}}/edit" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                                            </td>
                                            <td>
                                                {!!Form::open(['action' => ['ProductsController@destroy', $value->id], 'method' => 'POST', 'onsubmit'=>"if(!confirm('Are You Sure want to DELETE??')){return false;}"])!!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                <button type="submit" class="btn btn-sm btn-danger" > <i class="fa fa-trash"></i></button>
                                                {!!Form::close()!!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>

                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-4">
                    @include('messages')
                     <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Store Device </h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form class="form-horizontal" action="{{route('product.store')}}" method="post">
                                @csrf
                                <div class="box-body">

                                    <div class="form-group">
                                        <label for="d_name" class="col-sm-4 control-label">Device Name</label>

                                        <div class="col-sm-8">

                                            <select class="form-control" id="name" name="name">
                                                <option value="TK103" selected>TK103</option>
                                                <option value="VT600">VT600</option>
                                                <option value="VT202">VT202</option>
                                                <option value="OBD2">OBD2</option>
                                                <option value="WETRACK2">WETRACK2</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="imei" class="col-sm-4 control-label">IMEI</label>

                                        <div class="col-sm-8">
                                            <input type="text"  class="form-control" id="imei" name="imei"/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="mac" class="col-sm-4 control-label">MAC</label>

                                        <div class="col-sm-8">
                                            <input type="text"  class="form-control" id="mac" name="mac"/>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-sm btn-info pull-right">Store</button>
                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div>
                        <!-- /.box-body -->
                     </div>


                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->

    </div>
    <!-- /.content-wrapper -->



@endsection
