<?php 

$I = new ApiTester($scenario);
$I->wantTo('create new scheme');
$I->amBearerAuthenticated(ACCESS_TOKEN);
$I->haveHttpHeader('Content-Type', 'application/json');
$I->sendPOST('/schemes', [
        "description" => "",
        "name" => "TEST",
        "version" => 1,
        "lock" => 0]);
$I->seeResponseCodeIs(201);
$I->seeResponseIsJson();
