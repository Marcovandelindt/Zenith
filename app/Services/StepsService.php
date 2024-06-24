<?php

namespace App\Services;

use App\Models\Step;

class StepsService
{
    /**
     * Get steps by month and year
     *
     * @return int
     */
    public function getStepsByMonthAndYear($month, $year)
    {
        $steps = Step::whereYear('date', $year)->whereMonth('date', $month)->get();

        if (!$steps->isEmpty()) {
            $totalMonthlySteps = 0;
            foreach ($steps as $step) {
                $totalMonthlySteps += $step->amount;
            }

            return $totalMonthlySteps;
        }

        return 0;
    }

}
