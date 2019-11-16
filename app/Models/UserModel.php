<?php

/**
 *  Example of a CRUD using CODE IGNITER 4 and MYSQL
 *  By: @mathmed
 *  https://github.com/mathmed
*/

namespace App\Models;
use CodeIgniter\Model;

/* Users Model */

class UserModel extends Model{

    /* Name of database table */
    protected $table = "users";

    /* name of primary key field */
    protected $primaryKey = "id";

    /* type of returned data */
    protected $returnType = 'object';

    protected $useTimestamps = true;
    
    /* default fields that will be inserted */
    protected $allowedFields = ['name', 'age', 'email'];

    /* automatic date create in database */
    protected $createdField = "created_at";
    protected $updatedField = "updated_at";

    /* receive users */
    public function getUsers($id = null){

        /* return all users */
        if($id) return $this->findAll();

        /* return user by id */
        return $this->find($id);

    }

    public function init_insert($data = NULL){

        /* insert new user in db */
        $this->save($data);

    }

    public function init_update($data = NULL) {

        /* update a user by your id (primary key) */
        $this->update($data["id"], $data);
    
    }

    
    public function init_delete($id){

        /* delete a user by your id */
        $this->delete($id);

    }

}