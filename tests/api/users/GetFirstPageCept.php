<?php 

$I = new ApiTester($scenario);
$I->wantTo('get first page of users');
$I->amBearerAuthenticated(ACCESS_TOKEN);
$I->sendGET('/users');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseJsonMatchesJsonPath('$._meta');
$I->seeResponseJsonMatchesJsonPath('$.items');
$I->seeResponseJsonMatchesJsonPath('$.items.[]');
$I->seeResponseJsonMatchesJsonPath('$.first');
$I->seeResponseJsonMatchesJsonPath('$.last');
$I->seeResponseJsonMatchesJsonPath('$.next');
$I->seeResponseJsonMatchesJsonPath('$.previous');
