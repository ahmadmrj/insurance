<?php

namespace App\Http\Controllers;

use App\Models\Forms;
use Illuminate\Http\Request;
use App\Models\States;
use App\Services\FormService;
use FormQuote;

class FormController extends Controller
{
    public function truckingQuickQuote(FormService $formService)
    {
        $formFields = $formService->getFormByName('trucking_quick_quote');

        return view("FormQuote", ['fields' => $formFields]);
    }

    public function submitQuote(Request $request, FormService $formService)
    {
        $formData = $request->all();
        
        return view("FormQuotePrint2", $formService->save($formData));
    }
}
