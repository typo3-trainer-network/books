<?php
declare(strict_types=1);

namespace TTN\Books\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Controller for actions that do not make use of models.
 *
 * @author Oliver Klee <typo3-coding@oliverklee.de>
 */
class HelloWorldController extends ActionController
{
    public function greetWithoutTemplateAction(): string
    {
        return 'Welcome home, traveller! Would you like something to read?';
    }
}
