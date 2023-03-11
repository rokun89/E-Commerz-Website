    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

   


    <!-- Sidebar Start -->
    <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="{{route('base.url')}}" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Dashboard</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="https://themewagon.github.io/dashmin/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0" style="color:#dc3545">{{auth()->user()->name}}</h6>
                        
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{route('base.url')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

                    <div class="nav-item">
                        <a href="{{route('role.url')}}" class="nav-link"><i class="fas fa-users me-2"></i>role</a>
                    </div>

                    <a href="{{route('permission.url')}}" class="nav-item nav-link"><i class="fas fa-user-check"></i>Permission</a>

                    <a href="{{route('category.url')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Categories</a>

                    <a href="{{route('brand.url')}}" class="nav-item nav-link"><i class="fab fa-codepen me-2"></i>Brand</a>

                    <a href="{{route('product.url')}}" class="nav-item nav-link"><i class="fas fa-shopping-cart me-2"></i>Product</a>

                    <a href="{{route('order.url')}}" class="nav-link"><i class="far fa-file-alt me-2"></i>Order</a>

                    <a href="{{route('payment.url')}}" class="nav-item nav-link"><i class="fas fa-money-check-alt me-2"></i>Payments</a>

                    <a href="{{route('report.url')}}" class="nav-item nav-link"><i class="fas fa-sticky-note me-2"></i>Report</a>


                    <div class="nav-item">
                        
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->