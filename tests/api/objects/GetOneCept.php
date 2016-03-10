<?php 

$I = new ApiTester($scenario);
$I->wantTo('get one object');
$I->amBearerAuthenticated(ACCESS_TOKEN);
$I->sendGET('/objects/1');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseJsonMatchesJsonPath('$._meta.id');
$I->seeResponseJsonMatchesJsonPath('$.name');
$I->seeResponseJsonMatchesJsonPath('$.scheme._meta.id');
