<?php 

$I = new ApiTester($scenario);
$I->wantTo('get unknown mapPoint');
$I->amBearerAuthenticated(ACCESS_TOKEN);
$I->sendGET('/mapPoints/123456789');
$I->seeResponseCodeIs(404);
$I->seeResponseIsJson();
