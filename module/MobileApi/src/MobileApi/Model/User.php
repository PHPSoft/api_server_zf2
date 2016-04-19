<?php
/**
 * Created by PhpStorm.
 * User: playground
 * Date: 18/04/2016
 * Time: 20:54
 */

namespace MobileApi\Model;


class User
{

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $password;


    public function exchangeArray($data)
    {
        $this->setId((!empty($data['member_id'])) ? $data['member_id'] : null);
        $this->setEmail((!empty($data['email'])) ? $data['email'] : null);
        $this->setFirstName((!empty($data['first_name'])) ? $data['first_name'] : null);
        $this->setLastName((!empty($data['last_name'])) ? $data['last_name'] : null);
        $this->setPassword((!empty($data['password'])) ? $data['password'] : null);
    }




    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }



}