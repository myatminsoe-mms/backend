<?php

namespace App\Helpers;

use Illuminate\Support\Carbon;

class DateBetween
{
    public static function dateBetween($query, $dateBetween)
    {
        if (count($dateBetween) > 0) {
            $dateBetween = collect($dateBetween)->filter()->toArray();
            if (count($dateBetween) == 1 || $dateBetween[0] == $dateBetween[1]) {
                return $query->whereDate('created_at', Carbon::create($dateBetween[0])->format('Y-m-d'));
            } else {
                return $query->whereBetween('created_at', [Carbon::create($dateBetween[0])->format('Y-m-d'), Carbon::create($dateBetween[1])->format('Y-m-d')]);
            }
        }

        return $query;
    }
}
