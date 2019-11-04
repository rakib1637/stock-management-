
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
                <div class="col-md-6">


                    @include('messages')
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Store Device </h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            {!! Form::open(['action' => ['ProductsController@update', $products->id], 'method' => 'POST']) !!}
                            <div class="form-group">
                                {{Form::label('name', 'Name')}}
                                {{Form::text('name', $products->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('body', 'IMEI')}}
                                {{Form::text('imei', $products->imei, ['id' => 'imei', 'class' => 'form-control', 'placeholder' => 'IMEI'])}}
                            </div>
                            <div class="form-group">
                                {{Form::label('mac', 'MAC')}}
                                {{Form::text('mac', $products->mac, ['id' => 'mac', 'class' => 'form-control', 'placeholder' => 'MAC'])}}
                            </div>

                            {{Form::hidden('_method','PUT')}}
                            {{Form::submit('Update', ['class'=>'btn btn-primary'])}}
                            {!! Form::close() !!}
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
