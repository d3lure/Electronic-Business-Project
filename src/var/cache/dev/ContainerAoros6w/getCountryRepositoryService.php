<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\Module\PsxMarketingWithGoogle\Repository\CountryRepository' shared service.

return $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Repository\\CountryRepository'] = new \PrestaShop\Module\PsxMarketingWithGoogle\Repository\CountryRepository(${($_ = isset($this->services['psxmarketingwithgoogle.db']) ? $this->services['psxmarketingwithgoogle.db'] : $this->load('getPsxmarketingwithgoogle_DbService.php')) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle.context']) ? $this->services['psxmarketingwithgoogle.context'] : $this->load('getPsxmarketingwithgoogle_ContextService.php')) && false ?: '_'}, ${($_ = isset($this->services['psxmarketingwithgoogle.country']) ? $this->services['psxmarketingwithgoogle.country'] : $this->load('getPsxmarketingwithgoogle_CountryService.php')) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PsxMarketingWithGoogle\\Adapter\\ConfigurationAdapter'] : $this->load('getConfigurationAdapter2Service.php')) && false ?: '_'});