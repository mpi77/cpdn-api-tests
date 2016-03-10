<?php 

$I = new ApiTester($scenario);
$I->wantTo('get unknown task');
$I->amBearerAuthenticated(ACCESS_TOKEN);
$I->sendGET('/tasks/123456789');
$I->seeResponseCodeIs(404);
$I->seeResponseIsJson();
