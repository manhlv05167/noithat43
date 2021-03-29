<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">


      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="{{route('dashboard')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <span>Img Product</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('list.imgpro')}}"><i class="fa fa-circle-o"></i>List Img Product</a></li>
            <li><a href="{{route('add.imgpro')}}"><i class="fa fa-circle-o"></i>Add Img Product</a></li>
            <li><a href="{{route('edit.imgpro')}}"><i class="fa fa-circle-o"></i>Edit Img Product</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <span>Size</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('list.size')}}"><i class="fa fa-circle-o"></i>List Size</a></li>
            <li><a href="{{route('add.size')}}"><i class="fa fa-circle-o"></i>Add Size</a></li>
            <li><a href="{{route('edit.size')}}"><i class="fa fa-circle-o"></i>Edit Size</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <span>Type</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('list.type')}}"><i class="fa fa-circle-o"></i>List Type</a></li>
            <li><a href="{{route('add.type')}}"><i class="fa fa-circle-o"></i>Add Type</a></li>
            <li><a href="{{route('edit.type')}}"><i class="fa fa-circle-o"></i>Edit Type</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <span>Slideshow</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('list.slide')}}"><i class="fa fa-circle-o"></i>List Slideshow</a></li>
            <li><a href="{{route('add.slide')}}"><i class="fa fa-circle-o"></i>Add Slideshow</a></li>
            <li><a href="{{route('edit.slide')}}"><i class="fa fa-circle-o"></i>Edit Slideshow</a></li>
          </ul>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>