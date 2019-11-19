<?php
    require 'dbconnexion.class.php';


    class students {
        private $cnx;
        public function __construct()
        {
            $db = new  database ;
            $this->cnx = $db->connectbd();

        }

       /* public function readAllSt()
            {
                try{
                    $req ='SELECT  * FROM students WHERE id= :param_id ' ;
                    $req = bindParam (':param_id',$_GET['ID']);
                    $req->execute();
                    return $req ;
                }catch (PDOException $e){
                    echo $e->getMessage();
                }
            }*/


             public function readAllSt()
            {
                try{
                    $req ='SELECT  * FROM students ' ;
                    $result =$this->cnx->prepare($req);
                    $result->execute();
                    return $result ;
                }catch (PDOException $e){
                    echo $e->getMessage();
                }
            }

            
        
           
            public function addnewSt (){

                    $firstname=$_POST['firstname'];
                    $lastname=$_POST['lastname'];
                    $email=$_POST['email'];
                    $phone=$_POST['phone'];
                try {
                    $sql = ("INSERT INTO student  VALUES (null, :param_firstname , :param_lastname , :param_email , :param_phone)");
                    $result =$this ->cnx->prepare($sql);
                    $result->bindparam(":param_firstname",$firstname);
                    $result->bindparam(":param_lastname",$lastname);
                    $result->bindparam(":param_email",$email);
                    $result->bindparam(":param_phone",$phone);
                    $result ->execute () ;
                     return $result ; 
                }
                catch (PDOException $ex) {
                    echo $ex->getMessage ();
                }
            }

           
           
           /* public function delete($id)
            {
                try{
                    $req='DELETE FROM students where id=:param_id';
                    $result=$this->cnx->prepare($req);
                    $result->binddParam(":param_id",$id);
                    $result->execute();
                    return $result;
                }catch (PDOException $e){
                    echo $e->getMessage();
                }
                
            }*/


            public function delete()
            {
                
                    $req=$this->cnx->prepare("DELETE FROM students where id=:param_id");
                    $req->binddParam(':param_id',$_GET['id']);
                    $req->execute();
    
            }

        public function update($id ,$firstname, $lastname, $email ,$phone )
         { 
             
            try{
                $req ='UPDATE students
                SET firstname =:param_firstname,
                lastname =:param_lastname,
                email =:param_email,
                phone =:param_phone,
                WHERE id=:param_id';
                 
                $result =$this->cnx->prepare($req);

                $result->bindParam(':param_id',$id);
                $result->bindParam(':param_firstname',$firstname);
                $result->bindParam(':param_lastname',$lastname);
                $result->bindParam(':param_email',$email);
                $result->bindParam(':param_phone',$phone);
                
                $result->execute();
                return $result ;

            }catch (PDOException $e){
                echo $e->getMessage();
            }


         }



            
            
           
    }
?>