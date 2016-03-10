<?php 

$I = new ApiTester($scenario);
$I->wantTo('get unknown section');
$I->amBearerAuthenticated(ACCESS_TOKEN);
$I->sendGET('/sections/123456789');
$I->seeResponseCodeIs(404);
$I->seeResponseIsJson();
