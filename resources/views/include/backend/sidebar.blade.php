<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
      <div class="logo-icon">
        <img src="{{ ('backend/assets/images/logo-icon.png') }}" class="logo-img" alt="">
      </div>
      <div class="logo-name flex-grow-1">
        <h5 class="mb-0">Point Of Sales</h5>
      </div>
      <div class="sidebar-close">
        <span class="material-icons-outlined">close</span>
      </div>
    </div>
    <div class="sidebar-nav">
        <!--navigation-->
        <ul class="metismenu" id="sidenav">
          <li>
            {{-- <a href="javascript:;">
              <div class="parent-icon"><i class="material-icons-outlined">home</i>
              </div>
              <div class="menu-title">Home</div>
            </a> --}}
            <li>
              <a href="{{ route('home') }}">
                <div class="parent-icon"><i class="material-icons-outlined">person</i>
                </div>
                <div class="menu-title">Admin</div>
              </a>
              <ul>
                {{-- <li><a href="{{ route()}}"><i class="material-icons-outlined">arrow_right</i>Admin Page</a>
                </li> --}}
                <li><a href="{{ route('recap.index') }}"><i class="material-icons-outlined">arrow_right</i>Recap</a>
                </li>
                <li><a href="{{ route('cashier.index') }}"><i class="material-icons-outlined">arrow_right</i>Add Cashier</a>
                </li>
                <li><a href="{{ route('product.index') }}"><i class="material-icons-outlined">arrow_right</i>Add Product</a>
                </li>
                <li><a href="{{ route('category.index')}}"><i class="material-icons-outlined">arrow_right</i>Add Category</a>
                </li>
                {{-- <li><a href="ecommerce-order-details.html"><i class="material-icons-outlined">arrow_right</i>Order Details</a>
                </li> --}}
              </ul>
            </li>
            </li>
            <li>
                <a href="javascript:;">
                  <div class="parent-icon"><i class="material-icons-outlined">card_giftcard</i>
                  </div>
                  <div class="menu-title">Cashier Page</div>
                </a>
                <ul>
                  <li><a href="{{ route('cashier.create') }}"><i class="material-icons-outlined">arrow_right</i>Cashier</a>
                  </li>
                  {{-- <li><a href="{{ route('recap.create') }}"><i class="material-icons-outlined">arrow_right</i>Customers</a>
                  </li> --}}
                  {{-- <li><a href="ecommerce-customer-details.html"><i class="material-icons-outlined">arrow_right</i>Customer Details</a>
                  </li>
                  <li><a href="ecommerce-orders.html"><i class="material-icons-outlined">arrow_right</i>Orders</a>
                  </li>
                  <li><a href="ecommerce-order-details.html"><i class="material-icons-outlined">arrow_right</i>Order Details</a>
                  </li> --}}
                </ul>
              </li>
              </li>
          <li>
            <a  href="javascript:;">
              <div class="parent-icon"><i class="material-icons-outlined">shopping_bag</i>
              </div>
              <div class="menu-title">User Page</div>
            </a>
            <ul>
              <li><a href="{{ route('booking.index') }}"><i class="material-icons-outlined">arrow_right</i>Order</a>
              </li>
              <li><a href="{{ route('payment.index') }}"><i class="material-icons-outlined">arrow_right</i>Payment</a>
              </li>
              {{-- <li><a href="ecommerce-customers.html"><i class="material-icons-outlined">arrow_right</i>Customers</a>
              </li>
              <li><a href="ecommerce-customer-details.html"><i class="material-icons-outlined">arrow_right</i>Customer Details</a>
              </li>
              <li><a href="ecommerce-orders.html"><i class="material-icons-outlined">arrow_right</i>Orders</a>
              </li>
              <li><a href="ecommerce-order-details.html"><i class="material-icons-outlined">arrow_right</i>Order Details</a>
              </li> --}}
            </ul>
          </li>

           <!--end navigation-->
    </div>
  </aside>
