<?php 

$I = new ApiTester($scenario);
$I->wantTo('get one scheme');
$I->amBearerAuthenticated(ACCESS_TOKEN);
$I->sendGET('/schemes/1');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseJsonMatchesJsonPath('$._meta.id');
$I->seeResponseJsonMatchesJsonPath('$.name');
$I->seeResponseJsonMatchesJsonPath('$.description');
$I->seeResponseJsonMatchesJsonPath('$.lock');
$I->seeResponseJsonMatchesJsonPath('$.version');
