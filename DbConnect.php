<?php
class DbConnect
{
    private $server = "localhost";
    private $dbname = "kolonicnygarage2";
    private $user = "garage2";
    private $pass = "Garage45*";
    // private $server = "localhost";
    // private $dbname = "garage";
    // private $user = "garage";
    // private $pass = "Garage45*";
    private $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,   //vzdy vyvola vyjimku v priprade chyby
        PDO::ATTR_EMULATE_PREPARES => false,       //vynuceni pomoci prepare statement osetreni nebezpecnych znaku
    );

    public function connect()
    {
        try {
            $conn = new PDO(
                'mysql:host =' . $this->server .
                    ';dbname=' . $this->dbname . ';charset=utf8',
                $this->user,
                $this->pass,
                $this->options
            );
            return $conn;
        } catch (PDOException $e) {
            echo "Database Error:" . $e->getMessage();
            throw $e;
        }
    }
}
