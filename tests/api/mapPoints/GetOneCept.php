<?php 

$I = new ApiTester($scenario);
$I->wantTo('get one mapPoint');
$I->amBearerAuthenticated(ACCESS_TOKEN);
$I->sendGET('/mapPoints/1');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseJsonMatchesJsonPath('$._meta.id');
$I->seeResponseJsonMatchesJsonPath('$.gps.altitude');
$I->seeResponseJsonMatchesJsonPath('$.gps.latitude');
$I->seeResponseJsonMatchesJsonPath('$.gps.longitude');
$I->seeResponseJsonMatchesJsonPath('$.node');
$I->seeResponseJsonMatchesJsonPath('$.scheme._meta.id');
$I->seeResponseJsonMatchesJsonPath('$.x');
$I->seeResponseJsonMatchesJsonPath('$.y');
