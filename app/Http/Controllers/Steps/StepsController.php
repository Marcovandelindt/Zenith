<?php

namespace App\Http\Controllers\Steps;

use App\Http\Controllers\Controller;
use App\Models\Step;
use App\Services\StepsService;
use Illuminate\Contracts\View\View;

class StepsController extends Controller
{
    protected $stepsService;

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
        $steps = Step::all();
        $stepsByMonthAndYear = $this->stepsService->getStepsByMonthAndYear(date('m'), date('Y'));

        $data = [
            'title' => 'Stappen',
        ];

        return view('steps.index')->with([
            'steps' => $steps,
            'data' => $data,
            'stepsByMonthAndYear' => $stepsByMonthAndYear,
        ]);
    }
}
