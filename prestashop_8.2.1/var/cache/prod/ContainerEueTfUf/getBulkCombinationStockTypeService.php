<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Form\Admin\Sell\Product\Combination\BulkCombinationStockType' shared service.

return $this->services['PrestaShopBundle\\Form\\Admin\\Sell\\Product\\Combination\\BulkCombinationStockType'] = new \PrestaShopBundle\Form\Admin\Sell\Product\Combination\BulkCombinationStockType(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getLanguages(), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] ?? ($this->services['PrestaShop\\PrestaShop\\Adapter\\Configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->getBoolean("PS_STOCK_MANAGEMENT"));
