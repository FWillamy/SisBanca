<?php

/**
 * Modelo que interagem com a classe produtoCroller.php
 */
class produtoModelo {

    private $id;
    private $nomeProduto;
    private $descricaodoProduto;
    private $nomeFabricante;
    private $dataFabricacao;
    private $dataVencimento;
    private $numeroLote;
    private $categoriaProduto;
    private $comentario;

    //Metodos SET
    public function setId($id) {
        $this->id = $id;
    }

    public function setnomeProduto($nomeProduto) {
        $this->nomeProduto = $nomeProduto;
    }

    public function setdescricaodoProduto($descricaodoProduto) {
        $this->descricaodoProduto = $descricaodoProduto;
    }

    public function setnomeFabricante($nomeFabricante) {
        $this->nomeFabricante = $nomeFabricante;
    }

    public function setdataFabricacao($dataFabricacao) {
        $this->dataFabricacao = $dataFabricacao;
    }

    public function setdataVencimento($dataVencimento) {
        $this->dataVencimento = $dataVencimento;
    }

    public function setnumerodoLote($numerodoLote) {
        $this->numerodoLote = $numerodoLote;
    }

    public function setcategoriaProduto($categoriaProduto) {
        $this->categoriaProduto = $categoriaProduto;
    }

    public function setcomentario($comentario) {
        $this->comentario = $comentario;
    }

    //Metodos GET
    public function getId() {
        return $this->id;
    }

    public function getnomeProduto() {
        return $this->nomeProduto;
    }

    public function getdescricaodoProduto() {
        return $this->descricaodoProduto;
    }

    public function getnomeFabricante() {
        return $this->nomeFabricante;
    }

    public function getdataFabricacao() {
        return $this->dataFabricacao;
    }

    public function getdataVencimento() {
        return $this->dataVencimento;
    }

    public function getnumerodoLote() {
        return $this->numerodoLote;
    }

    public function getcategoriaProduto() {
        return $this->categoriaProduto;
    }

    public function getcomentario() {
        return $this->comentario;
    }

    //Lógica necessário para salvar os dados no banco MySql
    public function salvar($produtoModelo) { //Função de interação com /controlles/produtoController.php
        global $con;

        $sql = "INSERT INTO produto(nomeProduto, descricaodoProduto, nomeFabricante, dataFabricacao, dataVencimento, numerodoLote, categoriaProduto, comentario)"
                . "VALUES ('" . $produtoModelo->getnomeProduto() . "','" . $produtoModelo->getdescricaodoProduto()
                . "','" . $produtoModelo->getnomeFabricante() . "','" . $produtoModelo->getdataFabricacao() . "','" . $produtoModelo->getdataVencimento()
                . "','" . $produtoModelo->getnumerodoLote() . "','" . $produtoModelo->getcategoriaProduto() . "','" . $produtoModelo->getcomentario() . "');";

        if ($con->query($sql) === TRUE) {
            echo "<br>Produto salvo com sucesso!";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }

    public function excluir($id) {
        global $con;
        $sql = "DELETE FROM produto WHERE id = $id";

        if ($con->query($sql) === TRUE) {
            echo "<br>Produto delete com sucesso!";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }

    public function listar() {
        global $con;
        $arrayListar = array();

        $sql = "SELECT * FROM produto";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            # condição caso o resultado da função listar tennha mais de uma linha/coluna
            while ($obj = $result->fetch_object("produtoModelo")) {
                # caso o resultado seja verdadeiro faça a linha de comanda abaixo
                $arrayListar[] = $obj;
            }
        } else {
            echo "0 resultado";
        }
        $con->close();
        return $arrayListar;
    }

    public function selecionar($id) {
        global $con;

        $sql = "SELECT * FROM produto WHERE produto.id = $id";
        $result = $con->query($sql);
        if ($result->num_rows > 0) { #Condição que verifica se os dados repassados na variavel contém no BD, caso tenha algum dado o mesmo é selecionado
            while ($obj = $result->fetch_object("produtoModelo")) {
                $produtoModelo = $obj;
            }
        } else {
            echo "0 resultado";
        }
        $con->close();
        return $produtoModelo;
    }

    public function editar($produtoModelo) {
        global $con;

        $sql = "UPDATE produto SET  nomeProduto =  '{$produtoModelo->getnomeProduto()}' ,"
                . "descricaodoProduto =  '{$produtoModelo->getdescricaodoProduto()}' , "
                . "nomeFabricante =  '{$produtoModelo->getnomeFabricante()}' , "
                . "dataFabricacao =  '{$produtoModelo->getdataFabricacao()}' , "
                . "dataVencimento =  '{$produtoModelo->getdataVencimento()}' , "
                . "numerodoLote =  '{$produtoModelo->getnumerodoLote()}' , "
                . "categoriaProduto = '{$produtoModelo->getcategoriaProduto()}', "
                . "comentario = '{$produtoModelo->getcomentario()}' WHERE id = '{$produtoModelo->getId()}' ";

        if ($con->query($sql) === TRUE) {
            echo "<br>Edit record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }

    public function relatorio($categoria, $vencimento, $lote) {
        global $con;

        $arrayRelatorio = array();
        $sql = "SELECT * FROM produto";

        $criterios = [];
        if ($categoria != null) {
            $criterios['categoriaProduto'] = $categoria;
        }

        if ($vencimento != null) {
            $criterios['dataVencimento'] = $vencimento;
        }

        if ($lote != null) {
            $criterios['numerodoLote'] = $lote;
        }

        $whereclause = '';
        if (count($criterios) > 0) {
            $aux = [];
            foreach ($criterios as $key => $value) {
                $aux[] = '`' . $key . '` = \'' . $value . '\'';
            }

            $whereclause = ' WHERE ' . implode(' AND ', $aux);
        }

        $sql .= $whereclause;

        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            # condição caso o resultado da função listar tennha mais de uma linha/coluna
            while ($obj = $result->fetch_object("produtoModelo")) {
                # caso o resultado seja verdadeiro faça a linha de comanda abaixo
                $arrayRelatorio[] = $obj;
            }
        } else {
            echo "0 resultado";
        }
        $con->close();
        return $arrayRelatorio;
    }
}

?>