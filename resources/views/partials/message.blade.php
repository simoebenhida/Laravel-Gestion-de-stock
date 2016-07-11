 <div class="col-md-6 col-md-offset-3 portlets ui-sortable">
@if(Session::has('success'))
<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                               <p class="text-center">{{ Session::get('success') }}</p> 
                            </div>

@endif
@if(Session::has('failed'))
<div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                 <p class="text-center">{{ Session::get('failed') }}</p> 
                            </div>

@endif
</div>