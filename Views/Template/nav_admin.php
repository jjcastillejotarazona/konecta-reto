    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <img class="app-sidebar__user-avatar" src="<?php echo media(); ?>/images/avatar.png" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">José castillejo</p>
          <p class="app-sidebar__user-designation">Administrador</p>
        </div>
      </div>
      <ul class="app-menu">
        
        <li>
          <a class="app-menu__item" href="<?php echo base_url(); ?>/dashboard">
            <i class="app-menu__icon fa fa-dashboard"></i>
              <span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        <!--
        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-users"></i>
            <span class="app-menu__label">Usuarios</span>
              <i class="treeview-indicator fa fa-angle-right"></i>
          </a>

          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?php echo base_url(); ?>/usuarios"><i class="icon fa fa-circle-o"></i>Usuarios</a></li>
            <li><a class="treeview-item" href="<?php echo base_url(); ?>/roles"><i class="icon fa fa-circle-o"></i> Roles</a></li>
            <li><a class="treeview-item" href="<?php echo base_url(); ?>/permisos"><i class="icon fa fa-circle-o"></i> Permisos</a></li>
          </ul>
        </li>
        <li>-->
          <a class="app-menu__item" href="<?php echo base_url(); ?>/productos">
            <i class="app-menu__icon fa fa-archive"></i>
            <span class="app-menu__label">Productos</span>
          </a>
        </li>

        <li>
          <a class="app-menu__item" href="<?php echo base_url(); ?>/ventas">
            <i class="app-menu__icon fa fa-shopping-cart"></i>
            <span class="app-menu__label">Ventas</span>
          </a>
        </li>

        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-bar-chart"></i>
            <span class="app-menu__label">Reportes</span>
            <i class="treeview-indicator fa fa-angle-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?php echo base_url(); ?>/masstock"><i class="icon fa fa-circle-o"></i>Productos con más stock</a></li>
            <li><a class="treeview-item" href="<?php echo base_url(); ?>/masvendidos"><i class="icon fa fa-circle-o"></i> Producto más vendido</a></li>
          </ul>
        </li>

        <li>
          <a class="app-menu__item" href="<?php echo base_url(); ?>/logout">
            <i class="app-menu__icon fa fa-sign-out"></i>
            <span class="app-menu__label">Logout</span>
          </a>
        </li>
      </ul>
    </aside>