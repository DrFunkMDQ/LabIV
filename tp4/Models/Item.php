<?php
    namespace Models;

    class Item{
        private $name;
        private $desc;
        private $price;
        private $qty;



        /**
         * Get the value of qty
         */ 
        public function getQty()
        {
                return $this->qty;
        }

        /**
         * Set the value of qty
         *
         * @return  self
         */ 
        public function setQty($qty)
        {
                $this->qty = $qty;

                return $this;
        }

        /**
         * Get the value of price
         */ 
        public function getPrice()
        {
                return $this->price;
        }

        /**
         * Set the value of price
         *
         * @return  self
         */ 
        public function setPrice($price)
        {
                $this->price = $price;

                return $this;
        }

        /**
         * Get the value of desc
         */ 
        public function getDesc()
        {
                return $this->desc;
        }

        /**
         * Set the value of desc
         *
         * @return  self
         */ 
        public function setDesc($desc)
        {
                $this->desc = $desc;

                return $this;
        }

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        public function objectToJson(){
                return $json = ['name'=>$this->getName(), 'desc'=>$this->getDesc(), 'price'=>$this->getPrice(), 'qty'=>$this->getQty()];        
        }
    }
        
?>