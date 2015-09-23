<?php
/**
 *
 * @category   Yoast
 * @package    Yoast_MetaRobots
 * @copyright  Copyright (c) 2009 Yoast (http://www.yoast.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * @category   Yoast
 * @package    Yoast_MetaRobots
 * @author     Yoast <magento@yoast.com>
 */

$installer = $this;
/* @var Yoast_MetaRobots_Model_Resource_Eav_Mysql4_Setup $installer */

$installer->startSetup();

$installer->installEntities();

$installer->getConnection()->addColumn($installer->getTable('cms_page'), 'meta_robots', 'text NOT NULL');

$installer->endSetup();