<?php 

$I = new ApiTester($scenario);
$I->wantTo('get one task');
$I->amBearerAuthenticated(ACCESS_TOKEN);
$I->sendGET('/tasks/1');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseJsonMatchesJsonPath('$._meta.id');
$I->seeResponseJsonMatchesJsonPath('$.user._meta.id');
$I->seeResponseJsonMatchesJsonPath('$.executor._meta.id');
$I->seeResponseJsonMatchesJsonPath('$.scheme._meta.id');
$I->seeResponseJsonMatchesJsonPath('$.status');
$I->seeResponseJsonMatchesJsonPath('$.priority');
$I->seeResponseJsonMatchesJsonPath('$.command');
$I->seeResponseJsonMatchesJsonPath('$.result');
