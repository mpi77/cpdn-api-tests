<?php 

$I = new ApiTester($scenario);
$I->wantTo('get one node');
$I->amBearerAuthenticated(ACCESS_TOKEN);
$I->sendGET('/nodes/1');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseJsonMatchesJsonPath('$._meta.id');
$I->seeResponseJsonMatchesJsonPath('$.calc._meta.id');
$I->seeResponseJsonMatchesJsonPath('$.spec._meta.id');
$I->seeResponseJsonMatchesJsonPath('$.scheme._meta.id');
