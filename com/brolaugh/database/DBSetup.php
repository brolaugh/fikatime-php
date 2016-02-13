<?php
/**
 * Created by PhpStorm.
 * User: brolaugh
 * Date: 2/13/16
 * Time: 5:06 PM
 */



namespace com\brolaugh\database;

class DBSetup
{
    private $db;
    private $server = "rickardhforslund.se";
    private $username = "brolaugh";
    private $password = "hannes";
    private $database = "brofo_fika";


    /**
     * dbSetup constructor.
     */
    public function __construct(){
        $this->db = new \Mysqli($this->server, $this->username, $this->password, $this->database);
        if(!$this->db->set_charset("utf8")) {
            printf("Error loading character set utf8: %s\n", $this->db->error);
            exit();
        }
    }

    /**
     * @return Mysqli
     */
    protected function getDb()
    {
        return $this->db;
    }
}