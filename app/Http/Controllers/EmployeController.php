<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    // Méthode pour récuperer tous les employés
    public function index()
    {
        return response()->json(Employe::all());
    }

    // Méthode pour ajouter Employé
    public function store(Request $request)
    {
        $employe = Employe::create([
            'nom' => $request->nom,
            'salaire' => $request->salaire
        ]);

        return response()->json([
            "message" => "Employé ajouté avec succés",
            "data" => $employe
        ]);
    }

    // Méthode pour récuperer un employé grace à son id
    public function show($id)
    {
        $employe = Employe::findOrFail($id);

        return response()->json($employe);
    }

    // Méthode pour modifier un employé
    public function update(Request $request, $id)
    {
        $employe = Employe::findOrFail($id);

        $employe->update([
            'nom' => $request->nom,
            'salaire' => $request->salaire
        ]);

        return response()->json([
            "message" => "Employé modifié avec succés",
            "data" => $employe
        ]);
    }

    // Méthode pour supprimer un employé
    public function delete($id)
    {
        $employe = Employe::findOrFail($id);

        $employe->delete();

        return response()->json([
            "message" => "Employé supprimé avec succés"
        ]);
    }

    // Méthode pour retourner les stats à afficher dans le coté client
    public function stats()
    {
        $total = Employe::sum('salaire');
        $min = Employe::min('salaire');
        $max = Employe::max('salaire');

        return response()->json([
            "salaire_total" => $total,
            "salaire_min" => $min,
            "salaire_max" => $max
        ]);
    }
}
