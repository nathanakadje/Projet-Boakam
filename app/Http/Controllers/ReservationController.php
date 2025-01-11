<?php

namespace App\Http\Controllers;

use App\Models\Reservations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    //
    public function store(Request $request)
{

      // Définir les règles de validation
      $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|min:9',
        'check_in' => 'required|date|after_or_equal:today',
        'check_out' => 'required|date|after_or_equal:check_in',
    ];

    // Messages d'erreur personnalisés
    $messages = [
        'name.required' => 'Le nom est obligatoire.',
        'name.string' => 'Le nom doit être une chaîne de caractères.',
        'name.max' => 'Le nom ne doit pas dépasser 255 caractères.',
        'email.required' => 'L\'adresse email est obligatoire.',
        'email.email' => 'L\'adresse email doit être valide.',
        'phone.required' => 'Le numéro de téléphone est obligatoire.',
        'phone.string' => 'Le numéro de téléphone doit être une chaîne de caractères.',
        'phone.min' => 'Le numéro de téléphone doit contenir au moins 9 caractères.',
        'check_in.required' => 'La date d\'arrivée est obligatoire.',
        'check_in.date' => 'La date d\'arrivée doit être une date valide.',
        'check_in.after_or_equal' => 'La date d\'arrivée doit être aujourd\'hui ou après.',
        'check_out.required' => 'La date de départ est obligatoire.',
        'check_out.date' => 'La date de départ doit être une date valide.',
        'check_out.after_or_equal' => 'La date de départ doit être égale ou postérieure à la date d\'arrivée.',
    ];

     // Effectuer la validation avec Validator
     $validator = Validator::make($request->all(), $rules, $messages);

     // Vérifier si la validation échoue
     if ($validator->fails()) {
         return response()->json([
             'success' => false,
             'errors' => $validator->errors()
         ], 422);
     }
 
     // Récupérer les données validées
     $validatedData = $validator->validated();
 
     try {
         // Enregistrer la réservation
         $reservation = Reservations::create($validatedData);
 
         // Retourner une réponse JSON de succès
         return response()->json(['success' => true, 'message' => 'Chambre réservée avec succès!']);
     } catch (\Exception $e) {
         // Gérer les exceptions et retourner une réponse JSON
         return response()->json(['success' => false, 'message' => 'Une erreur est survenue: ' . $e->getMessage()], 500);
     }
//        $validatedData  = $request->validate([
//           'name' => 'required|string|max:255',
//             'email' => 'required|email',
//             'phone' => 'required|string|min:9',
//             'check_in' => 'required|date|after_or_equal:today',
//             'check_out' => 'required|date|after_or_equal:check_in',
//         ]);


        
//         try { 
//         // Save reservation logic here
//  $reservation = Reservations::create($validatedData);
//  return response()->json(['success' => true]);
// //  return redirect()->back()->with('success', 'Chambre réservée avec succès!');
//     } catch (\Exception $e) {
//         return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
//     }
    
    // catch (\Exception $e) {
    //     return response()->json([
    //         'status' => 'error',
    //         'message' => 'Une erreur est survenue lors de la création',
    //         'error' => $e->getMessage()
    //     ], 500);
    // }
}
}
