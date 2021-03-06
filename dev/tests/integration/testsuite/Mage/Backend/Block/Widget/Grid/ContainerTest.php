<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @copyright   Copyright (c) 2013 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Mage_Backend_Block_Widget_Grid_ContainerTest extends PHPUnit_Framework_TestCase
{
    public function testPseudoConstruct()
    {
        /** @var $block Mage_Backend_Block_Widget_Grid_Container */
        $block = Mage::app()->getLayout()->createBlock('Mage_Backend_Block_Widget_Grid_Container', '', array(
            Mage_Backend_Block_Widget_Container::PARAM_CONTROLLER => 'widget',
            Mage_Backend_Block_Widget_Container::PARAM_HEADER_TEXT => 'two',
            Mage_Backend_Block_Widget_Grid_Container::PARAM_BLOCK_GROUP => 'Mage_Backend',
            Mage_Backend_Block_Widget_Grid_Container::PARAM_BUTTON_NEW => 'four',
            Mage_Backend_Block_Widget_Grid_Container::PARAM_BUTTON_BACK => 'five',
        ));
        $this->assertStringEndsWith('widget', $block->getHeaderCssClass());
        $this->assertContains('two', $block->getHeaderText());
        $this->assertInstanceOf('Mage_Backend_Block_Widget_Grid', $block->getChildBlock('grid'));
        $this->assertEquals('four', $block->getAddButtonLabel());
        $this->assertEquals('five', $block->getBackButtonLabel());
    }
}
