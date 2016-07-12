@extends('main')

@section('title')
  Ajouter Entres
@endsection
@section('contents')

  		<div class="tab-content">

										<div class="row">
                      {{ Form::model($client,['route'=>['edit.client',$client->id]])}}
                      <div class="col-md-4 col-md-offset-4">
                          <h1 class="text-center">
                            {{ Form::label('name','Nom')}}
                            {{ Form::text('name',null,['class'=> 'form-control text-center'])}}</h1>
                      </div>
                      <div class="col-md-12">


											<div class="col-sm-6">
                          <div class="col-sm-6">


                        	<address>
														<strong>Phone</strong><br>

                              {{ Form::text('telephone',null,['class'=> 'form-control'])}}

                          </address>
													<address>
														<strong>Email</strong><br>

    {{ Form::text('email',null,['class'=> 'form-control'])}}


													</address>
											</div>
                      </div>
											<div class="col-sm-6">
                        <div class="col-sm-6">


                        <address>
                          <strong>Adresse</strong><br>

                          {{ Form::textarea('adresse',null,['size' => '30x5','class'=> 'form-control'])}}

                        </address>
										</div><!-- End div .row -->
                      </div>
                    </div>
                    {{ Form::close() }}
                    <hr />


<div class="col-md-12">
  <div class="widget">
    <div class="widget-header">
      <h2 class="text-center"><strong>Les Entres de {{ $client->name }}</strong></h2>

      <div class="additional-btn">
				<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
				<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>

     <a href="{{ route('get_add_entres') }}"><button class="btn btn-success pull-right">Ajouter</button></a>
      </div>
    </div>
    <div class="widget-content">
    <br>
      <div class="table-responsive">
        <form class='form-horizontal' role='form'>
        <table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Types</th>
                        <th>Date</th>
                        <th>N°=Facture</th>
                        <th>Quantite</th>
                        <th>Prix Unitaire</th>
                        <th>Solde</th>
                        <th>
                          Options
                        </th>
                    </tr>
                </thead>


                <tbody>
                  @foreach($entres as $entre)
                    <tr>

                        <td>{{ $entre->type->name }}</td>
                        <td>{{ date('d/m/Y',strtotime($entre->date)) }}</td>
                        <td>{{ $entre->nfacture }}</td>
                        <td>{{ $entre->quantite }}</td>
                        <td>{{ $entre->prix_uni }}</td>

                        <td>{!! $entre->solde = $entre->quantite * $entre->prix_uni !!}</td>
                        <td>
                    <div class="btn-group btn-group-xs">
                     <a href="{{ route('get_edit_entres',$entre->id) }}" class="btn btn-default"><i class="fa fa-edit"></i></a>
                      <a href="{{ route('destroy.entres',$entre->id) }}" class="btn btn-defaultt"><i class="fa fa-trash"></i></a>

                    </div>
                  </td>
                      @endforeach
                </tbody>
            </table>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="col-md-12">
  <div class="widget">
    <div class="widget-header">
      <h2 class="text-center"><strong>Les Sorties de {{ $client->name }}</strong></h2>

      <div class="additional-btn">
        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
        <a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>

     <a href="{{ route('get_add_sorties') }}"><button class="btn btn-success pull-right">Ajouter</button></a>
      </div>
    </div>
    <div class="widget-content">
    <br>
      <div class="table-responsive">
        <form class='form-horizontal' role='form'>
        <table id="datatables-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Types</th>
                        <th>Date</th>
                        <th>N°=Facture</th>
                        <th>Quantite</th>
                        <th>Prix Unitaire</th>
                        <th>Solde</th>
                        <th>Options</th>
                    </tr>
                </thead>


                <tbody>
                  @foreach($sorties as $sortie)
                    <tr>

                        <td>{{ $sortie->type->name }}</td>
                        <td>{{ date('d/m/Y',strtotime($sortie->date)) }}</td>
                        <td>{{ $sortie->nfacture }}</td>
                        <td>{{ $sortie->quantite}}</td>
                        <td>{{ $sortie->prix_uni}}</td>
                         <td>{!! $sortie->solde = $sortie->quantite * $sortie->prix_uni !!}</td>
                        <td>
                    <div class="btn-group btn-group-xs">
                     <a href="{{ route('get_edit_sorties',$sortie->id) }}" class="btn btn-default"><i class="fa fa-edit"></i></a>
                      <a href="{{ route('destroy.sorties',$sortie->id) }}" class="btn btn-defaultt"><i class="fa fa-trash"></i></a>

                    </div>
                  </td>

                    </tr>
                  @endforeach

                </tbody>
            </table>
        </form>
      </div>
    </div>
  </div>
</div>
</div>

@endsection
@section('scripts')
  <!-- Page Specific JS Libraries -->
  <script src="{{ URL::to('assets/libs/jquery-datatables/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ URL::to('assets/libs/jquery-datatables/js/dataTables.bootstrap.js') }}"></script>
  <script src="{{ URL::to('assets/libs/jquery-datatables/extensions/TableTools/js/dataTables.tableTools.min.js') }}"></script>
  <script src="{{ URL::to('assets/js/pages/datatables.js') }}"></script>
  <script>
       $('#active-entres-table').addClass('active');
</script>
@endsection
