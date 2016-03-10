<?php 

$I = new ApiTester($scenario);
$I->wantTo('get unknown permission');
$I->amBearerAuthenticated(ACCESS_TOKEN);
$I->sendGET('/permissions/123456789');
$I->seeResponseCodeIs(404);
$I->seeResponseIsJson();
