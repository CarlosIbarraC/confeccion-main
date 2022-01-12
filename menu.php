<!-- ############ LAYOUT START-->

  <!-- aside -->
  <div id="aside" class="app-aside modal nav-dropdown">
  	<!-- fluid app aside -->
    <div class="left navside dark dk" data-layout="column">
  	  <div class="navbar no-radius">
        <!-- brand -->
        <a class="navbar-brand">
        	<div ui-include="'assets/images/logo.svg'"></div>
        	<img src="assets/images/logo.png" alt="." class="hide">
        	<span class="hidden-folded inline">Confeccion</span>
        </a>
        <!-- / brand -->
      </div>
      <div class="hide-scroll" data-flex>
          <nav class="scroll nav-light">
            
              <ul class="nav" ui-nav>
                <li class="nav-header hidden-folded">
                  <small class="text-muted">Main</small>
                </li>
                
                <li>
                  <a href="dashboard.php" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe3fc;
                        <span ui-include="assets/images/i_0.svg"></span>
                      </i>
                    </span>
                    <span class="nav-text">Tablero</span>
                  </a>
                </li>
            
                <li>
                  <a href="dashboarding.php">                    
                    
                    <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="assets/images/i_1.svg"></span>
                      </i>
                    </span>
                    <span class="nav-text">Tablero ing</span>
                  </a>
                 
                </li>
            
                <li class="nav-header hidden-folded">
                  <small class="text-muted">Components</small>
                </li>
            
                <li>                   
                  <a href="formulario.php">                   
                    <span class="nav-icon">
                      <i class="material-icons">&#xe39e;
                        <span ui-include="assets/images/i_6.svg"></span>
                      </i>
                    </span>
                    <span class="nav-text">Formulario O.P.</span>
                  </a>                  
                 </li>
                 <li>                   
                  <a href="ListadoOp.php">                   
                    <span class="nav-icon">
                      <i class="material-icons">&#xe39e;
                        <span ui-include="assets/images/i_6.svg"></span>
                      </i>
                    </span>
                    <span class="nav-text">listadoOp</span>
                  </a>
                  
                 </li>
                <li>
                  <a>
                    
                    <span class="nav-icon">
                      <i class="material-icons">&#xe896;
                        <span ui-include="assets/images/i_7.svg"></span>
                      </i>
                    </span>
                    <span class="nav-text">Tablas</span>
                  </a>
                  
                </li>
                <li>
                  <a>
                   
                    
                    <span class="nav-icon">
                      <i class="material-icons">&#xe1b8;
                        <span ui-include="assets/images/i_8.svg"></span>
                      </i>
                    </span>
                    <span class="nav-text">Graficas</span>
                  </a>
                  
                </li>
            
                <li class="nav-header hidden-folded">
                  <small class="text-muted">Help</small>
                </li>
                
                <li class="hidden-folded" >
                  <a href="cerrarsesion.php" >
                    <span class="nav-text">Salir</span>
                  </a>
                </li>
            
              </ul>
          </nav>
      </div>
      <div class="b-t">
        <div class="nav-fold">
        	<a href="profile.html">
        	    <span class="pull-left">
        	      <img src="assets/images/a0.jpg" alt="..." class="w-40 img-circle">
        	    </span>
        	    <span class="clear hidden-folded p-x">
        	      <span class="block _500">Ingeniero planta</span>
        	      <small class="block text-muted"><i class="fa fa-circle text-success m-r-sm"></i>online</small>
        	    </span>
        	</a>
        </div>
      </div>
    </div>
  </div>
  <!-- / -->
   <!-- content -->
   <div id="content" class="app-content box-shadow-z0" role="main">    
    <div class="app-footer">
      <div class="p-2 text-xs">
        <div class="pull-right text-muted py-1">
          &copy; Copyright <strong>Carlos Ibarra</strong> <span class="hidden-xs-down">- version 1.1.2</span>
          <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
        </div>
        <div class="nav">
          <a class="nav-link" href="">About</a>
          <a class="nav-link" href="http://themeforest.net/user/flatfull/portfolio?ref=flatfull">Get it</a>
        </div>
      </div>
    </div>
    <div ui-view class="app-body" id="view">