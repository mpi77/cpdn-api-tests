<?php 

$I = new ApiTester($scenario);
$I->wantTo('get one permission');
$I->amBearerAuthenticated(ACCESS_TOKEN);
$I->sendGET('/permissions/1');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseJsonMatchesJsonPath('$._meta.id');
$I->seeResponseJsonMatchesJsonPath('$.mode');
$I->seeResponseJsonMatchesJsonPath('$.tsFrom');
$I->seeResponseJsonMatchesJsonPath('$.tsTo');
$I->seeResponseJsonMatchesJsonPath('$.user._meta.id');
$I->seeResponseJsonMatchesJsonPath('$.scheme._meta.id');
