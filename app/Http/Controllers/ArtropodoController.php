<?php

namespace App\Http\Controllers;

use App\Models\Artropodo;
use App\Http\Requests\StoreArtropodoRequest;
use App\Http\Requests\UpdateArtropodoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ArtropodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = trim($request->get('search'));
        $clasificacion = trim($request->get('clasificacion'));
        $peligroso = trim($request->get('peligroso'));

        $artropodos = DB::table('artropodos')
                      ->get()
                      ;

        if (isset($clasificacion) || isset($peligroso)){

        $artropodos = DB::table('artropodos')
                      ->when($peligroso == "Sí", function ($query) use ($clasificacion,$peligroso,$search){
                          $query->where('clasificacion', $clasificacion)
                                ->where('peligroso', 'Sí')
                                ->where(function ($query) use($search){
                                   $query->where('nombre_comun','LIKE','%'.$search.'%')
                                         ->orWhere('nombre_cientifico','LIKE','%'.$search.'%')
                                         ;
                                })

                          ;

                      })
                      ->when($peligroso == "No", function ($query) use ($clasificacion,$peligroso,$search){
                          $query->where('clasificacion', $clasificacion)
                                ->where('peligroso', 'No')
                                ->where(function ($query) use($search){
                                      $query->where('nombre_comun','LIKE','%'.$search.'%')
                                          ->orWhere('nombre_cientifico','LIKE','%'.$search.'%')
                                      ;
                                  })
                          ;
                      })
                      ->get();


        }



        return view('artropodo.index',compact('artropodos','search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artropodo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArtropodoRequest $request)
    {

        $artropodo = new Artropodo();
        $artropodo->nombre_comun  = $request->nombreComun;
        $artropodo->nombre_cientifico = $request->nombreCientifico;
        $artropodo->clasificacion = $request->clasificacion;
        $artropodo->habitat = $request->habitat;
        $artropodo->distribucion_geografica = $request->distribucionGeografica;
        $artropodo->color = $request->color;
        $artropodo->peligroso = $request->peligroso;
        $artropodo->patas = $request->patas;

        if($request->hasFile('file')){
            $fileName = time() ."_" . $request->file->getClientOriginalName();
            $artropodo->foto = $fileName;
            $request->file->storeAS('/',$fileName,'azure');
        }else{
            $artropodo->foto = "NO";
        }
        /*
        $fileName = time() ."_" . $request->file->getClientOriginalName();
        $artropodo->foto = $fileName;
        $request->file->storeAS('/',$fileName,'azure');
        */
        $artropodo->save();

        return redirect()->route('artropodo.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Artropodo $artropodo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    #public function edit(Artropodo $artropodo)
    public function edit($id)
    {
        $artropodo = Artropodo::where('id',$id)->firstOrFail();
        return view('artropodo.edit',compact('artropodo'));
    }

    /**
     * Update the specified resource in storage.
     */
    #public function update(UpdateArtropodoRequest $request, Artropodo $artropodo)
    public function update(UpdateArtropodoRequest $request, $id)
    {
        $artropodo = Artropodo::where('id',$id)->firstOrFail();
        $nombre_comun = $request->nombreComun;
        $nombre_cientifico = $request->nombreCientifico;
        $clasificacion = $request->clasificacion;
        $habitat = $request->habitat;
        $distribucion_geografica = $request->distribucionGeografica;
        $color = $request->color;
        $peligroso = $request->peligroso;
        $patas = $request->patas;

        //if($artropodo->foto != "NO"){
            if($request->hasFile('file')){
                $fileName = time() ."_" . $request->file->getClientOriginalName();
                $foto = $fileName;
                $request->file->storeAS('/',$fileName,'azure');
            }else{
                $foto = $artropodo->foto;
                //$foto = "NO";
            }
        /*
        }else{
            $foto = $artropodo->foto;
        }
        */
        /*$foto = $request->foto;*/

        $artropodo->update([

            'nombre_comun' => $nombre_comun,
            'nombre_cientifico' => $nombre_cientifico,
            'clasificacion' => $clasificacion,
            'habitat' => $habitat,
            'distribucion_geografica' => $distribucion_geografica,
            'color' => $color,
            'peligroso' => $peligroso,
            'patas' => $patas,
            'foto' => $foto,

        ]);

        return redirect()->route('artropodo.index');



    }

    /**
     * Remove the specified resource from storage.
     */
    //public function destroy(Artropodo $artropodo)
    public function destroy($id)
    {
        $artropodo = Artropodo::where('id',$id)->firstOrFail();
        $artropodo->delete($id);
        return redirect()->route('artropodo.index');
    }

    public function clasificacion()
    {
        return view('artropodo.clasificaciones');
    }


}
