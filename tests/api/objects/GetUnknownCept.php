<?php 

$I = new ApiTester($scenario);
$I->wantTo('get unknown object');
$I->amBearerAuthenticated(ACCESS_TOKEN);
$I->sendGET('/objects/123456789');
$I->seeResponseCodeIs(404);
$I->seeResponseIsJson();
