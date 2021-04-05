<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <i class="fa fa-camera-retro" aria-hidden="true"></i>
        <a href="index.html">Capture</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{route('dashboard')}}">CP</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">General</li>
          <li class="nav-item">
            <a href="{{route('dashboard')}}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
          </li>
          <li class="menu-header">Data</li>
          <li class="nav-item">
            <a href="{{route('album.index')}}"><i class="fas fa-camera"></i><span>Album</span></a>
          </li>
          <li class="nav-item">
            <a href="{{route('category.index')}}"><i class="fas fa-list"></i><span>Category</span></a>
          </li>
          <li class="nav-item">
            <a href="{{route('gallery.index')}}"><i class="fas fa-images"></i><span>Photo</span></a>
          </li>
          <li class="nav-item">
            <a href="{{route('location.index')}}"><i class="fas fa-location-arrow"></i><span>Location</span></a>
          </li>  
        </ul>
    </aside>
  </div>