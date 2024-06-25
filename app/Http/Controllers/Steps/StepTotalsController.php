<?php

namespace App\Http\Controllers\Steps;

use App\Models\Step;
use App\Services\StepsService;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class StepTotalsController extends Controller
{
    protected $stepsService;

    /**
     * Constructor
     */
    public function __construct(StepsService $stepsService)
    {
        $this->stepsService = $stepsService;
    }

    /**
     * Index action
     *
     * @return View
     */
    public function index(): View
    {
        $data = [
            'title' => 'Totale statisiteken'
        ];

        $stepsByYear = $this->stepsService->getAllStepsByYear(date('Y'));
        $hoursInMovement = $this->stepsService->calculateMovementInHours(67, $stepsByYear, 5);

        return view('steps.totals')->with([
            'data' => $data,
            'stepsByYear' => $stepsByYear,
            'hoursInMovement' => $hoursInMovement,
        ]);
    }
}
