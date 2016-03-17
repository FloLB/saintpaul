<?php

namespace stpaul\IHM;

class Simul {
    private $famNom;
    private $famNbEnfant;
    private $famQF;

    private $sejNo;
    private $sejMBI;

    private $simulNbEnfPartant;
    private $simulReducQF;
    private $simulReducFamilleNombreuse;
    private $simulReducDepartMultiple;
    private $simulSousTotal;
    private $simulTotalApresReduc;
    private $simulTotalApresPlafond;
    private $simulTotalDepartMultiple;

    function __construct()
    {

    }



    /**
     * @return mixed
     */
    public function getSimulNbEnfPartant()
    {
        return $this->simulNbEnfPartant;
    }

    /**
     * @param mixed $simulNbEnfPartant
     */
    public function setSimulNbEnfPartant($simulNbEnfPartant)
    {
        $this->simulNbEnfPartant = $simulNbEnfPartant;
    }

    /**
     * @return mixed
     */
    public function getSimulReducQF()
    {
        return $this->simulReducQF;
    }

    /**
     * @param mixed $simulReducQF
     */
    public function setSimulReducQF($simulReducQF)
    {
        $this->simulReducQF = $simulReducQF;
    }

    /**
     * @return mixed
     */
    public function getSimulReducFamilleNombreuse()
    {
        return $this->simulReducFamilleNombreuse;
    }

    /**
     * @param mixed $simulReducFamilleNombreuse
     */
    public function setSimulReducFamilleNombreuse($simulReducFamilleNombreuse)
    {
        $this->simulReducFamilleNombreuse = $simulReducFamilleNombreuse;
    }

    /**
     * @return mixed
     */
    public function getSimulReducDepartMultiple()
    {
        return $this->simulReducDepartMultiple;
    }

    /**
     * @param mixed $simulReducDepartMultiple
     */
    public function setSimulReducDepartMultiple($simulReducDepartMultiple)
    {
        $this->simulReducDepartMultiple = $simulReducDepartMultiple;
    }

    /**
     * @return mixed
     */
    public function getSimulSousTotal()
    {
        return $this->simulSousTotal;
    }

    /**
     * @param mixed $simulSousTotal
     */
    public function setSimulSousTotal($simulSousTotal)
    {
        $this->simulSousTotal = $simulSousTotal;
    }

    /**
     * @return mixed
     */
    public function getSimulTotalApresReduc()
    {
        return $this->simulTotalApresReduc;
    }

    /**
     * @param mixed $simulTotalApresReduc
     */
    public function setSimulTotalApresReduc($simulTotalApresReduc)
    {
        $this->simulTotalApresReduc = $simulTotalApresReduc;
    }

    /**
     * @return mixed
     */
    public function getSimulTotalApresPlafond()
    {
        return $this->simulTotalApresPlafond;
    }

    /**
     * @param mixed $simulTotalApresPlafond
     */
    public function setSimulTotalApresPlafond($simulTotalApresPlafond)
    {
        $this->simulTotalApresPlafond = $simulTotalApresPlafond;
    }

    /**
     * @return mixed
     */
    public function getSimulTotalDepartMultiple()
    {
        return $this->simulTotalDepartMultiple;
    }

    /**
     * @param mixed $simulTotalDepartMultiple
     */
    public function setSimulTotalDepartMultiple($simulTotalDepartMultiple)
    {
        $this->simulTotalDepartMultiple = $simulTotalDepartMultiple;
    }

    /**
     * @return mixed
     */
    public function getFamNom()
    {
        return $this->famNom;
    }

    /**
     * @param mixed $famNom
     */
    public function setFamNom($famNom)
    {
        $this->famNom = $famNom;
    }

    /**
     * @return mixed
     */
    public function getFamNbEnfant()
    {
        return $this->famNbEnfant;
    }

    /**
     * @param mixed $famNbEnfant
     */
    public function setFamNbEnfant($famNbEnfant)
    {
        $this->famNbEnfant = $famNbEnfant;
    }

    /**
     * @return mixed
     */
    public function getFamQF()
    {
        return $this->famQF;
    }

    /**
     * @param mixed $famQF
     */
    public function setFamQF($famQF)
    {
        $this->famQF = $famQF;
    }

    /**
     * @return mixed
     */
    public function getSejNo()
    {
        return $this->sejNo;
    }

    /**
     * @param mixed $sejNo
     */
    public function setSejNo($sejNo)
    {
        $this->sejNo = $sejNo;
    }

    /**
     * @return mixed
     */
    public function getSejMBI()
    {
        return $this->sejMBI;
    }

    /**
     * @param mixed $sejMBI
     */
    public function setSejMBI($sejMBI)
    {
        $this->sejMBI = $sejMBI;
    }

    public function calcul()
    {
        if($this->famQF<500){
            $this->simulReducQF = $this->sejMBI*10/100;
        }else{
            $this->simulReducQF = 0;
        }

        if($this->famNbEnfant==2){
            $this->simulReducFamilleNombreuse = $this->sejMBI*20/100;
        }elseif($this->famNbEnfant>=3){
            $this->simulReducFamilleNombreuse = $this->sejMBI*40/100;
        }else{
            $this->simulReducFamilleNombreuse = 0;
        }

        $this->simulSousTotal  = ($this->sejMBI)-($this->simulReducQF)-($this->simulReducFamilleNombreuse);

        if($this->simulNbEnfPartant>1){
        $this->simulReducDepartMultiple = $this->simulSousTotal*10/100;
        }else {
        $this->simulReducDepartMultiple = 0;
        }
        $this->simulTotalApresReduc  = ($this->simulSousTotal) - ($this->simulReducDepartMultiple);
        if($this->simulTotalApresReduc>100) {
            $this->simulTotalApresPlafond = 100;
        }else{
            $this->simulTotalApresPlafond = $this->simulTotalApresReduc;
        }

        $this->simulTotalDepartMultiple = $this->simulTotalApresPlafond*$this->simulNbEnfPartant;

    }
    public function calculReduc(){
        $this->simulTotalApresReduc  = ($this->simulSousTotal) - ($this->simulReducDepartMultiple);
        return $this->simulTotalApresReduc;
    }
    public function calculReducQF(){
        if($this->famQF<500){
            $this->simulReducQF = $this->sejMBI*10/100;
        }else{
            $this->simulReducQF = 0;
        }
        return  $this->simulReducQF;
    }

}

