<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.constraint_validator.clean_html_validator' shared service.

return $this->services['prestashop.core.constraint_validator.clean_html_validator'] = new \PrestaShop\PrestaShop\Core\ConstraintValidator\CleanHtmlValidator(($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->getBoolean("PS_ALLOW_HTML_IFRAME"));
