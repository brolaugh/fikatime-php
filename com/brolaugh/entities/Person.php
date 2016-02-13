<?php
/**
 * Created by PhpStorm.
 * User: brolaugh
 * Date: 2/13/16
 * Time: 7:00 PM
 */

namespace com\brolaugh\entities;


class Person
{
    private $id;
    private $fname;
    private $sname;
    private $email;
    private $telephone;
    private $username;
    private $password;

    /**
     * Person constructor.
     * @param $personRow
     */
    public function __construct($personRow){
        $this->id = $personRow->id;
        $this->fname = $personRow->fname;
        $this->sname = $personRow->sname;
        $this->email = $personRow->email;
        $this->telephone = $personRow->telephone;
        $this->username = $personRow->login;
        $this->password = $personRow->password;
    }

    /**
 * @return mixed
 */
public function getId()
{
    return $this->id;
}/**
 * @param mixed $id
 */
public function setId($id)
{
    $this->id = $id;
}/**
 * @return string
 */
public function getFName()
{
    return $this->fname;
}/**
 * @param string $fname
 */
public function setFName($fname)
{
    $this->fname = $fname;
}/**
 * @return string
 */
public function getSName()
{
    return $this->sname;
}/**
 * @param string $sname
 */
public function setSName($sname)
{
    $this->sname = $sname;
}/**
 * @return string
 */
public function getEmail()
{
    return $this->email;
}/**
 * @param string $email
 */
public function setEmail($email)
{
    $this->email = $email;
}/**
 * @return string
 */
public function getTelephone()
{
    return $this->telephone;
}/**
 * @param string $telephone
 */
public function setTelephone($telephone)
{
    $this->telephone = $telephone;
}/**
 * @return string
 */
public function getUsername()
{
    return $this->username;
}/**
 * @param string $username
 */
public function setUsername($username)
{
    $this->username = $username;
}/**
 * @return string
 */
public function getPassword()
{
    return $this->password;
}/**
 * @param string $password
 */
public function setPassword($password)
{

    $this->password = $password;
}
}