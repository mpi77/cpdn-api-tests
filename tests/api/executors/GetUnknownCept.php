<?php 

$I = new ApiTester($scenario);
$I->wantTo('get unknown executor');
$I->amBearerAuthenticated(ACCESS_TOKEN);
$I->sendGET('/executors/123456789');
$I->seeResponseCodeIs(404);
$I->seeResponseIsJson();
