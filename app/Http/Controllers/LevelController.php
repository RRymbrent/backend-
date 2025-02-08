<?php
namespace App\Http\Controllers;
use App\Models\Level;

class LevelController extends Controller {
    public function index($id) {
        return response()->json(
            Level::where('category_id', $id)
                ->with('questions')
                ->get()
        );
    }
}