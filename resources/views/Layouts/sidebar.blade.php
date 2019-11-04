 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="{{route('index')}}">
              <i class="fa fa-dashboard"></i> <span> Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Devicess</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('product')}}"><i class="fa fa-circle-o"></i> Add Device</a></li>
              <li><a href="{{url('fuel')}}"><i class="fa fa-circle-o"></i> Add Fuel</a></li>


          </ul>
        </li>

        <li>
          <a href="{{url('price')}}">
              <i class="fa fa-th"></i> <span> Set Price</span>
              {{--<span class="pull-right-container">--}}
                  {{--<small class="label pull-right bg-green">Email</small>--}}
              {{--</span>--}}
          </a>
        </li>

   
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
