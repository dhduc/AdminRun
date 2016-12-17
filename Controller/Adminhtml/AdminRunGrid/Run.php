<?php
namespace Smart\AdminRun\Controller\Adminhtml\AdminRunGrid;

/**
 * Class Run
 * @package Smart\AdminRun\Controller\Adminhtml\AdminRunGrid
 */
class Run extends \Magento\Backend\App\Action
{
    public $registry;
    public $catalogSession;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Catalog\Model\Session $catalogSession
    ) {
        $this->registry = $registry;
        $this->catalogSession = $catalogSession;
        return parent::__construct($context);
    }
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        $row = $this->_objectManager->get('Smart\AdminRun\Model\AdminRun')->load($id);
        $command = $row->getData('command');
        if ($row->getData('options')) {
            $command = $command . ' ' . $row->getData('option');
        }

        try {
            $output = shell_exec($command);
            $this->registry->register('adminrun_output', $output);
            $this->catalogSession->setData('adminrun_output', $output);
            $this->messageManager->addSuccess(
                __('Run command %1 successful', $command)
            );
        } catch (\Exception $e) {
            $this->messageManager->addError($e->getMessage());
        }

        $this->_redirect('*/*/');
    }
}
