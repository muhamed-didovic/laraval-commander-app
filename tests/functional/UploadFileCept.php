<?php 
$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('upload csv file');


$I->amOnPage('/');
$I->fillField('Enter email:', 'john@doe.com');
$I->attachFile('Select file:', 'test.csv');
$I->click('Send');


$I->seeCurrentUrlEquals('/store');
$I->see('Results:');
$I->see('Thank you john@doe.com The result of the sorting is:');