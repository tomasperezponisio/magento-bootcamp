<?php
namespace NTTData\Test\Controller\Test;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		// echo "Hello World";
		return $this->_pageFactory->create();
	}
}

// https://base_url/frontName/CarpetaInController/archivoInCarpertaController

// si index la carpeta o el archivo, se puede omitir