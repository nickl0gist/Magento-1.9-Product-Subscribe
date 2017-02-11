<?php
/**
 * Created by PhpStorm.
 * User: Horkov Mykola
 * Date: 28.01.2017
 * Time: 19:53
 */

/** @var Mage_Core_Model_Resource_Setup $installer */

$installer = $this;
$installer->startSetup();
/*$installer->run("
CREATE TABLE IF NOT EXISTS `{$this->getTable('productavailability/block')}` (
  `subs_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `prod_id` int(11) NOT NULL,
  PRIMARY KEY (`subs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
");*/
$table = $installer->getConnection()
    ->newTable($installer->getTable('productavailability/block'))
    ->addColumn('subs_id',Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity' => true,
        'unsigned' => true,
        'nullable' => false,
        'primary'  => true
    ))
    ->addColumn('user_id',Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'nullable' => false,
    ))
    ->addColumn('user_email',Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
        'nullable' => false,
    ))
    ->addColumn('prod_id',Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'nullable' => false,
    ))
    ->addColumn('created_at',Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'nullable' => false,
    ));
$installer->getConnection()->createTable($table);
$installer->endSetup();

