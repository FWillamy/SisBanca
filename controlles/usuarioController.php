<?php

require_once 'modelos/usuarioModelo.php';

/**
 * Classe produto controle das ações realizadas na view
 */
class usuarioController {

    //Variavel de conexão com /modelos/usuarioModelo.php
    private $usuarioModelo;

    function __construct() {
        $this->usuarioModelo = new usuarioModelo();
    }

    public function adicionar() {
        require_once '/view/cadastrarUsuario.php';
    }

    public function salvar() {
        # Esta função tem em realizar o cadastro do funcionário.

        $sv = new usuarioModelo();

        $sv->setnome($_POST["nome"]);
        $sv->setrg($_POST["rg"]);
        $sv->setcpf($_POST["cpf"]);
        $sv->setdatadeNascimento($_POST["datadeNascimento"]);
        $sv->setsexo($_POST["sexo"]);
        $sv->setestadoCivil($_POST["estadoCivil"]);
        $sv->setlogradouro($_POST["logradouro"]);
        $sv->setnumero($_POST["numero"]);
        $sv->setbairro($_POST["bairro"]);
        $sv->setcidade($_POST["cidade"]);
        $sv->setestado($_POST["estado"]);
        $sv->setturno($_POST["turno"]);
        $sv->sethorarioEntrada($_POST["horarioEntrada"]);
        $sv->sethorarioSaida($_POST["horarioSaida"]);
        $this->usuarioModelo->salvar($sv);
        $this->listar();
    }

    public function listar() {
        $_REQUEST['usuarioModelo'] = $this->usuarioModelo->listar();
        require_once 'view/listarUsuario.php';
    }

    public function excluir() {
        $this->usuarioModelo->excluir($_GET["valor"]);
        $this->listar();
    }

     public function editar() {
        # Esta função tem em realizar a edição do cadastro do funcionário.

        $sv = new usuarioModelo();

        $sv->setId($_GET["valor"]);
        $sv->setnome($_POST["nome"]);
        $sv->setrg($_POST["rg"]);
        $sv->setcpf($_POST["cpf"]);
        $sv->setdatadeNascimento($_POST["datadeNascimento"]);
        $sv->setsexo($_POST["sexo"]);
        $sv->setestadoCivil($_POST["estadoCivil"]);
        $sv->setlogradouro($_POST["logradouro"]);
        $sv->setnumero($_POST["numero"]);
        $sv->setbairro($_POST["bairro"]);
        $sv->setcidade($_POST["cidade"]);
        $sv->setestado($_POST["estado"]);
        $sv->setturno($_POST["turno"]);
        $sv->sethorarioEntrada($_POST["horarioEntrada"]);
        $sv->sethorarioSaida($_POST["horarioSaida"]);
        $this->usuarioModelo->editar($sv);
        $this->listar();
    }

public function selecionar(){
        $_REQUEST['usuarioModelo'] = $this->usuarioModelo->selecionar($_GET["valor"]);
        require_once 'view/editUsuario.php';
    }

}

?>