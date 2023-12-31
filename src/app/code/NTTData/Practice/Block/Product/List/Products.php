<?php

namespace NTTData\Practice\Block\Product\List;

class Products extends \NTTData\Practice\Block\Product\Productlist
{
    public function __construct(
		\Magento\Backend\Block\Template\Context $context,
    	\Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory)
	{
		parent::__construct($context, $productCollectionFactory);		
	}

}
