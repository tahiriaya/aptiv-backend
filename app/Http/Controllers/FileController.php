<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'mat' => 'required|string|max:255',
            'dateEntre' => 'required|date',
            'cat' => 'required|string|max:255',
            'raisonLicenciement' => 'required|string|max:255',
           
            'dateAudition' => 'required|date',
            'dateLicencLicenciement' => 'required|date',
            'date_1er_instance' => 'required|date',
            'dateAppel' => 'required|date',
            'datePaiment' => 'required|date',
            'decision_1er_instance' => 'required|string|max:255',
            'statu_1er_instance' => 'nullable|in:gagne,perdu',
            'statusAppel' => 'nullable|in:appelGagne,appelPerdu',
            'decisionAppel' => 'required|string|max:255',
            'statusDoss' => 'nullable|in:cloture,en cours',
            'typeContrat' => 'nullable|in:CPI,CA',
            'mntProvisions' => 'required|numeric',
            'mntEstimationAvocat' => 'required|numeric',
            'mntPaye_tribunal' => 'nullable|numeric',
            'mntDemande' => 'required|numeric',
            'CI_numero_facture' => 'required|string|max:255',
            'CI_mntPaye' => 'required|numeric',
            'CI_fraisDelegation' => 'required|numeric',
            'CI_fraisArret' => 'required|numeric',
            'CI_fraisJudiciaire' => 'required|numeric',
            'CA_numero_facture' => 'required|string|max:255',
            'CA_mnt' => 'required|numeric',
            'CA_fraisDelegation' => 'required|numeric',
            'CA_fraisArret' => 'required|numeric',
            'CA_fraisJudiciaire' => 'required|numeric',
            'mesure1_date' => 'required|date',
            'mesure1_mnt' => 'required|numeric',
            'mesure1_nomHuissier' => 'required|string|max:255',
            'mesure1_situationPaiement' => 'required|string|max:255',
            'mesure2_date' => 'nullable|date',
            'mesure2_mnt' => 'nullable|numeric',
            'mesure2_nomHuissier' => 'nullable|string|max:255',
            'mesure2_situationPaiement' => 'nullable|string|max:255',
            'mesure3_date' => 'nullable|date',
            'mesure3_mnt' => 'nullable|numeric',
            'mesure3_nomHuissier' => 'nullable|string|max:255',
            'mesure3_situationPaiement' => 'nullable|string|max:255',
            'mesure4_date' => 'nullable|date',
            'mesure4_mnt' => 'nullable|numeric',
            'mesure4_nomHuissier' => 'nullable|string|max:255',
            'mesure4_situationPaiement' => 'nullable|string|max:255',
            'mesure5_date' => 'nullable|date',
            'mesure5_mnt' => 'nullable|numeric',
            'mesure5_nomHuissier' => 'nullable|string|max:255',
            'mesure5_situationPaiement' => 'nullable|string|max:255',
            'mesure6_date' => 'nullable|date',
            'mesure6_mnt' => 'nullable|numeric',
            'mesure6_nomHuissier' => 'nullable|string|max:255',
            'mesure6_situationPaiement' => 'nullable|string|max:255',
            'mesure7_date' => 'nullable|date',
            'mesure7_mnt' => 'nullable|numeric',
            'mesure7_nomHuissier' => 'nullable|string|max:255',
            'mesure7_situationPaiement' => 'nullable|string|max:255',
            'mesure8_date' => 'nullable|date',
            'mesure8_mnt' => 'nullable|numeric',
            'mesure8_nomHuissier' => 'nullable|string|max:255',
            'mesure8_situationPaiement' => 'nullable|string|max:255',
            'mesure9_date' => 'nullable|date',
            'mesure9_mnt' => 'nullable|numeric',
            'mesure9_nomHuissier' => 'nullable|string|max:255',
            'mesure9_situationPaiement' => 'nullable|string|max:255',
            'mesure10_date' => 'nullable|date',
            'mesure10_mnt' => 'nullable|numeric',
            'mesure10_nomHuissier' => 'nullable|string|max:255',
            'mesure10_situationPaiement' => 'nullable|string|max:255',
            'CA_sPaiement' => 'nullable|in:CA_cheque,CA_espece',
            'CI_sPaiement' => 'nullable|in:CI_cheque,CI_espece',
            'temoins' => 'nullable|array',
            'temoins.*.name' => 'required_with:temoins|string|max:255',
            'temoins.*.relationship' => 'required_with:temoins|string|max:255',
        ]);
    
        // Prepare the data for saving
        $data = $request->all();
        
        // Convert the witnesses array to JSON if present
        if (isset($data['temoins'])) {
            $data['temoins'] = json_encode($data['temoins']);
        }
    
        // Create a new file record
        File::create($data);
    
        return response()->json(['message' => 'File created successfully!'], 201);
    }
    
   
}