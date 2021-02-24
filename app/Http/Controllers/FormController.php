<?php

namespace App\Http\Controllers;

use App\Mail\TruckingQuote;
use App\Models\States;
use App\Services\FormDataService;
use Illuminate\Http\Request;
use App\Services\FormService;
use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Models\FormsData;

class FormController extends Controller
{
    public function truckingQuickQuote(FormService $formService)
    {
        $formFields     = $formService->getFormByName('trucking_quick_quote');
        $states         = States::all();
        $statesDropdown = ['N/A' => 'N/A'];
        
        foreach ($states as $state) {
            $statesDropdown[$state['code']] = $state['name'] . ' (' . $state['code'] . ')';
        }

        return view("FormQuote", ['fields' => $formFields, 'states' => $statesDropdown]);
    }

    public function submitQuote(Request $request, FormService $formService)
    {
        if (!$userId = $formService->save($request)) {
            abort(500);
        }

        $hash = base64_encode(serialize(['user' => $userId]));
        
        Mail::to(config('mail.from.address'))->send(new TruckingQuote($hash));

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

    /**
     * Expose a document to download
     *
     * @param $id
     * @return mixed
     */
    public function downloadAttachment($id) {
        $document = FormsData::find($id);

        return Storage::download(json_decode($document->value), $document->id);
    }
}
