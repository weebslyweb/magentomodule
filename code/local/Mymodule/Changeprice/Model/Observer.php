<?php

class Mymodule_Changeprice_Model_Observer  {

public function change_price(Varient_Event_Observer $observer) {

        $new_price = 20;
        $item = $observer->getQuoteItem();
        var_dump($item);
        $item->setCustomPrice($new_price);
        $item->setOriginalCustomPrice($new_price);
        $item->getProduct()->setIsSuperMode(true);
        
    }

}
