<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.identifiable_object.data_handler.product_form_data_handler' shared service.

return $this->services['prestashop.core.form.identifiable_object.data_handler.product_form_data_handler'] = new \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\ProductFormDataHandler(${($_ = isset($this->services['prestashop.core.command_bus']) ? $this->services['prestashop.core.command_bus'] : $this->load('getPrestashop_Core_CommandBusService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.form.command_builder.product_commands_builder']) ? $this->services['prestashop.core.form.command_builder.product_commands_builder'] : $this->load('getPrestashop_Core_Form_CommandBuilder_ProductCommandsBuilderService.php')) && false ?: '_'});
