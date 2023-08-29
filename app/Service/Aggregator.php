<?php

namespace App\Service;

use App\Service\Command;
use Illuminate\Http\Request;

class Aggregator
{

    protected Request $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function getData()
    {

        $commands = [];
        foreach ($this->request->request as $item)
        {
            $command = new Command();
            $command->setName($item['name']);
            $command->setStartDate($item['start']);
            $command->setEndDate($item['end']);
            $commands[] = $command;
        }
        return $commands;
    }
}
