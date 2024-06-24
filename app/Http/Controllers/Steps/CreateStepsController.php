<?php

namespace App\Http\Controllers\Steps;

use App\Models\Step;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class CreateStepsController extends Controller
{
    /**
     * Show the create view
     *
     * @returns View
     */
    public function index(): View
    {
        $data = [
            'title' => 'Stappen toevoegen',
        ];

        return view('steps.create')->with([
            'data' => $data
        ]);
    }

    /**
     * Create a new entry for the steps
     *
     * @param Request $request
     *
     * @returns RedirectResponse
     */
    public function create(Request $request): RedirectResponse
    {
        $existingEntry = Step::where('date', $request->date)->first();

        if (!empty($existingEntry)) {
            return redirect()->back()->with([
                'error' => 'Er bestaat al een entry met deze datum',
            ]);
        }

        $step = new Step();
        $step->amount = $request->amount;
        $step->date = $request->date;

        try {
            $step->save();
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'error' => 'Stappen konden niet worden opgeslagen: ' . $e->getMessage(),
            ]);
        }

        return redirect()->route('steps.index')->with([
            'success' => 'Stappen succesvol toegevoegd',
        ]);
    }
}
