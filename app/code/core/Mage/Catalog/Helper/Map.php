<?php
/**
 * OpenMage
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * @category   Mage
 * @package    Mage_Catalog
 * @copyright  Copyright (c) 2006-2020 Magento, Inc. (http://www.magento.com)
 * @license    https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Catalog (site)map helper
 *
 * @category   Mage
 * @package    Mage_Catalog
 * @author     Magento Core Team <core@magentocommerce.com>
 */
class Mage_Catalog_Helper_Map extends Mage_Core_Helper_Abstract
{
    public const XML_PATH_USE_TREE_MODE = 'catalog/sitemap/tree_mode';

    protected $_moduleName = 'Mage_Catalog';

    /**
     * @return string
     */
    public function getCategoryUrl()
    {
        return $this->_getUrl('catalog/seo_sitemap/category');
    }

    /**
     * @return string
     */
    public function getProductUrl()
    {
        return $this->_getUrl('catalog/seo_sitemap/product');
    }

    /**
     * Return true if category tree mode enabled
     *
     * @return bool
     */
    public function getIsUseCategoryTreeMode()
    {
        return (bool) Mage::getStoreConfigFlag(self::XML_PATH_USE_TREE_MODE);
    }
}
