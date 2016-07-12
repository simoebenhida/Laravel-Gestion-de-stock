<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Generation;
use Session;
use App\type;
use App\Client;
class generationController extends Controller
{

   //----------------------------------------------------Generation-----------------------------------------
   //

   public function generation_home()
   {
    $generation = Generation::OrderBy('date')->get();
    return view('generation.home')->with('generation',$generation);
   }
   public function get_edit_generation($id)
   {
      $generation = Generation::find($id);
       $types = type::all();
      $modifier = array();
      foreach($types as $type)
      {
        $modifier[$type->id] = $type->name;
      }
      return view('generation.edit')->with('generation',$generation)->with('types',$modifier);
   }
    public function edit_generation(Request $request,$id)
    {
      $generation = Generation::find($id);
       //change validate after
      $this->validate($request,[
        'type_id' => 'required',
        'date' => 'required',
        'nfacture' => 'required',
        'quantite' => 'required',
         'prix_uni' => 'required',
        'fourni' => 'required'
        ]);
       $generation->type_id = $request->type_id;
        $generation->date = $request->date;
        $generation->nfacture = $request->nfacture;
        $generation->prix_uni = $request->prix_uni;
        $generation->quantite = $request->quantite;
        $generation->fourni = $request->fourni;
        $generation->update();
        Session::flash('success','Vous avez bien modifier votre stock');
        return redirect()->route('generation.home');
    }

    //delete

    public function destroy_generation($id)
    {
      $generation = Generation::find($id);
      $generation->delete();

      Session::flash('failed','Vous avez bien supprimer votre generation');
      return redirect()->route('generation.home');

    }











  //---------------------------------------------------------------------------------------------------------------------------------------------------Entres-----------------------------------------------------------------------------
  //

    public function show_entres()
    {
      $entres = Generation::where('mode',1)->OrderBy('date')->get();
      return view('In.show')->with('entres',$entres);
    }
    public function get_add_entres()
    {
      $types = type::all();
      return view('In.add')->with('types',$types);
    }
    public function post_add_entres(Request $request)
    {
      //change validate after
      $this->validate($request,[
        'type_id' => 'required',
        'date' => 'required',
        'nfacture' => 'required',
        'quantite' => 'required',
         'prix_uni' => 'required',
        'fourni' => 'required'
        ]);
        $entres = new Generation;
        $entres->type_id = $request->type_id;
        $entres->date = $request->date;
        $entres->nfacture = $request->nfacture;
        $entres->prix_uni = $request->prix_uni;
        $entres->quantite = $request->quantite;
        $entres->fourni = $request->fourni;
        $entres->mode = 1;
        $entres->save();

        Session::flash('success','Vous Avez Bien Ajouer votre nouveaux Commande');
        return redirect()->route('show.entres');

    }
    //Edit entres

    public function get_edit_entres($id)
    {
      $entres = Generation::find($id);
      $types = type::all();
      $typo = [];
      foreach($types as $type)
      {
        $typo[$type->id] = $type->name;
      }
      return view('In.edit')->with('entres',$entres)->with('types',$typo);
    }

    public function edit_entres(Request $request,$id)
    {
      $entres = Generation::find($id);
       //change validate after
      $this->validate($request,[
        'type_id' => 'required',
        'date' => 'required',
        'nfacture' => 'required',
        'quantite' => 'required',
         'prix_uni' => 'required',
        'fourni' => 'required'
        ]);
       $entres->type_id = $request->type_id;
        $entres->date = $request->date;
        $entres->nfacture = $request->nfacture;
        $entres->prix_uni = $request->prix_uni;
        $entres->quantite = $request->quantite;
        $entres->fourni = $request->fourni;
        $entres->mode = 1;
        $entres->update();
        Session::flash('success','Vous avez bien modifier votre entres');
        return redirect()->route('show.entres');
    }

    //delete

    public function destroy_entres($id)
    {
      $entres = Generation::find($id);
      $entres->delete();

      Session::flash('failed','Vous avez bien supprimer votre entres');
      return redirect()->route('show.entres');

    }
    //---------------------------------------------------------------------------------------------------------------------------------------------END ENTRES-------------------------------------------------------------------------------




//-----------------------------------------------------------------BEGIN SORTIE--------------------------------------------------------------------------------------
//
 public function show_sorties()
    {
      $sorties = Generation::where('mode','=','2')->OrderBy('date')->get();
      return view('Out.show')->with('sorties',$sorties);
    }
    public function get_add_sorties()
    {
      $types = type::all();
      return view('Out.add')->with('types',$types);
    }
    public function post_add_sorties(Request $request)
    {
      //change validate after
      $this->validate($request,[
        'type_id' => 'required',
        'date' => 'required',
        'nfacture' => 'required',
        'quantite' => 'required',
         'prix_uni' => 'required',
        'fourni' => 'required'
        ]);
        $sorties = new Generation;
        $sorties->type_id = $request->type_id;
        $sorties->date = $request->date;
        $sorties->nfacture = $request->nfacture;
        $sorties->prix_uni = $request->prix_uni;
        $sorties->quantite = $request->quantite;
        $sorties->fourni = $request->fourni;
        $sorties->mode = 2;
        $sorties->save();

        Session::flash('success','Vous Avez Bien Ajouer votre nouveaux Commande');
        return redirect()->route('show.sorties');

    }
    //Edit sorties

