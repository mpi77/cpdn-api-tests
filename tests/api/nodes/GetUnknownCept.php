<?php 

$I = new ApiTester($scenario);
$I->wantTo('get unknown node');
$I->amBearerAuthenticated(ACCESS_TOKEN);
$I->sendGET('/nodes/123456789');
$I->seeResponseCodeIs(404);
$I->seeResponseIsJson();
