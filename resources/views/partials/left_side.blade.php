<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
     
        <div class="clearfix"></div>
        <!--- Profile -->
        <div class="profile-info">
            <div class="col-xs-4">
              <a href="profile.html" class="rounded-image profile-image"><img src="{{ URL::to('images/users/user-100.jpg')}}"></a>
            </div>
            <div class="col-xs-8">
                <div class="profile-text">Welcome <b>Jane</b></div>
              
            </div>
        </div>
        <!--- Divider -->
        <div class="clearfix"></div>
        <hr class="divider" />
        <div class="clearfix"></div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
            <li class='has_sub'>
            <a href='javascript:void(0);'>
            <i class='icon-home-3'></i>
            <span>Dashboard</span> 
            <span class="pull-right">
            <i class="fa fa-angle-down"></i>
            </span>
            </a>
            <ul>
            <li>
            <a href='{{ route('home.dashboard') }}' id="active-home">
            <span>Dashboard v1</span>
            </a>
            </li>
            </ul>
            </li>
             <li>
            <a href='{{ route('home.types') }}' id="active-type">
            <i class='icon-home-3'></i>
            <span>Types</span> 
            </a>
            </li>
                <li>
            <a href='{{ route('generation.home') }}' id="active-generation">
            <i class='icon-home-3'></i>
            <span>Generation</span> 
            </a>
            </li>
            <li class='has_sub'>
            <a href='javascript:void(0);'>
            <i class='fa fa-table'></i>
            <span>Entres</span> 
            <span class="pull-right">
            <i class="fa fa-angle-down"></i>
            </span>
            </a>
            <ul>
            <li>
            <a href='{{ route('show.entres') }}' id="active-entres-table">
            <span>Table</span>
            </a>
            </li>
            <li>
            <a href='{{ route('get_add_entres') }}' id="active-entres-add">
            <span>Ajouter</span>
            </a>
            </li>
            </ul>
            </li>
             <li class='has_sub'>
            <a href='javascript:void(0);'>
            <i class='fa fa-table'></i>
            <span>Sorties</span> 
            <span class="pull-right">
            <i class="fa fa-angle-down"></i>
            </span>
            </a>
            <ul>
            <li>
            <a href='{{ route('show.sorties') }}' id="active-sorties-table">
            <span>Table</span>
            </a>
            </li>
            <li>
            <a href='{{ route('get_add_sorties') }}' id="active-sorties-add">
            <span>Ajouter</span>
            </a>
            </li>
            </ul>
            </li>
            </ul>                  
              <div class="clearfix"></div>
        </div>
    <div class="clearfix"></div>
    
</div>
    
</div>
