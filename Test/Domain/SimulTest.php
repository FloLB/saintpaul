<?php
/**
 * Created by PhpStorm.
 * User: 14LEBRASF
 * Date: 17/03/2016
 * Time: 10:41
 */

namespace stpaul\Domain;
use stpaul\IHM\Simul;

require_once '../../src/stpaul/IHM/Simul.php';

/**
 * Class SimulTest
 * @package stpaul\Domain
 */
class SimulTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Simul
     */
    protected $object;


    protected function setUp()
    {
        $this->object = new Simul();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    public function testCalculReducQF()
    {
        $this->object->setFamQF(400);
        $this->object->setSejMBI(170);

        $resultatAttendu = '17';

        $resultatObserve =$this->object->calculReducQF();


        $this->assertEquals($resultatAttendu, $resultatObserve);

    }
    public function testCalculReducQFnull()
    {
        $this->object->setFamQF(500);
        $this->object->setSejMBI(170);

        $resultatAttendu = '0';

        $resultatObserve =$this->object->calculReducQF();


        $this->assertEquals($resultatAttendu, $resultatObserve);

    }

    public function testCalcul()
    {
        $this->object->setFamQF(500);
        $this->object->setSejMBI(170);

        $resultatAttendu = '0';

        $resultatObserve =$this->object->calculReducQF();


        $this->assertEquals($resultatAttendu, $resultatObserve);

    }
}
