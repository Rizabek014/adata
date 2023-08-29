<?php

namespace App\Service;
use App\Service\Command;
class CalculateExperienceService
{
    public function execute(array $calculateDatas)
    {
        $experience = 0;
        $endDates = [];
        foreach ($calculateDatas as $calculateData)
        {
            $is_intersects = false;
            $startDate = explode(".", $calculateData->getStartDate());
            $endDate = explode(".", $calculateData->getEndDate());

            foreach ($endDates as $item)
            {
                if(intval($item[0]) > intval($startDate[0]) && $item[1]%1000 == $startDate[1]%1000)
                {
                    $startDateMonth = intval($item[0]);
                    $startDateYear = intval($item[1]) % 1000;

                    $endDateMonth = intval($endDate[0]);
                    $endDateYear = intval($endDate[1]) % 1000;
                    $experience += ($endDateYear - $startDateYear) * 12 + ($endDateMonth - $startDateMonth);
                    $is_intersects = true;
                    break;
                }
            }

            if(!$is_intersects)
            {
                $startDateMonth = intval($startDate[0]);
                $startDateYear = intval($startDate[1]) % 1000;

                $endDateMonth = intval($endDate[0]);
                $endDateYear = intval($endDate[1]) % 1000;

                $experience += ($endDateYear - $startDateYear) * 12 + ($endDateMonth - $startDateMonth);
            }

            array_push($endDates, $endDate);
        }

        return $experience;
    }
}
