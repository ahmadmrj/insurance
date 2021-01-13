<?php

namespace App\Http\Controllers;

use App\Services\FormDataService;
use Illuminate\Http\Request;
use App\Services\FormService;

class FormController extends Controller
{
    public function truckingQuickQuote(FormService $formService)
    {
        $formFields = $formService->getFormByName('trucking_quick_quote');

        return view("FormQuote", ['fields' => $formFields]);
    }

    public function submitQuote(Request $request, FormService $formService)
    {
        if (!$userId = $formService->save($request->all())) {
            abort(500);
        }

        $hash = base64_encode(serialize(['user' => $userId]));
        
        return view("FormSubmitted", ['url' => url("/view/{$hash}")]);
    }

    public function viewForm(FormDataService $formDataService, $hash)
    {
        $data = @unserialize(base64_decode($hash));
        if ($data === false || !isset($data['user'])) {
            abort(404);
        }

        $elements = $formDataService->getByUserId($data['user']);
        
        if (empty($elements)) {
            abort(404);
        }

        return view("FormQuotePrint", ['elements' => $elements]);
    }
}
