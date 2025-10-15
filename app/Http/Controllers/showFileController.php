<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;

class ShowFileController extends Controller
{
    public function index()
    {
        $files = File::all(); // Récupère tous les fichiers
        return response()->json($files); // Retourne les données en format JSON
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
    
        $files = File::where('firstName', 'LIKE', "%{$query}%")
            ->orWhere('lastName', 'LIKE', "%{$query}%")
            ->orWhere('mat', 'LIKE', "%{$query}%")
            ->orWhere('dateEntre', 'LIKE', "%{$query}%")
            ->orWhere('cat', 'LIKE', "%{$query}%")
            ->orWhere('raisonLicenciement', 'LIKE', "%{$query}%")
            ->orWhere('syndicat', 'LIKE', "%{$query}%")
            ->orWhere('raison', 'LIKE', "%{$query}%")
            ->orWhere('dateAudition', 'LIKE', "%{$query}%")
            ->orWhere('dateLicencLicenciement', 'LIKE', "%{$query}%")
            ->orWhere('date_1er_instance', 'LIKE', "%{$query}%")
            ->orWhere('dateAppel', 'LIKE', "%{$query}%")
            ->orWhere('datePaiment', 'LIKE', "%{$query}%")
            ->orWhere('decision_1er_instance', 'LIKE', "%{$query}%")
            ->orWhere('statu_1er_instance', 'LIKE', "%{$query}%")
            ->orWhere('statusAppel', 'LIKE', "%{$query}%")
            ->orWhere('decisionAppel', 'LIKE', "%{$query}%")
            ->orWhere('statusDoss', 'LIKE', "%{$query}%")
            ->orWhere('typeContrat', 'LIKE', "%{$query}%")
            ->orWhere('mntProvisions', 'LIKE', "%{$query}%")
            ->orWhere('mntEstimationAvocat', 'LIKE', "%{$query}%")
            ->orWhere('mntPaye_tribunal', 'LIKE', "%{$query}%")
            ->orWhere('mntDemande', 'LIKE', "%{$query}%")
            ->orWhere('CI_numero_facture', 'LIKE', "%{$query}%")
            ->orWhere('CI_mntPaye', 'LIKE', "%{$query}%")
            ->orWhere('CI_fraisDelegation', 'LIKE', "%{$query}%")
            ->orWhere('CI_fraisArret', 'LIKE', "%{$query}%")
            ->orWhere('CI_fraisJudiciaire', 'LIKE', "%{$query}%")
            ->orWhere('CI_numCheque', 'LIKE', "%{$query}%")
            ->orWhere('CI_fraisHuissier', 'LIKE', "%{$query}%")
            ->orWhere('CI_fraisExecutionJugement', 'LIKE', "%{$query}%")
            ->orWhere('CI_noteHonoraire', 'LIKE', "%{$query}%")
            ->orWhere('CA_numero_facture', 'LIKE', "%{$query}%")
            ->orWhere('CA_mnt', 'LIKE', "%{$query}%")
            ->orWhere('CA_fraisDelegation', 'LIKE', "%{$query}%")
            ->orWhere('CA_fraisArret', 'LIKE', "%{$query}%")
            ->orWhere('CA_fraisJudiciaire', 'LIKE', "%{$query}%")
            ->orWhere('CA_numCheque', 'LIKE', "%{$query}%")
            ->orWhere('CA_fraisHuissier', 'LIKE', "%{$query}%")
            ->orWhere('CA_fraisExecutionJugement', 'LIKE', "%{$query}%")
            ->orWhere('CA_noteHonoraire', 'LIKE', "%{$query}%")
            ->orWhere('mesure1_date', 'LIKE', "%{$query}%")
            ->orWhere('mesure1_mnt', 'LIKE', "%{$query}%")
            ->orWhere('mesure1_nomHuissier', 'LIKE', "%{$query}%")
            ->orWhere('mesure1_situationPaiement', 'LIKE', "%{$query}%")
            ->orWhere('mesure1_type', 'LIKE', "%{$query}%")
            ->orWhere('mesure2_date', 'LIKE', "%{$query}%")
            ->orWhere('mesure2_mnt', 'LIKE', "%{$query}%")
            ->orWhere('mesure2_nomHuissier', 'LIKE', "%{$query}%")
            ->orWhere('mesure2_situationPaiement', 'LIKE', "%{$query}%")
            ->orWhere('mesure2_type', 'LIKE', "%{$query}%")
            ->orWhere('mesure3_date', 'LIKE', "%{$query}%")
            ->orWhere('mesure3_mnt', 'LIKE', "%{$query}%")
            ->orWhere('mesure3_nomHuissier', 'LIKE', "%{$query}%")
            ->orWhere('mesure3_situationPaiement', 'LIKE', "%{$query}%")
            ->orWhere('mesure3_type', 'LIKE', "%{$query}%")
            ->orWhere('mesure4_date', 'LIKE', "%{$query}%")
            ->orWhere('mesure4_mnt', 'LIKE', "%{$query}%")
            ->orWhere('mesure4_nomHuissier', 'LIKE', "%{$query}%")
            ->orWhere('mesure4_situationPaiement', 'LIKE', "%{$query}%")
            ->orWhere('mesure4_type', 'LIKE', "%{$query}%")
            ->orWhere('mesure5_date', 'LIKE', "%{$query}%")
            ->orWhere('mesure5_mnt', 'LIKE', "%{$query}%")
            ->orWhere('mesure5_nomHuissier', 'LIKE', "%{$query}%")
            ->orWhere('mesure5_situationPaiement', 'LIKE', "%{$query}%")
            ->orWhere('mesure5_type', 'LIKE', "%{$query}%")
            ->orWhere('mesure6_date', 'LIKE', "%{$query}%")
            ->orWhere('mesure6_mnt', 'LIKE', "%{$query}%")
            ->orWhere('mesure6_nomHuissier', 'LIKE', "%{$query}%")
            ->orWhere('mesure6_situationPaiement', 'LIKE', "%{$query}%")
            ->orWhere('mesure6_type', 'LIKE', "%{$query}%")
            ->orWhere('mesure7_date', 'LIKE', "%{$query}%")
            ->orWhere('mesure7_mnt', 'LIKE', "%{$query}%")
            ->orWhere('mesure7_nomHuissier', 'LIKE', "%{$query}%")
            ->orWhere('mesure7_situationPaiement', 'LIKE', "%{$query}%")
            ->orWhere('mesure7_type', 'LIKE', "%{$query}%")
            ->orWhere('mesure8_date', 'LIKE', "%{$query}%")
            ->orWhere('mesure8_mnt', 'LIKE', "%{$query}%")
            ->orWhere('mesure8_nomHuissier', 'LIKE', "%{$query}%")
            ->orWhere('mesure8_situationPaiement', 'LIKE', "%{$query}%")
            ->orWhere('mesure8_type', 'LIKE', "%{$query}%")
            ->orWhere('mesure9_date', 'LIKE', "%{$query}%")
            ->orWhere('mesure9_mnt', 'LIKE', "%{$query}%")
            ->orWhere('mesure9_nomHuissier', 'LIKE', "%{$query}%")
            ->orWhere('mesure9_situationPaiement', 'LIKE', "%{$query}%")
            ->orWhere('mesure9_type', 'LIKE', "%{$query}%")
            ->orWhere('mesure10_date', 'LIKE', "%{$query}%")
            ->orWhere('mesure10_mnt', 'LIKE', "%{$query}%")
            ->orWhere('mesure10_nomHuissier', 'LIKE', "%{$query}%")
            ->orWhere('mesure10_situationPaiement', 'LIKE', "%{$query}%")
            ->orWhere('jug_1er_instance', 'LIKE', "%{$query}%")
            ->orWhere('date_jug_1er_instance', 'LIKE', "%{$query}%")
            ->orWhere('jug_appel', 'LIKE', "%{$query}%")
            ->orWhere('date_jug_appel', 'LIKE', "%{$query}%")
            ->orWhere('CA_sPaiement', 'LIKE', "%{$query}%")
            ->orWhere('CI_sPaiement', 'LIKE', "%{$query}%")
            ->orWhere('mnt', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->orWhere('fonction', 'LIKE', "%{$query}%")
            ->orWhere('departement', 'LIKE', "%{$query}%")
            ->get();
            foreach ($files as &$file) {
                if (!empty($file->temoins) && is_string($file->temoins)) {
                    try {
                        $file->temoins = json_decode($file->temoins, true);
                    } catch (\Exception $e) {
                        // En cas d'erreur, définir temoins à un tableau vide
                        $file->temoins = [];
                        \Log::error('Erreur lors du décodage des témoins : ' . $e->getMessage());
                    }
                } else {
                    // Si la chaîne est vide ou non définie, on initialise à un tableau vide
                    $file->temoins = [];
                }
            }
        
            return response()->json($files);
    
        return response()->json($files);
    }
    
    public function destroy($id)
    {
        // Trouver le fichier par ID
        $file = File::find($id);

        if ($file) {
            // Supprimer le fichier
            $file->delete();
            return response()->json(['message' => 'File deleted successfully.'], 200);
        } else {
            return response()->json(['message' => 'File not found.'], 404);
        }
    }
    public function update(Request $request, $id)
{
    // Trouver le fichier par ID
    $file = File::find($id);

    // Vérifier si le fichier existe
    if (!$file) {
        return response()->json(['message' => 'Fichier non trouvé'], 404);
    }

    // Validation des données
    $validatedData = $request->validate([
        'firstName' => 'required|string|max:255',
        'lastName' => 'required|string|max:255',
        'mat' => 'required|string|max:255',
        'dateEntre' => 'required|date',
        'cat' => 'required|string|max:255',
        'fonction' => 'required|string|max:255',
        'departement' => 'required|string|max:255',
        'raisonLicenciement' => 'required|string|max:255',
        'dateLicencLicenciement' => 'required|date',
        'syndicat' => 'required|boolean',
        'raison' => 'nullable|string',
        'temoins' => 'nullable|array',
        'temoins.*.name' => 'required|string|max:255',
        'temoins.*.relationship' => 'required|string|max:255',
        'dateAudition' => 'required|date',
        'date_1er_instance' => 'required|date',
        'dateAppel' => 'required|date',
        'datePaiment' => 'required|date',
        'decision_1er_instance' => 'required|string|max:255',
        'statu_1er_instance' => 'nullable|in:gagne,perdu',
        'statusAppel' => 'nullable|in:appelGagne,appelPerdu',
        'decisionAppel' => 'required|string|max:255',
        'jug_1er_instance' => 'required|string|max:255',
        'date_jug_1er_instance' => 'required|date',
        'jug_appel' => 'required|string|max:255',
        'date_jug_appel' => 'required|date',
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
        'CI_numCheque' => 'nullable|string|max:255',
        'CI_fraisHuissier' => 'required|numeric',
        'CI_fraisExecutionJugement' => 'required|numeric',
        'CI_noteHonoraire' => 'required|numeric',
        'CA_numero_facture' => 'required|string|max:255',
        'CA_mnt' => 'required|numeric',
        'CA_fraisDelegation' => 'required|numeric',
        'CA_fraisArret' => 'required|numeric',
        'CA_fraisJudiciaire' => 'required|numeric',
        'CA_numCheque' => 'nullable|string|max:255',
        'CA_fraisHuissier' => 'required|numeric',
        'CA_fraisExecutionJugement' => 'required|numeric',
        'CA_noteHonoraire' => 'required|numeric',
        'mesure1_date' => 'nullable|date',
        'mesure1_mnt' => 'nullable|numeric',
        'mesure1_nomHuissier' => 'nullable|string|max:255',
        'mesure1_situationPaiement' => 'nullable|string|max:255',
        'mesure1_type' => 'nullable|string|max:255',
        'mesure2_date' => 'nullable|date',
        'mesure2_mnt' => 'nullable|numeric',
        'mesure2_nomHuissier' => 'nullable|string|max:255',
        'mesure2_situationPaiement' => 'nullable|string|max:255',
        'mesure2_type' => 'nullable|string|max:255',
        'mesure3_date' => 'nullable|date',
        'mesure3_mnt' => 'nullable|numeric',
        'mesure3_nomHuissier' => 'nullable|string|max:255',
        'mesure3_situationPaiement' => 'nullable|string|max:255',
        'mesure3_type' => 'nullable|string|max:255',
        'mesure4_date' => 'nullable|date',
        'mesure4_mnt' => 'nullable|numeric',
        'mesure4_nomHuissier' => 'nullable|string|max:255',
        'mesure4_situationPaiement' => 'nullable|string|max:255',
        'mesure4_type' => 'nullable|string|max:255',
        'mesure5_date' => 'nullable|date',
        'mesure5_mnt' => 'nullable|numeric',
        'mesure5_nomHuissier' => 'nullable|string|max:255',
        'mesure5_situationPaiement' => 'nullable|string|max:255',
        'mesure5_type' => 'nullable|string|max:255',
        'mesure6_date' => 'nullable|date',
        'mesure6_mnt' => 'nullable|numeric',
        'mesure6_nomHuissier' => 'nullable|string|max:255',
        'mesure6_situationPaiement' => 'nullable|string|max:255',
        'mesure6_type' => 'nullable|string|max:255',
        'mesure7_date' => 'nullable|date',
        'mesure7_mnt' => 'nullable|numeric',
        'mesure7_nomHuissier' => 'nullable|string|max:255',
        'mesure7_situationPaiement' => 'nullable|string|max:255',
        'mesure7_type' => 'nullable|string|max:255',
        'mesure8_date' => 'nullable|date',
        'mesure8_mnt' => 'nullable|numeric',
        'mesure8_nomHuissier' => 'nullable|string|max:255',
        'mesure8_situationPaiement' => 'nullable|string|max:255',
        'mesure8_type' => 'nullable|string|max:255',
        'mesure9_date' => 'nullable|date',
        'mesure9_mnt' => 'nullable|numeric',
        'mesure9_nomHuissier' => 'nullable|string|max:255',
        'mesure9_situationPaiement' => 'nullable|string|max:255',
        'mesure9_type' => 'nullable|string|max:255',
        'mesure10_date' => 'nullable|date',
        'mesure10_mnt' => 'nullable|numeric',
        'mesure10_nomHuissier' => 'nullable|string|max:255',
        'mesure10_situationPaiement' => 'nullable|string|max:255',
        'mesure10_type' => 'nullable|string|max:255',
        'CA_sPaiement' => 'nullable|in:CA_cheque,CA_espece',
        'CI_sPaiement' => 'nullable|in:CI_cheque,CI_espece',
        'mnt' => 'nullable|numeric',
        'description' => 'nullable|string',
    ]);

    // Préparer les données pour la mise à jour
    $data = $request->all();

    // Convertir le tableau des témoins en JSON
    if (isset($data['temoins'])) {
        $data['temoins'] = json_encode($data['temoins']); // Convertir le tableau en chaîne JSON
    }

    // Mettre à jour le fichier avec les nouvelles données
    $file->update($data);

    // Retourner une réponse avec le fichier mis à jour
    return response()->json([
        'message' => 'Fichier mis à jour avec succès',
        'file' => $file
    ], 200);
}
public function show($id)
{
    // Rechercher le fichier avec l'ID donné
    $file = File::find($id);

    // Vérifier si le fichier existe
    if (!$file) {
        return response()->json(['message' => 'File not found'], 404);
    }

    // Retourner les détails du fichier en réponse JSON
    return response()->json($file);
}
public function filter(Request $request)
{
    $status = $request->query('statusDoss');
    $yearAudition = $request->query('yearAudition');

    $query = File::query();

    // Filtrer par statut si défini
    if ($status) {
        $query->where('statusDoss', $status);
    }

    // Filtrer par année d'audition si définie
    if ($yearAudition) {
        $query->whereYear('dateAudition', $yearAudition);
    }

    $dossiers = $query->get();

    return response()->json($dossiers);
}

}