<nav class="sidebar-nav">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.home') }}"><i class="icon-speedometer"></i> Dashboard </a>
    </li>
    

    <li class="nav-title">
            Master
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> Category</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.master.category.create') }}"><i class="icon-puzzle"></i> Add</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.master.category.index') }}"><i class="icon-puzzle"></i> View All</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="components/cards.html"><i class="icon-puzzle"></i> Cards</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="components/forms.html"><i class="icon-puzzle"></i> Forms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="components/modals.html"><i class="icon-puzzle"></i> Modals</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="components/switches.html"><i class="icon-puzzle"></i> Switches</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="components/tables.html"><i class="icon-puzzle"></i> Tables</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="components/tabs.html"><i class="icon-puzzle"></i> Tabs</a>
              </li> -->
            </ul>
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Sub Category</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.master.sub_category.create') }}"><i class="icon-star"></i> Add</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.master.sub_category.index') }}"><i class="icon-star"></i> View </a>
              </li>
            </ul>
          </li>

  </ul>
</nav>