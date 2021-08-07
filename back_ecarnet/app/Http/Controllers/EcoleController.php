<?php

namespace App\Http\Controllers;

use App\Models\Ecole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\EcolesEnCoursCollection;

class EcoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $EcolesEnCours = Ecole::all()->where("date_ecole", ">=", now())->where("delete",0);

        return EcolesEnCoursCollection::collection($EcolesEnCours);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ecole  $ecole
     * @return \Illuminate\Http\Response
     */
    public function show(Ecole $ecole)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ecole  $ecole
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ecole $ecole)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'id'        => 'required|exists:App\Models\Ecole,id',
            ],
            [
                'required'  => 'Le champs :attribute est requis',
                'exists'    => "l'école id => ".$request->id." n'existe pas"
            ]
        );

        if ($validator->fails()) {
            return $validator->errors();
        }

        $ecole = Ecole::find($request->id);

        $ecole->delete = true;
        $ecole->save();

        if($ecole->delete){
            return [
                'message' => "l'école est supprimée"
            ];
        }
        return [
            'error' => "une erreur s'est produite lors de la suppression"
        ];

    }
}
