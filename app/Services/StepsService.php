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

    /**
     * Calculate the hours in movement
     *
     * @param int $stepLength
     * @param int $amountOfSteps
     * @param float $walkingSpeed
     *
     * @return string
     */
    public function calculateMovementInHours(int $stepLength, int $amountOfSteps, float $walkingSpeed): string
    {
        $totalDistanceCentimeters = $amountOfSteps * $stepLength;

        $totalDistanceKilometers = $totalDistanceCentimeters / 100000;

        $totalTimeInHours = $totalDistanceKilometers / $walkingSpeed;

        # Set the total amount of hours and minutes
        $hours = intdiv($totalTimeInHours, 1);
        $minutes = round(($totalTimeInHours - $hours) * 60);

        return $hours . ' uur en ' . $minutes . ' minuten';
    }

    /**
     * Get all the steps based on a year
     *
     * @param int $year
     *
     * @returns int
     */
    public function getAllStepsByYear(int $year): int
    {
        $steps = Step::whereYear('date', $year)->get();

        $totalAmountOfSteps = 0;
        if (!$steps->isEmpty()) {
            foreach ($steps as $step) {
                $totalAmountOfSteps += $step->amount;
            }
        }

        return $totalAmountOfSteps;
    }
}
