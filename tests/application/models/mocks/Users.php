<?php
/**
 * User mock
 *
 * This should implement a common interface for all datasources (i.e. webservice, database, mock etc)
 *
 * This code is for demo purpose only, it has not be run or tested
 */
class Test_Application_Model_Mock_User
{
    /**
     * Get users
     *
     * @return array
     */
    public function getUsers()
    {
        $users = array();
        for($i=1;$i<10;$i++) {
            $user = new stdClass;
            $user->id = $i;
            $user->name = 'name_' . $i;
            $user->email = 'email_' . $i;

            $users[] = $user;
        }
        return $users;

    }

}