<?php
/**
 * Created by PhpStorm.
 * User: playground
 * Date: 18/04/2016
 * Time: 21:14
 */

namespace MobileApi\Repository;

use Application\Repository\RepositoryInterface;
use MobileApi\Entity\User;

interface UserRepositoryInterface
{
    /**
     * @param User $user
     *
     * @return void
     */
    public function add(User $user);

    /**
     * @param string $clearTextPassword
     *
     * @return string
     */
    public function generatePassword($clearTextPassword);

    /**
     * @return \Zend\Authentication\Adapter\DbTable\CallbackCheckAdapter
     */
    public function getAuthenticationAdapter();
}