<?php

namespace App\Http\Controllers;

use App\Models\FaqQuestions;
use App\Models\questions;
use Illuminate\Http\Request;

class FaqQuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('questions.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FaqQuestions $questions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FaqQuestions $questions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FaqQuestions $questions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FaqQuestions $questions)
    {
        //
    }
}