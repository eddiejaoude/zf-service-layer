<?php
/**
 * Example Service
 *
 * This code is for demo purpose only, it has not be run or tested
 */
class Application_Model_Service_User
{
    /**
     * Get first user
     *
     * This is only a simple example, this is not real business logic
     *
     * @return Application_Model_Entity_User
     */
    public function getFirstUser()
    {
        // get mock object to inject as datasource
        $mock = new Test_Application_Model_Mock_User;

        // create mapper & inject mock datasource
        $mapper = new Application_Model_Mapper_User;
        $mapper->setDatasource($mock);

        // call required method to get data
        $users = $mapper->getUsers();

        // simple business logic example
        $user = $users[0];

        // return data higher up the stack (i.e. controller)
        return $user;
    }

}