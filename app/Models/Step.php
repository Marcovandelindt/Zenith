<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    protected $fillables = [
        'amount',
        'date',
    ];

    /**
     * Get the formatted date of a step entry
     *
     * @return string
     */
    public function getFormattedDate(): string
    {
        $dateTimeObject = new \DateTime($this->date);
        setlocale(LC_TIME, 'nl_NL.UTF-8');
        $formattedDate = strftime('%A %d %B, %Y', $dateTimeObject->getTimestamp());

        return ucfirst($formattedDate);
    }
}
