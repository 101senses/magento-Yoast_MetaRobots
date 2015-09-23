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

$installer->addAttribute(Mage_Catalog_Model_Product::ENTITY,'meta_robots', array(
    'group'             => 'Meta Information',
    'type'              => 'int',
    'backend'           => '',
    'frontend'          => '',
    'label'             => 'Meta Robots',
    'input'             => 'select',
    'class'             => '',
    'source'            => 'metarobots/attribute_source_metarobots',
    'global'            => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible'           => true,
    'required'          => false,
    'user_defined'      => false,
    'default'           => Yoast_MetaRobots_Model_Attribute_Source_Metarobots::META_ROBOTS_INDEX_FOLLOW,
    'searchable'        => false,
    'filterable'        => false,
    'comparable'        => false,
    'visible_on_front'  => false,
    'unique'            => false,
));

if($installer->getConnection()->tableColumnExists($installer->getTable('cms_page'), 'meta_robots')) {
    $installer->getConnection()->dropColumn($installer->getTable('cms_page'), 'meta_robots');
}
$installer->getConnection()->addColumn($installer->getTable('cms_page'), 'meta_robots', "int NOT NULL default '" . Yoast_MetaRobots_Model_Attribute_Source_Metarobots::META_ROBOTS_INDEX_FOLLOW . "'");

$installer->addAttribute(Mage_Catalog_Model_Category::ENTITY, 'meta_robots', array(
    'group'         => 'General Information',
    'input'         => 'select',
    'type'          => 'int',
    'label'         => 'Meta Robots',
    'backend'       => '',
    'visible'       => true,
    'required'      => false,
    'user_defined'  => false,
    'source'        => 'metarobots/attribute_source_metarobots',
    'default'       => Yoast_MetaRobots_Model_Attribute_Source_Metarobots::META_ROBOTS_INDEX_FOLLOW,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
));

$installer->endSetup();