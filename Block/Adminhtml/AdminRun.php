<?php
namespace Smart\AdminRun\Block\Adminhtml;
class AdminRun extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
		
        $this->_controller = 'adminhtml_adminrun';/*block grid.php directory*/
        $this->_blockGroup = 'Smart_AdminRun';
        $this->_headerText = __('AdminRun');
        $this->_addButtonLabel = __('Add New Entry'); 
        parent::_construct();
		
    }
}
