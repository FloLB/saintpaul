<?php


namespace stpaul\Domain;


/**
 * Class Sejour
 * @package stpaul\Domain
 */
class Sejour {

    /**
     * @var
     */
    private $SejNo;
    /**
     * @var
     */
    private $SejIntitule;
    /**
     * @var
     */
    private $SejMontantMBI;
    /**
     * @var
     */
    private $SejDteDeb;
    /**
     * @var
     */
    private $SejDuree;

    /**
     * @param $SejNo
     * @param $SejIntitule
     * @param $SejMontantMBI
     * @param $SejDteDeb
     * @param $SejDuree
     */
    function __construct($SejNo, $SejIntitule, $SejMontantMBI, $SejDteDeb,$SejDuree)
    {
        $this->SejNo = $SejNo;
        $this->SejIntitule = $SejIntitule;
        $this->SejMontantMBI = $SejMontantMBI;
        $this->SejDteDeb = $SejDteDeb;
        $this->SejDuree = $SejDuree;
    }


    /**
     * @return mixed
     */
    public function getSejNo()
    {
        return $this->SejNo;
    }

    /**
     * @param mixed $SejNo
     */
    public function setSejNo($SejNo)
    {
        $this->SejNo = $SejNo;
    }

    /**
     * @return mixed
     */
    public function getSejDuree()
    {
        return $this->SejDuree;
    }

    /**
     * @param mixed $SejDuree
     */
    public function setSejDuree($SejDuree)
    {
        $this->SejDuree = $SejDuree;
    }

    /**
     * @return mixed
     */
    public function getSejIntitule()
    {
        return $this->SejIntitule;
    }

    /**
     * @param mixed $SejIntitule
     */
    public function setSejIntitule($SejIntitule)
    {
        $this->SejIntitule = $SejIntitule;
    }

    /**
     * @return mixed
     */
    public function getSejMontantMBI()
    {
        return $this->SejMontantMBI;
    }

    /**
     * @param mixed $SejMontantMBI
     */
    public function setSejMontantMBI($SejMontantMBI)
    {
        $this->SejMontantMBI = $SejMontantMBI;
    }

    /**
     * @return mixed
     */
    public function getSejDteDeb()
    {
        return $this->SejDteDeb;
    }

    /**
     * @param mixed $SejDteDeb
     */
    public function setSejDteDeb($SejDteDeb)
    {
        $this->SejDteDeb = $SejDteDeb;
    }


}