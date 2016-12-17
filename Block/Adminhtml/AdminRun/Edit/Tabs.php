<?php
namespace Smart\AdminRun\Block\Adminhtml\AdminRun\Edit;

class Tabs extends \Magento\Backend\Block\Widget\Tabs
{
    protected function _construct()
    {
		
        parent::_construct();
        $this->setId('checkmodule_adminrun_tabs');
        $this->setDestElementId('edit_form');
        $this->setTitle(__('AdminRun Information'));
    }
}