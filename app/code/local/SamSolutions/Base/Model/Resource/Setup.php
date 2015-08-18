<?php

class SamSolutions_Base_Model_Resource_Setup extends Mage_Core_Model_Resource_Setup
{
    public function getStoreIdByCode($storeCode)
    {
        $store = Mage::getModel('core/store')->load($storeCode);
        if ($storeId = $store->getId()) {
            return $storeId;
        }
        
        $this->debug('Store "'.$storeCode.'" not found.');
        
        return false;
    }
}
