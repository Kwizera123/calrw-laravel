
<div class="vertical-menu">

  <div data-simplebar class="h-100">

      <!-- User details -->


      <!--- Sidemenu -->
      <div id="sidebar-menu">
          <!-- Left Menu Start -->
          <ul class="metismenu list-unstyled" id="side-menu">
              <li class="menu-title">Menu</li>

              <li>
                  <a href="{{ url('/dashboard')}}" class="waves-effect">
                    @php
                    $id = Auth::user()->id;
                    $adminData = App\Models\User::find($id);
                    @endphp
                      <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">{{ $id++}}</span>
                      
                      
                      <span>Dashboard</span>
                  </a>
              </li>

              <li>
                  <a href="javascript: void(0);" class="has-arrow waves-effect">
                      <i class="ri-mail-send-line"></i>
                      <span>Home Slider Setup</span>
                  </a>
                  <ul class="sub-menu" aria-expanded="false">
                      
                      <li><a href="{{ route('allhome.slide')}}">All Home Slider</a></li>
                      
                  </ul>
              </li>

              <li>
                  <a href="javascript: void(0);" class="has-arrow waves-effect">
                      <i class="ri-layout-3-line"></i>
                      <span>All About Us</span>
                  </a>

                  <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{ route('about.page')}}">About us</a></li>
                    <li><a href="{{ route('about.chooseus')}}">Why Choose Us</a></li>
                    <li><a href="{{ route('allourteam.page')}}">Add New OurTeam</a></li>
                    <li><a href="{{ route('ourteam.about.page')}}">All OurTeam View</a></li>
                </ul>
    
              </li>

              {{-- <li class="menu-title">Pages</li> --}}

              <li>
                  <a href="javascript: void(0);" class="has-arrow waves-effect">
                      <i class="ri-account-circle-line"></i>
                      <span>Services</span>
                  </a>
                  <ul class="sub-menu" aria-expanded="false">
                      <li><a href="{{  route('header.service.page') }}">Header Service</a></li>
                      <li><a href="{{  route('our.service.page') }}">Our Service</a></li>
                  </ul>
              </li>

              <li>
                  <a href="javascript: void(0);" class="has-arrow waves-effect">
                      <i class="ri-profile-line"></i>
                      <span>Contact Message</span>
                  </a>
                  <ul class="sub-menu" aria-expanded="false">
                      <li><a href="{{  route('contact.message') }}">Contact Message</a></li>
                      <li><a href="{{  route('contact.detail') }}">Contact Address</a></li>
                  </ul>
              </li> 

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-profile-line"></i>
                    <span>Approach Setup</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{  route('all.approach') }}">All Approach Data</a></li>
                    <li><a href="{{  route('all.stages') }}">Stage One Data</a></li>
                    <li><a href="{{  route('stages.two') }}">Stage Two Data</a></li>
                    <li><a href="{{ route('stages.three') }}">Stage Three Data</a></li>
                </ul>
            </li>

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-profile-line"></i>
                    <span>Header Page Setup</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{  route('header.setup') }}">Header Setup</a></li>
                  
                </ul>
            </li> 

              <li>
                <a href="javascript: void(0);" class="has-arrow waves-effect">
                    <i class="ri-profile-line"></i>
                    <span>Footer Page Setup</span>
                </a>
                <ul class="sub-menu" aria-expanded="false">
                    <li><a href="{{  route('footer.setup') }}">Footer Setup</a></li>
                  
                </ul>
            </li> 

          </ul>
      </div>
      <!-- Sidebar -->
  </div>
</div>