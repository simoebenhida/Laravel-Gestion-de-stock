@extends('main')

@section('title')
  Types
@endsection
@section('contents')
  <div class="row">

      <div class="col-md-6">
        <div class="widget">
          <div class="widget-header transparent">
            

          </div>
          <div class="widget-content">
            <div class="table-responsive">
              <table data-sortable class="table table-hover table-striped">
                <thead>
                  <tr>
                    <th>N°</th>
                   <th>Nom</th>
                    <th>Crée à</th>
                    <th>modifié à</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($types as $type)
                  <tr>
                    <td>
                      {{ $type->id }}
                    </td>
                   

                    <td>
                      <a href="{{ route('single.type',$type->id) }}">{{ $type->name }}</a>
                    </td>
                    <td>
                      {{ date('d/m/Y H:i',strtotime($type->created_at)) }}
                    </td>
                    <td>
                      {{ date('d/m/Y H:i',strtotime($type->updated_at)) }}
                    </td>
                  </tr>
                @endforeach
                </tbody>
                </table>
              </div>
                </div>
              </div>
            </div>

<div class="col-md-6">
  <div class="widget clearfix">
    <div class="widget-header transparent clearfix">
      <h2 class="text-center"><strong>Ajouter</strong> Types</h2>

    </div>
    <div class="widget-content padding clearfix">
      <div id="basic-form">
        <form action="{{ route('post.types') }}" method="POST" role="form">
       <div class="col-md-8 col-md-offset-2">


        <div class="form-group @if($errors->has('name')) has-error @endif">
        <input type="text" class="form-control"  name="name">

</div>

      </div>
      <input type="hidden" name="_token" value="{{ Session::token() }}">
      <button type="submit" class="btn btn-success pull-left">Enregistrer</button>
    </form>
  </div>
</div>




          </div>
    </div>
    </div>
@endsection
@section('scripts')
<script>
       $('#active-type').addClass('active');
</script>
@endsection