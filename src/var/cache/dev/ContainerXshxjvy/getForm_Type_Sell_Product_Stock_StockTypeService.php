<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.sell.product.stock.stock_type' shared service.

return $this->services['form.type.sell.product.stock.stock_type'] = new \PrestaShopBundle\Form\Admin\Sell\Product\Stock\StockType(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getLanguages(), ${($_ = isset($this->services['prestashop.core.form.choice_provider.pack_stock_type_choice_provider']) ? $this->services['prestashop.core.form.choice_provider.pack_stock_type_choice_provider'] : $this->load('getPrestashop_Core_Form_ChoiceProvider_PackStockTypeChoiceProviderService.php')) && false ?: '_'});