    public function get_edit_sorties($id)
    {
      $sorties = Generation::find($id);
      $types = type::all();
      $typo = [];
      foreach($types as $type)
      {
        $typo[$type->id] = $type->name;
      }
      return view('Out.edit')->with('sorties',$sorties)->with('types',$typo);
    }

    public function get_sorties(Request $request,$id)
    {
      $sorties = Generation::find($id);
       //change validate after
      $this->validate($request,[
        'type_id' => 'required',
        'date' => 'required',
        'nfacture' => 'required',
        'quantite' => 'required',
         'prix_uni' => 'required',
        'fourni' => 'required'
        ]);
       $sorties->type_id = $request->type_id;
        $sorties->date = $request->date;
        $sorties->nfacture = $request->nfacture;
        $sorties->prix_uni = $request->prix_uni;
        $sorties->quantite = $request->quantite;
        $sorties->fourni = $request->fourni;
        $sorties->mode = 2;
        $sorties->update();
        Session::flash('success','Vous avez bien modifier votre sorties');
        return redirect()->route('show.sorties');
    }

    //delete

    public function destroy_sorties($id)
    {
      $sorties = Generation::find($id);
      $sorties->delete();

      Session::flash('failed','Vous avez bien supprimer votre sorties');
      return redirect()->route('show.sorties');

    }

//--------------------------------------------------------------------------------------------------------------------------------------------END SORTIE-------------------------------------------------------------------------------------
    //types

    public function index_types()
    {
      $types = type::all();
      return view('type.home')->with('types',$types);
    }
    public function post_types(Request $request)
    {
      $this->validate($request,[
        'name' => 'required'
      ]);
      $types = new type;
      $types->name = $request->name;
      $types->save();

      Session::flash('success','Vous Avez bien Ajouter votre Type');
      return redirect()->route('home.types');
    }
    public function single_type($id)
    {
      $types = Generation::where('type_id',$id)->get();
      $name = type::find($id);
      return view('type.page')->with('types',$types)->with('name',$name);
    }
    public function get_edit_page_types($id)
    {
      $types = Generation::find($id);
      return view('type.edit')->with('types',$types);
    }

    public function edit_page_types(Request $request,$id)
    {
      $types = Generation::find($id);
       //change validate after
      $this->validate($request,[
        'date' => 'required',
        'nfacture' => 'required',
        'quantite' => 'required',
         'prix_uni' => 'required',
        'fourni' => 'required'
        ]);
        $types->date = $request->date;
        $types->nfacture = $request->nfacture;
        $types->prix_uni = $request->prix_uni;
        $types->quantite = $request->quantite;
        $types->fourni = $request->fourni;
        $types->update();
        Session::flash('success','Vous avez bien modifier votre type');
        return redirect()->route('single.type',$types->type_id);
    }

    //----------------------------------------------------CLient-----------------------------------------
    //

  /**  public function single_client($id)
    {
      $client = client::find($id);
      $generation = Generation::where('fourni',$client->name);
      $entres = $generation->where('mode',1)->get();
      $sorties = $generation->where('mode',2)->get();
      return view('client.single')->with('entres',$entres)->with('sorties',$sorties)->with('client',$client);
    }
    **/
    public function single_client($id)
    {
      $generation = Generation::find($id);   //the generation row where id = $id
      $client = client::where('name',$generation->fourni)->first(); //client name
      $generations = Generation::where('fourni',$client->name); // generation where the fourni have the name of existing client
      $entres = $generations->where('mode',1)->get();
      $sorties = $generations->where('mode',2)->get();
      return view('client.single')->with('entres',$entres)->with('sorties',$sorties)->with('client',$client);

    }
    public function get_edit_client($id)
    {
      $client = client::find($id);
      $generations = Generation::where('fourni',$client->name); // generation where the fourni have the name of existing client
      $entres = $generations->where('mode',1)->get();
      $sorties = $generations->where('mode',2)->get();
      return view('client.edit')->with('entres',$entres)->with('sorties',$sorties)->with('client',$client);

    }
    public function edit_client(Request $request,$id)
    {
      $client = client::find($id);
      $this->validate($request,[
        'name' => 'required'
      ]);
      $client = new client();
      $client->name = $request->name;
      $client->telephone = $request->telephone;
      $client->email = $request->email;
      $client->update();
      return redirect()->route('single.client',$id);
    }

}
