<?php 

$I = new ApiTester($scenario);
$I->wantTo('get unknown scheme');
$I->amBearerAuthenticated(ACCESS_TOKEN);
$I->sendGET('/schemes/123456789');
$I->seeResponseCodeIs(404);
$I->seeResponseIsJson();
