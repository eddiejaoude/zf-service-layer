<?php
/**
 * Example mapper
 *
 * This code is for demo purpose only, it has not be run or tested
 */
class Application_Model_Mapper_User
{

    /*
     * @var Application_Datasource
     */
    private $datasource;

    /**
     * Get datasource
     *
     * @throws Entity_Exception
     * @return Application_Datasource
     */
    public function getDatasource()
    {
        if (empty($this->datasource)) {
            throw new Entity_Exception('No datasource available. Please set a datasource with using
            $mapper->setDatasource($datasource)');
        }
        return $this->datasource;
    }

    /**
     * Set datasource
     * By injecting different datasources (i.e. webservice, database, mock), this brings huge flexibility -
     * especially for unit testing & end-to-end testing with selenium. This will allow the dev/test/automated tool to
     * easily test boundary conditions as well as happy path.
     *
     * @param $datasource
     * @return Application_Model_Mapper_User
     */
    public function setDatasource(Application_Datasource $datasource)
    {
        $this->datasource = $datasource;
        return $this;
    }

    /**
     * Get users
     *
     * This should only perform the mapper, no business logic
     * eg. If you want active users & unable to add this filter to the request for data,
     * then this business logic should be performed in the service layer
     *
     * @return array
     */
    public function getUsers()
    {
        $response = $this->getDatasource()->getUsers();

        $users = array();
        foreach($response as $item) {
            $user = new Application_Model_Entity_User;
            $user->setId($item->id)
                ->setName($item->name)
                ->setEmail($item->email);
            $users[] = $user;
        }
        return $users;
    }

}
