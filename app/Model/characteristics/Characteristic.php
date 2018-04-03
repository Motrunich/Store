<?php

namespace app\Model\characteristics;


    class Characteristic implements CharacteristicsInterface
    {
        protected $nameCh;
        protected $discriptionCh;
        protected $category;

        public function __construct($nameCh, $discriptionCh, $category)
        {
            $this->nameCh = $nameCh;
            $this->discriptionCh = $discriptionCh;
            $this->category = $category;
        }

        public function getNameCh()
        {
            return $this->nameCh;
        }

        public function getDiscriptionCh()
        {
            return $this->discriptionCh;
        }
        public function getcategory()
        {
            return $this->category;
        }

    }
