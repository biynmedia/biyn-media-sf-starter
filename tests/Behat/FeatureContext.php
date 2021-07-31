<?php

declare(strict_types=1);

namespace App\Tests\Behat;

use Behat\Behat\Context\Context;
use Behat\Mink\Session;
use Behat\MinkExtension\Context\MinkAwareContext;
use Behat\MinkExtension\Context\MinkContext;
use Symfony\Component\Routing\RouterInterface;

/**
 * This context class contains the definitions of the steps used by the demo
 * feature file. Learn how to get started with Behat and BDD on Behat's website.
 *
 * @see http://behat.org/en/latest/quick_start.html
 */
final class FeatureContext extends MinkContext implements MinkAwareContext
{

    /** @var Session */
    private $session;

    /** @var RouterInterface */
    private $router;

    public function __construct(Session $session, RouterInterface $router)
    {
        $this->session = $session;
        $this->router = $router;
    }
}
