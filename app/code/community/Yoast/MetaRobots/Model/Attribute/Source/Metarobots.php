<?php
/**
 * Yoast_MetaRobots
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the H&O Commercial License
 * that is bundled with this package in the file LICENSE_HO.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.h-o.nl/license
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to info@h-o.com so we can send you a copy immediately.
 *
 * @category    Yoast
 * @package     Yoast_MetaRobots
 * @copyright   Copyright © 2013 H&O (http://www.h-o.nl/)
 * @license     H&O Commercial License (http://www.h-o.nl/license)
 * @author      Stephan van Iterson – H&O <info@h-o.nl>
 *
 *
 */
class Yoast_MetaRobots_Model_Attribute_Source_Metarobots
    extends Mage_Eav_Model_Entity_Attribute_Source_Abstract
{
    const META_ROBOTS_INDEX_FOLLOW               = 1;
    const META_ROBOTS_INDEX_NOFOLLOW             = 2;
    const META_ROBOTS_NOINDEX_FOLLOW             = 3;
    const META_ROBOTS_NOINDEX_NOFOLLOW           = 4;
    const META_ROBOTS_INDEX_FOLLOW_NOARCHIVE     = 5;
    const META_ROBOTS_INDEX_NOFOLLOW_NOARCHIVE   = 6;
    const META_ROBOTS_NOINDEX_NOFOLLOW_NOARCHIVE = 7;
    const META_ROBOTS_NOODP_NOYDIR               = 8;


    /**
     * @return array
     */
    public function getAllOptions()
    {
        return array(
            self::META_ROBOTS_INDEX_FOLLOW               => array('value' => self::META_ROBOTS_INDEX_FOLLOW,               'label' => 'INDEX,FOLLOW'),
            self::META_ROBOTS_INDEX_NOFOLLOW             => array('value' => self::META_ROBOTS_INDEX_NOFOLLOW,             'label' => 'INDEX,NOFOLLOW'),
            self::META_ROBOTS_NOINDEX_FOLLOW             => array('value' => self::META_ROBOTS_NOINDEX_FOLLOW,             'label' => 'NOINDEX,FOLLOW'),
            self::META_ROBOTS_NOINDEX_NOFOLLOW           => array('value' => self::META_ROBOTS_NOINDEX_NOFOLLOW,           'label' => 'NOINDEX,NOFOLLOW'),
            self::META_ROBOTS_INDEX_FOLLOW_NOARCHIVE     => array('value' => self::META_ROBOTS_INDEX_FOLLOW_NOARCHIVE,     'label' => 'INDEX,FOLLOW,NOARCHIVE'),
            self::META_ROBOTS_INDEX_NOFOLLOW_NOARCHIVE   => array('value' => self::META_ROBOTS_INDEX_NOFOLLOW_NOARCHIVE,   'label' => 'INDEX,NOFOLLOW,NOARCHIVE'),
            self::META_ROBOTS_NOINDEX_NOFOLLOW_NOARCHIVE => array('value' => self::META_ROBOTS_NOINDEX_NOFOLLOW_NOARCHIVE, 'label' => 'NOINDEX,NOFOLLOW,NOARCHIVE'),
            self::META_ROBOTS_NOODP_NOYDIR               => array('value' => self::META_ROBOTS_NOODP_NOYDIR,               'label' => 'NOODP,NOYDIR'),
        );
    }


    /**
     * @param int $key
     * @return mixed
     */
    public function getOptionLabel($key) {
        $options = $this->getAllOptions();

        return isset($options[$key]) ? $options[$key]['label'] : $options[self::META_ROBOTS_INDEX_FOLLOW]['label'];
    }
}
