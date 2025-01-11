<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class VueController extends Controller
{
    //
    public function chooseRoom()
    {
        return view('canaan');
    }

    public function acceuil()
    {
        return view('index');
    } 

    // public function store(Request $request)
    // {
    //     // Validate incoming request data
    //     $validated = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'phone' => 'required|string|max:20',
    //         'number_room' => 'required|integer|min:1',
    //         'check_in' => 'required|date|after_or_equal:today',
    //         'check_out' => 'required|date|after:check_in',
    //         'room_type' => 'required|in:single,double',
    //     ]);

    //     try {
    //         // Manually create a new reservation
    //         $reservation = new Reservation();
    //         $reservation->name = $validated['name'];
    //         $reservation->email = $validated['email'];
    //         $reservation->phone = $validated['phone'];
    //         $reservation->number_room = $validated['number_room'];
    //         $reservation->check_in = $validated['check_in'];
    //         $reservation->check_out = $validated['check_out'];
    //         $reservation->room_type = $validated['room_type'];
    //         $reservation->save();

    //         return response()->json([
    //             'success' => true,
    //             'message' => 'Reservation saved successfully.',
    //             'reservation' => $reservation,
    //         ]);
    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => $e->getMessage(),
    //         ], 500);
    //     }
    // }
    // public function store(Request $request)
    // {
    //     // Valider les données du formulaire
    //     $validatedData = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email|max:255',
    //         'phone' => 'required|string|max:20',
    //         'number_room' => 'required|integer',
    //         'check_in' => 'required|date',
    //         'check_out' => 'required|date|after:check_in',
    //         'room_type' => 'required|in:simple,double',
    //     ]);

    //     // Créer une nouvelle réservation
    //     Reservation::create($validatedData);

    //     // Retourner une réponse JSON pour la notification
    //     return response()->json(['message' => 'Chambre réservée avec succès !']);
    // }
    // // public function reserveRoom(Request $request)
    // {
    //     // Validation des données
    //     $validated = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|email',
    //         'room' => 'required|string|max:255',
    //     ]);

    //     // Vous pouvez sauvegarder la réservation dans la base de données ici
    //     HotelReservation::create($validated);

    //     return response()->json(['message' => 'Chambre réservée avec succès']);
    // }
}
