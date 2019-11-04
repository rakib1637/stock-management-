
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
                            <table id="example3" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>With</th>
                                    <th>Serial</th>

                                </tr>
                                </thead>

                                <tbody>

                                @foreach($fuel_device_list as $value)
                                    <tr>
                                        <td>{{$value -> type}}</td>
                                        <td>{{$value -> with}}</td>
                                        <td>{{$value -> serial}}</td>

                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>


                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-4">
                    @include('messages')
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Device List</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <form class="form-horizontal">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="f_name" class="col-sm-4 control-label">Choose Name</label>

                                        <div class="col-sm-8">

                                            <select class="form-control" name="f_name">
                                                <option value="PIPE" selected>PIPE</option>
                                                <option value="SENSOR">SENSOR</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="f_for" class="col-sm-4 control-label">FUEL For</label>

                                        <div class="col-sm-8">

                                            <select class="form-control" id="f_for" name="f_for">
                                                <option value="TK103" selected>TK103</option>
                                                <option value="VT600">VT600</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="f_serial" class="col-sm-4 control-label">Serial No.</label>

                                        <div class="col-sm-8">
                                            <input type="text"  class="form-control" id="f_serial" name="f_serial"/>
                                        </div>
                                    </div>

                                    {{--<div class="form-group">--}}
                                    {{--<label for="d_mac" class="col-sm-4 control-label">MAC</label>--}}

                                    {{--<div class="col-sm-8">--}}
                                    {{--<input type="text"  class="form-control" id="d_mac" name="d_mac"/>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}

                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-sm btn-info pull-right">Store</button>
                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div>
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
