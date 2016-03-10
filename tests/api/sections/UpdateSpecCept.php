<?php 
/*
$I = new ApiTester($scenario);
$I->wantTo('update section\'s spec');
$I->amBearerAuthenticated(ACCESS_TOKEN);
$I->haveHttpHeader('Content-Type', 'application/json');
$I->sendPOST('/sections/1/spec', [
        "type" => "line",
        "conductance" => 0.1,
        "status" => null,
        "susceptance" => 0.1,
        "current" => [
            "max" => 0.1,
            "noLoad" => 0.1
        ],
        "reactance" => [
            "ratio" => 0.1,
            "value" => 0.1
        ],
        "resistance" => [
            "ratio" => 0.1,
            "value" => 0.1
        ],
        "losses" => [
            "noLoad" => 0.1,
            "short" => [
                "ab" => 0.1,
                "ac" => 0.1,
                "bc" => 0.1
            ]
        ],
        "power" => [
            "rated" => [
                "ab" => 0.1,
                "ac" => 0.1,
                "bc" => 0.1
            ]
        ],
        "voltage" => [
            "pri" => [
                "actual" => 0.1,
                "rated" => 0.1
            ],
            "sec" => [
                "actual" => 0.1,
                "rated" => 0.1
            ],
            "trc" => [
                "actual" => 0.1,
                "rated" => 0.1
            ],
            "short" => [
                "ab" => 0.1,
                "ac" => 0.1,
                "bc" => 0.1
            ]
        ]
        ]);
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
*/
