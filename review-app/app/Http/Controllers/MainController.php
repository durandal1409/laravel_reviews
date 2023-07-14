<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class MainController extends Controller
{
    public function home() {
        return view('home');
    }
    public function about() {
        return view('about');
    }
    public function review() {
        $reviews = new Review();
        return view('review', ['reviews' => $reviews->all()]);
    }
    public function review_check(Request $request) {
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'title' => 'required|min:4|max:100',
            'text' => 'required|min:15|max:500'
        ]);

        $review = new Review();
        $review->email = $request->input('email');
        $review->title = $request->input('title');
        $review->text = $request->input('text');

        $review->save();

        return redirect()->route('review');
    }
}
