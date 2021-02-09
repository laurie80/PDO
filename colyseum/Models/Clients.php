<?php

class Clients extends Database {

    private $id;
    private $lastName;
    private $firstName;
    private $birthDate;
    private $card;
    private $cardNumber;
    
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
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of birthDate
     */ 
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set the value of birthDate
     *
     * @return  self
     */ 
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get the value of card
     */ 
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Set the value of card
     *
     * @return  self
     */ 
    public function setCard($card)
    {
        $this->card = $card;

        return $this;
    }

    /**
     * Get the value of cardNumber
     */ 
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * Set the value of cardNumber
     *
     * @return  self
     */ 
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    //EXO 1 : REQUETE POUR AFFICHER TOUT LES CLIENTS
    public function searchClients()
    {
        $clients = "SELECT * FROM `clients`";
        $searchClients = $this->getDb()->prepare($clients);
        $searchClients->execute();
        $resultClients = $searchClients->fetchAll(PDO::FETCH_ASSOC);
        if (count($resultClients)>0) {
            return $resultClients;
        } else {
            return false;
        }
    }

    // <!-- EXO 3 : afficher les 2O premiers clients de la table "colyseum" -->
    public function firstClients()
    {
        $clients = "SELECT * FROM `clients` LIMIT 0,20";
        $firstClients = $this->getDb()->prepare($clients);
        $firstClients->execute();
        $resultfirstClients = $firstClients->fetchAll(PDO::FETCH_ASSOC);
        if (count($resultfirstClients)>0) {
            return $resultfirstClients;
        } else {
            return false;
        }
    }

    // <!-- EXO 4 : n'afficher que les clients possédant une carte de fidélité  -->
    public function cardFidelityClients()
    {
        $cardClients = "SELECT * 
                        FROM `clients`  
                        WHERE `card`= 1";
        // SECONDE OPTION : EN SELECTIONNER PRESCISEMMENT LE TYPE DE CARTE DE FIDELITE AVEC UNE JOINTURE
                    // SELECT clients.lastName, clients.firstName 
                    // FROM clients INNER JOIN cards 
                    // ON clients.cardNumber = cards.cardNumber 
                    // INNER JOIN cardTypes on cards.cardTypesID = cardTypes.id 
                    // WHERE type = 'Fidélité'
                
        $cardFidelityClients = $this->getDb()->prepare($cardClients);
        $cardFidelityClients->execute();
        $resultcardFidelityClients = $cardFidelityClients->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($resultcardFidelityClients)) {
            return $resultcardFidelityClients;
        } else {
            return false;
        }
    }

    // <!-- EXO 5 : n'afficher que les clients possédant un nom commençcant par "M"  -->
    public function nameClientsM()
    {
        $ClientsM = "SELECT `clients`.`lastName`, `clients`.`firstName`
                    FROM `clients`  
                    WHERE `lastName` LIKE 'M%'
                    ORDER BY `clients`.`lastName`";
        $nameClientsM = $this->getDb()->prepare($ClientsM);
        $nameClientsM->execute();
        $resultnameClientsM = $nameClientsM->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($resultnameClientsM)) {
            return $resultnameClientsM;
        } else {
            return false;
        }
    }

    // EXO 7 : AFFICHER TOUT LES CLIENTS DANS CET ORDRE 
    // NOM, PRENOM, DATE DE NAISSANCE, CARTE DE FIDELITE 'oui' ou 'non', NUMERO DE CARTE 's'il en a une'

    public function identityClients()
    {
        $Clients = "SELECT `clients`.`lastName`, `clients`.`firstName`, `clients`.`birthDate`, `clients`.`card`, `clients`.`cardNumber`
                    FROM `clients`"; 
        $identityClients = $this->getDb()->prepare($Clients);
        $identityClients->execute();
        $resultidentityClients = $identityClients->fetchAll(PDO::FETCH_ASSOC);
        if (!empty($resultidentityClients)) {
            return $resultidentityClients;
        } else {
            return false;
        }
    }
}