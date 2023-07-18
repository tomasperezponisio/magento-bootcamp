<?php

namespace NTTData\Practice\Block\Product;

class Productlist extends \Magento\Framework\View\Element\Template
{
   /**
     * @var \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory
     */
    protected $_productCollectionFactory;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory
    ) {
        $this->_productCollectionFactory = $productCollectionFactory;
        parent::__construct($context);
    }    

    public function getProductCollectionByCategories()
    {
        $collection = $this->_productCollectionFactory->create();
        $collection->addAttributeToSelect('*');       
        $collection->setOrder('name', 'DESC'); // Ordena por el atributo "name" en orden descendente
        $collection->setPageSize(10); // Establece el tamaño de página en 10

        return $collection;        
    }

    public function mostrarClase()
	{
		return __(get_class($this));
	}
} 
?>