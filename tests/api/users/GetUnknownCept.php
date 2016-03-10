<?php 

$I = new ApiTester($scenario);
$I->wantTo('get unknown user');
$I->amBearerAuthenticated(ACCESS_TOKEN);
$I->sendGET('/users/123456789');
$I->seeResponseCodeIs(404);
$I->seeResponseIsJson();
