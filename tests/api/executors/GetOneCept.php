<?php 

$I = new ApiTester($scenario);
$I->wantTo('get one executor');
$I->amBearerAuthenticated(ACCESS_TOKEN);
$I->sendGET('/executors/javaExecDC1');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseJsonMatchesJsonPath('$._meta.id');
$I->seeResponseJsonMatchesJsonPath('$.title');
$I->seeResponseJsonMatchesJsonPath('$.status');
