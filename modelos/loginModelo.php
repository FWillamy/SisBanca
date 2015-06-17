<?php

    class loginModelo {
        
        /*public function setuser($user){
            $this->user = $user;
        }
        public function setpassword($password){
            $this->password = $password;
        }
        public function getuser(){
            return $this->user;
        }
        public function getpassword(){
            return $this->password;
        }*/


    public function autenticar(){
        
        global $con;

        $user = $_POST['nome'];
        $password = $_POST['cpf'];

        $sql = "SELECT * FROM usuario WHERE nome = '$user' AND cpf = '$password'";
        $result = $con->query($sql);

            if ($result->num_rows > 0) {
                echo "<br>Login efetuado com sucesso!";
                require_once 'view/index.php';
            }
            else {
                echo "<br>Não foi possivel realizar o login";
                require_once 'view/telaLogin.php';
            }
            $con->close();         
        }

    }

?>