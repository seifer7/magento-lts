<?php
/**
 * OpenMage
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available at https://opensource.org/license/osl-3-0-php
 *
 * @category   Mage
 * @package    Mage_PaypalUk
 * @copyright  Copyright (c) 2006-2020 Magento, Inc. (https://www.magento.com)
 * @license    https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * PayPal Bill Me Later method
 *
 * @category   Mage
 * @package    Mage_PaypalUk
 * @author     Magento Core Team <core@magentocommerce.com>
 */
class Mage_PaypalUk_Model_Bml extends Mage_Paypal_Model_Bml
{
    /**
     * Payment method code
     * @var string
     */
    protected $_code  = Mage_Paypal_Model_Config::METHOD_WPP_PE_BML;

    /**
     * Checkout payment form
     * @var string
     */
    protected $_formBlockType = 'paypaluk/bml_form';

    /**
     * Checkout redirect URL getter for onepage checkout
     *
     * @return string
     */
    public function getCheckoutRedirectUrl()
    {
        return Mage::getUrl('paypaluk/bml/start');
    }
}
