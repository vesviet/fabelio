<?php
/**
 * Magento
 *
 * @author    WakaMage http://www.wakamage.com <cs@wakamage.com>
 * @copyright Copyright (C) 2013 WakaMage. (http://www.wakamage.com)
 *
 */
class Sprint_Migs_Block_Payment_Form_Migs extends Mage_Payment_Block_Form
{
    /**
     * Set template and redirect message
     */
    protected function _construct()
    {
		$mark = Mage::getConfig()->getBlockClassName('core/template');
        $mark = new $mark;
        $mark->setTemplate('migs/payment/form/migs.phtml');
		
		$this->setTemplate('migs/payment/redirect.phtml')
            ->setMethodTitle('') // Output MIGS mark, omit title
			->setMethodLabelAfterHtml($mark->toHtml());
		
			return parent::_construct();    
	}
}
