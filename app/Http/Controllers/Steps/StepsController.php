<?php

namespace App\Http\Controllers\Steps;

use App\Http\Controllers\Controller;
use App\Models\Step;
use App\Services\StepsService;
use Illuminate\Contracts\View\View;
use Illuminate\Tests\Integration\Database\EloquentHasManyThroughTest\Product;

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

        if (date('m') == '01') {
            $previousMonth = 12;
        } else {
            $previousMonth = date('m') - 1;
        }

        $previousMonthSteps = $this->stepsService->getStepsByMonthAndYear($previousMonth, date('Y'));
        $hoursInMovement = $this->stepsService->calculateMovementInHours(67, $stepsByMonthAndYear, 4.8);

        $data = [
            'title' => 'Stappen',
        ];

        return view('steps.index')->with([
            'steps' => $steps,
            'data' => $data,
            'stepsByMonthAndYear' => $stepsByMonthAndYear,
            'hoursInMovement' => $hoursInMovement,
            'previousMonthSteps' => $previousMonthSteps,
        ]);
    }
}
