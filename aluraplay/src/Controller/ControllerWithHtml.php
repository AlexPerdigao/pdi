<?php

namespace Alura\Mvc\Controller;

use Psr\Http\Server\RequestHandlerInterface;

abstract class ControllerWithHtml implements RequestHandlerInterface
{
    private const string TEMPLATE_PATH = __DIR__ . "/../../views/";

    protected function renderTemplate(string $templateName, array $context = []): string
    {
        extract($context);
        ob_start();
        require_once self::TEMPLATE_PATH . $templateName . ".php";
        return ob_get_clean();


    }

}