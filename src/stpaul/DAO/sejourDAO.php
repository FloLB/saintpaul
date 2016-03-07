<?php
/**
 * Created by PhpStorm.
 * User: 14LEBRASF
 * Date: 07/03/2016
 * Time: 08:59
 */

namespace stpaul\DAO;

use stpaul\Domain\Sejour;
use Doctrine\DBAL\Connection;


/**
 * Class sejourDAO
 * @package stpaul\DAO
 */
class sejourDAO {
    /**
     * @var
     */
    private $db;

    /**
     * @param $db
     */
    function __construct($db)
    {
        $this->db = $db;
    }

    /**
     * @return array
     */
    public function findAll() {

        $sql = "select * from sejour order by sejno";

        $result = $this->db->fetchAll($sql);

        // Convert query result to an array of domain objects

        $sejours = array();

        foreach ($result as $row) {

            $sejNo = $row['SEJNO'];

            $sejours[$sejNo] = $this->buildSejour($row);

        }

        return $sejours;

    }


    /**
     * @param array $row
     * @return Sejour
     */
    private function buildSejour(array $row) {

        $sejour = new Sejour($row['SEJNO'],$row['SEJINTITULE'],$row['SEJMONTANTMBI'],$row['SEJDTEDEB'],$row['SEJDUREE']);


        return $sejour;

    }
}