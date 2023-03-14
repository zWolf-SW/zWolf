<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('уйня', "h1");

        $I->seeLink('Join', '/site/join');
        $I->seeLink("Login", '/site/login');

        $I->amOnPage('/site/join');
        $I->see('Join', "h1");

        $I->amOnPage('/site/login');
        $I->see('Log in', "h1");
    }
}
