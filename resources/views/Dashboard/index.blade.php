
@extends('Layouts.main')

@section('title')
    Dashboard
@endsection

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

      <section class="content">
            <div class="row" style="margin-left: 10px; margin-right: 10px; margin-top: 10px; margin-bottom: 0px">
                <div class="col-lg-4 col-xs-12" style="padding-bottom: 0px;">
                  <!-- small box -->
                  <div class="small-box bg-aqua">
                    <div class="inner">
                      <h3>{{$products_count}}</h3>

                      <p>Stock Device</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>

                <div class="col-lg-4 col-xs-12" style="padding-bottom: 0px;">
                  <!-- small box -->
                  <div class="small-box bg-green">
                    <div class="inner">
                      <h3>53<sup style="font-size: 20px">%</sup></h3>

                      <p>Bounce Rate</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>

                <div class="col-lg-4 col-xs-12" style="padding-bottom: 0px;">
                  <!-- small box -->
                  <div class="small-box bg-green">
                    <div class="inner">
                      <h3>53<sup style="font-size: 20px">%</sup></h3>

                      <p>Bounce Rate</p>
                    </div>
                    <div class="icon">
                      <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>
            </div>
      </section>

  </div>
  <!-- /.content-wrapper -->

@endsection
