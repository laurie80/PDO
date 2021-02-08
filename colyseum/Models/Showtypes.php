<?php

class showtypes extends Database {
    
    private $id;
    private $type;
    

    public function __construct()
    {
        parent::__construct();
    } 

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    // <!-- EXO 2 : afficher tout les types de spectacles possibles -->
    public function showtypesType ()
    {
        $showtypes = "SELECT * FROM `showtypes`";
        $showtypesType = $this->getDb()->prepare($showtypes);
        $showtypesType->execute();
        $resultshowtypes = $showtypesType->fetchAll(PDO::FETCH_ASSOC);
        if (count($resultshowtypes)>0) {
            return $resultshowtypes;
        } else {
            return false;
        }
    }


}
