<?php
/**
 * Copyright © 2015 Smart. All rights reserved.
 */
namespace Smart\AdminRun\Model\ResourceModel;

/**
 * AdminRun resource
 */
class AdminRun extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('adminrun', 'id');
    }

  
}
