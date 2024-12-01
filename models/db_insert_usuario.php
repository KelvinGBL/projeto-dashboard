<?php 
namespace Admin\Model;
use config\Database;
use Exception;

require "../config/Database.php";
class db_insert_usuario{

    private $nome;
    private $email;
    private $perfil;

    public function __construct($nome, $email, $perfil) {
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setPerfil($perfil);

        $this->insertUsuario();
    }

    private function insertUsuario(){
        try {

            $conn = Database::getConnection();

            date_default_timezone_set('America/Sao_Paulo');
            $data = date("Y/m/d");
            $status = "Ativado";

            $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, perfil, data, status) VALUES (?,?,?,?,?)");
            if(!$stmt){
                error_log("Erro na preparação do inserte". $conn->error);
                die("Erro na preparação da consulta");
            }

            $stmt->bind_param("sssss",$this->nome, $this->email, $this->perfil, $data, $status);

            if($stmt->execute()){
                echo "Dados cadastrados";
                header('Location: ../views/usuarios.php');
            }else{
                echo "Erro nos parametros";
            }

        } catch (Exception $e) {
            echo "erro". $e->getMessage();
            //throw $th;
        }


    }

    private function setNome($nome){
        $this->nome = $nome;
    }

    private function setEmail($email){
        $this->email = $email;
    }

    private function setPerfil($perfil){
        $this->perfil = $perfil;
    }
}

if(isset($_SERVER['REQUEST_METHOD']) == "post"){
    if(isset($_POST['submit'])){

        // $primeiro_nome = $_POST['primeiro_nome'];
        // $primeiro_nome = trim($primeiro_nome);
        // $primeiro_nome = strtolower($primeiro_nome);
        // $primeiro_nome = ucwords($primeiro_nome);

        // $email = $_POST['email'];
        // $email = trim($email);
        // $email = str_replace(' ', '', $email);
        // $email = strtolower($email);

        // $password = $_POST['password'];
        // $confirm_password = $_POST['confirm_password'];

        // $modificadores = $_POST['modificadores'];

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $perfil = $_POST['perfil'];
        $insert_usuario = new db_insert_usuario($nome, $email, $perfil);

    }   
}else{
    echo "Erro no forms";
}