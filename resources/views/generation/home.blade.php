@extends('main')
@section('title')
Generation
@endsection

@section('contents')
    <div class="row">

      <div class="col-md-12">
        <div class="widget">
          <div class="widget-header">
            <h2 class="text-center"><strong>Generations</strong></h2>

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
                              <th>Fournisseur</th>
                              <th>Solde</th>
                              <th>Options</th>
                          </tr>
                      </thead>


                      <tbody>
                        @foreach($generation as $generations)
                    

                          <tr class="generation">

                             @if($generations->mode == 1)
                        <script>
                        $('.generation').addClass('color-generation-green');
                      </script>
                         @endif
                          @if($generations->mode == 2)
                         <script>
                          $('.generation').addClass('color-generation-red');
                        </script>
                       @endif
                              <td>{{ $generations->type->name }}</td>
                              <td>{{ date('d/m/Y',strtotime($generations->date)) }}</td>
                              <td>{{ $generations->nfacture }}</td>
                              <td>{{ $generations->quantite}}</td>
                              <td>{{ $generations->prix_uni}}</td>
                              
                              <td>{{ $generations->fourni }}</td>
                              <td>{!! $generations->solde = $generations->quantite * $generations->prix_uni !!}</td>
                              <td>
                          <div class="btn-group btn-group-xs">
                           <a href="{{ route('get_edit_generation',$generations->id) }}" class="btn btn-default"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('destroy.generation',$generations->id) }}" class="btn btn-default"><i class="fa fa-trash"></i></a>
                            
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
       $('#active-generation').addClass('active');
</script>
@endsection
