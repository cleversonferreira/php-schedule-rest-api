<?php

require_once("databaseController.php");

Class Contact {

    private $contacts = array();

    public function getAll(){
        $query = 'SELECT * FROM contact';
        $db = new DBController();
        return $db->executeSelectQuery($query);
    }

    public function getById(){
        $query = 'SELECT * FROM contact WHERE id =' . $_GET['id'];
        $db = new DBController();
        return $db->executeSelectQuery($query);
    }

    public function create(){

        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone_number'])){

            //create required vars
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone_number = $_POST['phone_number'];

            //create non required vars
            $last_name = $_POST['last_name'] ? $_POST['last_name'] : '';
            $cpf = $_POST['cpf'] ? $_POST['cpf'] : '';
            $birth_date = $_POST['birth_date'] ? $_POST['birth_date'] : '';
            $street = $_POST['street'] ? $_POST['street'] : '';
            $number = $_POST['number'] ? $_POST['number'] : '';
            $neighborhood = $_POST['neighborhood'] ? $_POST['neighborhood'] : '';
            $city = $_POST['city'] ? $_POST['city'] : '';
            $state = $_POST['state'] ? $_POST['state'] : '';
            $country = $_POST['country'] ? $_POST['country'] : '';

            $query = "INSERT INTO 
                        contact (
                          name,
                          last_name,
                          cpf,
                          email,
                          phone_number,
                          birth_date,
                          street,
                          number,
                          neighborhood,
                          city,
                          state,
                          country
                        ) 
                      VALUES (
                          '". $name ."',
                          '". $last_name ."',
                          '". $cpf ."',
                          '". $email ."',
                          '". $phone_number ."',
                          '". $birth_date ."',
                          '". $street ."',
                          '". $number ."',
                          '". $neighborhood ."',
                          '". $city ."',
                          '". $state ."',
                          '". $country ."'
                      )";
            $databaseController = new DBController();
            return $databaseController->executeQuery($query);
        }
    }

    public function delete(){
        if(isset($_GET['id'])){
            $query = 'DELETE FROM contact WHERE id = ' . addslashes($_GET['id']);
            $databaseController = new DBController();

            return $databaseController->executeQuery($query);
        }
    }

    public function update(){
        $put = array();
        parse_str(file_get_contents('php://input'), $put);

        //to update a contact, it is necessary that all fields and environments
        if(
            isset($_GET['id']) &&
            isset($put['name']) &&
            isset($put['email']) &&
            isset($put['phone_number']) &&
            isset($put['last_name']) &&
            isset($put['cpf']) &&
            isset($put['birth_date']) &&
            isset($put['street']) &&
            isset($put['number']) &&
            isset($put['neighborhood']) &&
            isset($put['city']) &&
            isset($put['state']) &&
            isset($put['country'])
        ){
            //create required vars
            $id = addslashes($_GET['id']);
            $name = $put['name'];
            $email = $put['email'];
            $phone_number = $put['phone_number'];

            //create non required vars
            $last_name = $put['last_name'] ? $put['last_name'] : '';
            $cpf = $put['cpf'] ? $put['cpf'] : '';
            $birth_date = $put['birth_date'] ? $put['birth_date'] : '';
            $street = $put['street'] ? $put['street'] : '';
            $number = $put['number'] ? $put['number'] : '';
            $neighborhood = $put['neighborhood'] ? $put['neighborhood'] : '';
            $city = $put['city'] ? $put['city'] : '';
            $state = $put['state'] ? $put['state'] : '';
            $country = $put['country'] ? $put['country'] : '';

            $query = "UPDATE 
                        contact 
                      SET 
                        name = '".$name."',
                        email ='". $email ."',
                        phone_number = '". $phone_number ."',
                        last_name = '".$last_name."',
                        cpf = '".$cpf."',
                        birth_date = '".$birth_date."',
                        street = '".$street."',
                        number = '".$number."',
                        neighborhood = '".$neighborhood."',
                        city = '".$city."',
                        state = '".$state."',
                        country = '".$country."',
                        updated_at = '" .date('Y-m-d m:i:s')."'
                      WHERE 
                        id = " . $id;

            $databaseController = new DBController();
            return $databaseController->executeQuery($query);
        }
    }

}
