<?php

class MobWeb_CustomProductMetaTags_Model_Observer
{
	public function catalogControllerProductView($observer)
	{
		$product = $observer->getProduct();
		if($product INSTANCEOF Mage_Catalog_Model_Product) {
			// Here you can dynamically update the product's meta tags
			//$product->setMetaTitle();
			//$product->setMetaDescription();
		}
	}
}