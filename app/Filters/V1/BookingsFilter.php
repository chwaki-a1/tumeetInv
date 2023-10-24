<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;

class BookingsFilter extends ApiFilter {


    protected $allowedParams = [
        'name' => ['eq'],
        'email' => ['eq'],
        'meetingRoom' => ['eq','lt','lte','gt','gte'],
        'Attendees' => ['eq','lt','lte','gt','gte','ne'],
        'date' => ['eq','lt','lte','gt','gte','ne'],
        'startTime' => ['eq','lt','lte','gt','gte','ne'],
        'endTime' =>['eq','lt','lte','gt','gte','ne'],
        'title' => ['eq'],
        'description' => ['eq','lt','lte','gt','gte'],
        'projector' => ['eq'],
        'audio' =>['eq'],
        'itassistance' => ['eq'],

    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!='
    ];


}
