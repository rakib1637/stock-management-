
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
                            <h3 class="box-title">Price List</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Device Name</th>
                                    <th>Price</th>
                                    <th>Erase</th>

                                </tr>
                                </thead>

                                <tbody>

                                @foreach($price as $value)
                                    <tr>
                                        <td>{{$value -> device_name}}</td>
                                        <td>{{$value -> price}}</td>
                                        <td>
                                            {{--<form action="{{route('price.destroy')}}" method="delete">--}}
                                                {{--<input type="hidden" name="">--}}
                                            {{--</form>--}}

                                            {!!Form::open(['action' => ['PriceController@destroy', $value->id], 'method' => 'POST', 'onsubmit'=>"if(!confirm('Are You Sure want to DELETE??')){return false;}"])!!}
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
                            <form class="form-horizontal" action="{{route('price.store')}}" method="post">
                                @csrf
                                <div class="box-body">

                                    <div class="form-group">
                                        <label for="d_name" class="col-sm-4 control-label">Device Name</label>

                                        <div class="col-sm-8">

                                            <select class="form-control" id="device_name" name="device_name">
                                                <option value="TK103" selected>TK103</option>
                                                <option value="VT600">VT600</option>
                                                <option value="VT202">VT202</option>
                                                <option value="OBD2">OBD2</option>
                                                <option value="WETRACK2">WETRACK2</option>
                                                <option value="FUEL_SENSOR_VT">FUEL SENSOR (VT)</option>
                                                <option value="FUEL_SENSOR_TK">FUEL SENSOR (TK)</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="price" class="col-sm-4 control-label">Price</label>

                                        <div class="col-sm-8">
                                            <input type="text"  class="form-control" id="price" name="price"/>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-sm btn-success pull-right">Save</button>
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
