<?php
namespace Magelearn\BookProductType\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UninstallInterface as UninstallInterface;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class Uninstall implements UninstallInterface
{
	/**
	* EAV setup factory
	*
	* @var EavSetupFactory
	*/
	private $_eavSetupFactory;

	private $_mDSetup;
	/**
	* Init
	*
	* @param EavSetupFactory $eavSetupFactory
	*/
	public function __construct(
		EavSetupFactory $eavSetupFactory,
		ModuleDataSetupInterface $mDSetup
	)
	{
		$this->eavSetupFactory = $eavSetupFactory;
		$this->moduleDataSetup = $mDSetup;
	}
	
	public function uninstall(SchemaSetupInterface $setup, ModuleContextInterface $context)
	{
		$this->moduleDataSetup->getConnection()->startSetup();
		/** @var EavSetup $eavSetup */
		$eavSetup = $this->eavSetupFactory->create(['setup' => $this->moduleDataSetup]);
		$eavSetup->removeAttribute(\Magento\Catalog\Model\Product::ENTITY, 'isbn');

		$this->moduleDataSetup->getConnection()->endSetup();
	}
}