<?php 

$I = new ApiTester($scenario);
$I->wantTo('get first page of mapPoint');
$I->amBearerAuthenticated(ACCESS_TOKEN);
$I->sendGET('/mapPoints?q=(schemeId='.READ_SCHEME.')');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseJsonMatchesJsonPath('$._meta');
$I->seeResponseJsonMatchesJsonPath('$.items');
$I->seeResponseJsonMatchesJsonPath('$.items.[]');
$I->seeResponseJsonMatchesJsonPath('$.first');
$I->seeResponseJsonMatchesJsonPath('$.last');
$I->seeResponseJsonMatchesJsonPath('$.next');
$I->seeResponseJsonMatchesJsonPath('$.previous');
