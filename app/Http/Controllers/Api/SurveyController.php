<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Survey;

class SurveyController extends Controller
{
    public function index()
    {
        $surveys = Survey::all();
        return $surveys;
    }

    public function store(Request $request)
    {
        $survey = new Survey();
        $survey->dni = $request->dni;
        $survey->product = $request->product;
        $survey->by_product = $request->by_product;
        $survey->maintenance = $request->maintenance;
        $survey->state = $request->state;
        $survey->create_survey = $request->create_survey;
        $survey->last_change = $request->last_change;

        $survey->save();
    }

    public function show(string $id)
    {
        $survey = Survey::find($id);
        return $survey;
    }

    public function update(Request $request, string $id)
    {
        $survey = Survey::find($id);
        $survey->dni = $request->dni;
        $survey->product = $request->product;
        $survey->by_product = $request->by_product;
        $survey->maintenance = $request->maintenance;
        $survey->state = $request->state;
        $survey->create_survey = $survey->create_survey;
        $survey->last_change = $request->last_change;

        $survey->save();
        return $survey;
    }

    public function destroy(string $id)
    {
        $survey = Survey::destroy($id);
        return $survey;
    }
}
