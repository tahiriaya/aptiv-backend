<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function submitFeedback(Request $request)
    {
        $validatedData = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'feedback' => 'required|string'
        ]);

        $feedback = new Feedback();
        $feedback->first_name = $validatedData['firstName'];
        $feedback->last_name = $validatedData['lastName'];
        $feedback->email = $validatedData['email'];
        $feedback->phone = $validatedData['phone'];
        $feedback->feedback = $validatedData['feedback'];
        $feedback->save();

        return response()->json(['message' => 'Feedback submitted successfully!'], 200);
    }
    public function index()
    {
        // Récupère tous les feedbacks
        $feedbacks = Feedback::all();
        
        // Retourne les feedbacks en format JSON
        return response()->json($feedbacks);
    }
}
?>