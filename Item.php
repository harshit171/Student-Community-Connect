<?php
 
    class Item {

        public $itemName;
        public $itemType;
        public $quantity;
        public $itemPrice;
        public $owner;

        function __construct($itemName, $itemType, $quantity, $itemPrice, $owner) {

            $this->itemName = $itemName;
            $this->itemType = $itemType;
            $this->quantity = $quantity;
            $this->itemPrice = $itemPrice;
            $this->owner = $owner;

        }

    }

?>