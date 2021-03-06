<?php 
/*
$I = new ApiTester($scenario);
$I->wantTo('create new section');
$I->amBearerAuthenticated(ACCESS_TOKEN);
$I->haveHttpHeader('Content-Type', 'application/json');
$I->sendPOST('/sections', [
        "calc" => [
            "current" => [
                "dst" => [
                    "phase" => 0.1,
                    "ratio" => 0.1,
                    "value" => 0.1
                ],
                "src" => [
                    "phase" => 0.1,
                    "ratio" => 0.1,
                    "value" => 0.1
                ]
            ],
            "losses" => [
                "active" => 0.1,
                "reactive" => 0.1
            ],
            "power" => [
                "dst" => [
                    "active" => 0.1,
                    "reactive" => 0.1
                ],
                "src" => [
                    "active" => 0.1,
                    "reactive" => 0.1
                ]
            ]
        ],
        "scheme" => 1,
        "nodes" => [
            "dst" => 1,
            "src" => 2,
            "trc" => 3
        ],
        "spec" => [
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
        ]
        ]);
$I->seeResponseCodeIs(201);
$I->seeResponseIsJson();
*/
