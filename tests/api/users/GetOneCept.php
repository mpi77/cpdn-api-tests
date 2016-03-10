<?php 

$I = new ApiTester($scenario);
$I->wantTo('get one user');
$I->amBearerAuthenticated(ACCESS_TOKEN);
$I->sendGET('/users/1');
$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
$I->seeResponseJsonMatchesJsonPath('$._meta.id');
$I->seeResponseJsonMatchesJsonPath('$.nick');
$I->seeResponseJsonMatchesJsonPath('$.contact.firstname');
$I->seeResponseJsonMatchesJsonPath('$.contact.surname');
$I->seeResponseJsonMatchesJsonPath('$.contact.email');
$I->seeResponseJsonMatchesJsonPath('$.contact.phone');
