<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.identifiable_object.handler.cms_page_form_handler' shared service.

return $this->services['prestashop.core.form.identifiable_object.handler.cms_page_form_handler'] = ${($_ = isset($this->services['prestashop.core.form.identifiable_object.handler.form_handler_factory']) ? $this->services['prestashop.core.form.identifiable_object.handler.form_handler_factory'] : $this->load('getPrestashop_Core_Form_IdentifiableObject_Handler_FormHandlerFactoryService.php')) && false ?: '_'}->create(${($_ = isset($this->services['prestashop.core.form.identifiable_object.data_handler.cms_page_form_data_handler']) ? $this->services['prestashop.core.form.identifiable_object.data_handler.cms_page_form_data_handler'] : $this->load('getPrestashop_Core_Form_IdentifiableObject_DataHandler_CmsPageFormDataHandlerService.php')) && false ?: '_'});
