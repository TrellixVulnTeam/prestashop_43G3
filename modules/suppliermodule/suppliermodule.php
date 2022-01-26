<?php
/**
 * 2007-2019 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    202-ecommerce <tech@202-ecommerce.com>
 * @copyright Copyright (c) Stripe
 * @license   Commercial license
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once dirname(__FILE__) . '/vendor/autoload.php';

/**
* Stripe object model
*/

// use PrestaShop\PrestaShop\Core\Payment\PaymentOption;

/**
* Stripe official PrestaShop module main class extends payment class
* Please note this module use _202 PrestaShop Classlib Project_ (202 classlib) a library developed by "202 ecommerce"
* This library provide utils common features as DB installer, internal logger, chain of responsibility design pattern
*
* To let module compatible with Prestashop 1.6 please keep this following line commented in PrestaShop 1.6:
* // use Stripe_officialClasslib\Install\ModuleInstaller;
* // use Stripe_officialClasslib\Actions\ActionsHandler;
* // use Stripe_officialClasslib\Extensions\ProcessLogger\ProcessLoggerExtension;
*
* Developers use declarative method to define objects, parameters, controllers... needed in this module
*/

class SupplierModule extends PaymentModule
{

    public $moduleAdminControllers = array(
        array(
            'name' => array(
                'en' => 'Logs',
                'fr' => 'Logs',
            ),
            'class_name' => 'AdminStripe_officialProcessLogger',
            'parent_class_name' => 'stripe_official',
            'visible' => false,
        ),
        array(
            'name' => array(
                'en' => 'Paiment Intent List',
                'fr' => 'Liste des intentions de paiement',
            ),
            'class_name' => 'AdminStripe_officialPaymentIntent',
            'parent_class_name' => 'stripe_official',
            'visible' => false,
        ),
    );
}
