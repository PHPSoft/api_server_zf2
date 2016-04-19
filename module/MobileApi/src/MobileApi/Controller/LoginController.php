<?php
namespace MobileApi\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

class LoginController extends AbstractRestfulController
{
    protected $userTable;

    public function getList()
    {

         // Action used for GET requests without resource Id
        return new JsonModel(
            array('data' =>
                array(
                    array('id'=> 1, 'name' => 'Mothership', 'band' => 'Led Zeppelin'),
                    array('id'=> 2, 'name' => 'Coda',       'band' => 'Led Zeppelin'),
                )
            )
        );
    }

    public function get($id)
    {   // Action used for GET requests with resource Id
        $tst = $this->getUserTable()->getUser($id);

       // var_dump($tst); die("Got here");
        return new JsonModel(array("data" => array('id'=> $tst->getId(), 'name' => $tst->getFirstName(), 'email' => $tst->getEmail())));
        //return new JsonModel(array('data' => array('id'=> 3, 'name' => 'New Album', 'band' => 'New Band')));
    }

    public function create($data)
    {   // Action used for POST requests
        return new JsonModel(array('data' => array('id'=> 3, 'name' => 'New Album', 'band' => 'New Band')));
    }

    public function update($id, $data)
    {   // Action used for PUT requests
        return new JsonModel(array('data' => array('id'=> 3, 'name' => 'Updated Album', 'band' => 'Updated Band')));
    }

    public function delete($id)
    {   // Action used for DELETE requests
        return new JsonModel(array('data' => 'album id 3 deleted'));
    }

    public function getUserTable()
    {
        if (!$this->userTable) {
            $sm = $this->getServiceLocator();
            $this->userTable = $sm->get('MobileApi\Model\UserTable');
        }
        return $this->userTable;
    }
}