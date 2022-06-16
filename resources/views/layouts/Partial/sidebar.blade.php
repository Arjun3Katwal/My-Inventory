<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">

      <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name ?? ''}}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Starter Pages
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('viewCategory')}}" class="nav-link">
                <i class="fa fa-list nav-icon"></i>
                <p>Category</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{('viewBrand')}}" class="nav-link">
                <i class="fab fa-bandcamp"></i>
                <p>Brand</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('viewSize')}}" class="nav-link">
                <i class="fab fa-bandcamp"></i>
                <p>Size</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('viewProduct')}}" class="nav-link">
                <i class="fa fa-cube"></i>
                <p>Products</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('viewStock')}}" class="nav-link">
                <i class="fa fa-cart-plus"></i>
                <p>Stock</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{route('history')}}" class="nav-link">
                <i class="fas fa-folder"></i>
                <p>Stock History</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
             <i class="fas fa-user-friends"></i>
                <p>
                  Employees
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('createEmployee')}}" class="nav-link">
                  <i class="fas fa-user-plus"></i>
                    <p>Add Employees</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('viewEmployee')}}" class="nav-link">
                  <i class="fas fa-street-view"></i>
                    <p>All Employees</p>
                  </a>
                </li>

              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="fas fa-user-friends"></i>
                <p>
                  Customer
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('createCustomer')}}" class="nav-link">
                  <i class="fas fa-user-plus"></i>
                    <p>Add Customer</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('viewCustomer')}}" class="nav-link">
                  <i class="fas fa-street-view"></i>
                    <p>All Customer</p>
                  </a>
                </li>

              </ul>
            </li>

            
            <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="fas fa-user-friends"></i>
                <p>
                  Supplier
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('createSupplier')}}" class="nav-link">
                  <i class="fas fa-user-plus"></i>
                    <p>Add Supplier</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('viewSupplier')}}" class="nav-link">
                  <i class="fas fa-street-view"></i>
                    <p>All Supplier</p>
                  </a>
                </li>

              </ul>
            </li>


            <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="fas fa-money-bill-alt"></i>
                <p>
                  Salary
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('createSalary')}}" class="nav-link">
                  <i class="fas fa-money-bill-alt"></i>
                    <p>Add Salary</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('viewSalary')}}" class="nav-link">
                  <i class="fas fa-money-bill-alt"></i>
                    <p>All Salary</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('paySalary')}}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Pay Salary</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Last Month Salary</p>
                  </a>
                </li>

              </ul>
            </li>

            
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>