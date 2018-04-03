    <?php


    use service\ServiceInterface;

    require_once('ServiceInterface.php');
    require_once('BaseService.php');

    class Card implements ServiceInterface
    {
        protected $serviceInterface;

        public function __construct(ServiceInterface $serviceInterface)
        {
            $this->serviceInterface = $serviceInterface;
        }

        public function getCost()
        {
            return $this->serviceInterface -> getCost() + 2;
        }

        public function getDescription()
        {
            return $this->serviceInterface -> getDescription() . ', Листівка';
        }
    }

    class Basket implements \service\ServiceInterface
    {
        protected $ServiceInterface;
        private $serviceInterface;

        public function __construct(ServiceInterface $serviceInterface)
        {
            $this->serviceInterface = $serviceInterface;
        }

        public function getCost()
        {
            return $this->serviceInterface->getCost() + 5;
        }

        public function getDescription()
        {
            return $this->serviceInterface->getDescription() . ', Оформлення букету';
        }
    }

    class Bow implements ServiceInterface
    {
        protected $serviceInterface;

        public function __construct(ServiceInterface $serviceInterface)
        {
            $this->serviceInterface = $serviceInterface;
        }

        public function getCost()
        {
            return $this->serviceInterface->getCost() + 3;
        }

        public function getDescription()
        {
            return $this->serviceInterface->getDescription() . ', Батик';
        }
    }

//    test

    $someDel = new \service\FlowerDelivery();
    echo $someDel->getCost()." - ";
    echo $someDel->getDescription()."\n";

    $someDel = new Card($someDel);
    echo $someDel->getCost()." - ";
    echo $someDel->getDescription()."\n";

    $someDel = new Basket($someDel);
    echo $someDel->getCost()." - ";
    echo $someDel->getDescription()."\n";

    $someDel = new Bow($someDel);
    echo $someDel->getCost()." - ";
    echo $someDel->getDescription()."\n";