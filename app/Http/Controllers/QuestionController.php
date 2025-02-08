<?php
namespace App\Http\Controllers;
use App\Models\Question;

class QuestionController extends Controller {
    public function index($id) {
        return response()->json(
            Question::where('level_id', $id)
                ->with('answers')
                ->get()
        );
    }
}