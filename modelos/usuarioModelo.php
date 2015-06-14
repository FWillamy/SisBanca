<?php
/**
* Modelo que interagem com a classe produtoCroller.php
*/

class usuarioModelo
{
	
	private $id;
	private $nome;
	private $rg;
	private $cpf;
	private $datadeNascimento;
	private $sexo;
	private $estadoCivil;
	private $logradouro;
	private $numero;
	private $complemento;
	private $bairro;
	private $cidade;
	private $estado;
	private $turno;
	private $horarioEntrada;
	private $horarioSaida;

	public function setnome($nome)
	{
		$this->nome = $nome;
	}
	public function getnome()
	{
		return $this->nome;
	}
	public function setrg($rg)
	{
		$this->rg = $rg;
	}
	public function getrg(){
		return $this->rg;
	}
	public function setcpf($cpf){
		$this->cpf = $cpf;
	}
	public function getcpf(){
		return $this->cpf;
	}
	public function setdatadeNascimento($datadeNascimento){
		$this->datadeNascimento = $datadeNascimento;
	}
	public function getdatadeNascimento(){
		return $this->datadeNascimento;
	}
	public function setsexo($sexo){
		$this->sexo = $sexo;
	}
	public function getsexo(){
		return $this->sexo;
	}
	public function setestadoCivil($estadoCivil){
		$this->estadoCivil = $estadoCivil;									
	}
	public function getestadoCivil(){
		return $this->estadoCivil;
	}
	public function setlogradouro($logradouro){
		$this->logradouro = $logradouro;
	}
	public function getlogradouro(){
		return $this->logradouro;
	}	
	public function setnumero($numero){
		$this->numero = $numero;
	}
	public function getnumero(){
		return $this->numero;
	}
	public function setbairro($bairro){
		$this->bairro = $bairro;
	}
	public function getbairro(){
		return $this->bairro;
	}
	public function setcidade($cidade){
		$this->cidade = $cidade;
	}
	public function getcidade(){
		return $this->cidade;
	}
	public function setestado ($estado){
		$this->estado = $estado;
	}
	public function getestado(){
		return $this->estado;
	}
	public function setturno($turno){
		$this->turno = $turno;
	}
	public function getturno(){
		return $this->turno;
	}
	public function sethorarioEntrada($horarioEntrada){
		$this->horarioEntrada = $horarioEntrada;
	}
	public function gethorarioEntrada()
	{
		return $this->horarioEntrada;
	}

	public function sethorarioSaida($horarioSaida)
	{
		$this->horarioSaida = $horarioSaida;
	}
	public function gethorarioSaida()
	{
		return $this->horarioSaida;
	}

 public function salvar($usuarioModelo)
	{	//Função de interação com /controlles/produtoController.php
		global $con;

		$sql = "INSERT INTO usuario(nome, rg, cpf, , datadeNascimento, sexo, estadoCivil, logradouro, numero, bairro, cidade, estado, turno, horarioEntrada, horarioSaida)"
			."VALUES ('".$usuarioModelo->getnome()."','".$usuarioModelo->getrg()
				."','".$usuarioModelo->getcpf()."','".$usuarioModelo->getdatadeNascimento()."','".$usuarioModelo->getsexo()
				."','".$usuarioModelo->getestadoCivil()."','".$usuarioModelo->getlogradouro()."','".$usuarioModelo->getnumero()
				."','".$usuarioModelo->getbairro()."','".$usuarioModelo->getcidade()."','".$usuarioModelo->getestado()
				."','".$usuarioModelo->getturno()."','".$usuarioModelo->gethorarioEntrada()
				."','".$usuarioModelo->gethorarioSaida()."');";
			
		if($con->query($sql) === TRUE)
			{
            	echo "<br>Usuário salvo com sucesso!";
        	} 
        	else 
        	{
            	echo "<br>Error: " . $sql . "<br>" . $con->error;
        	}
	}

	public function excluir($id)
	{
			global $con;
			$sql = "DELETE FROM usuario WHERE id = $id";

			if($con->query($sql) === TRUE)
			{
				echo "Usuário delete com sucesso!";
			}
			else
			{
				echo "Error: ". $sql . "<br>" . $con->error;
			} 
	}
	public function listar()
	{
		global $con;
		$arrayListar = array();

		$sql = "SELECT * FROM usuario";
		$result = $con->query($sql);

			if ($result->num_rows > 0) 
			{
				# condição caso o resultado da função listar tennha mais de uma linha/coluna
				while ( $obj = $result->fetch_object("usuario")) 
				{
					# caso o resultado seja verdadeiro faça a linha de comanda abaixo
					$arrayListar[] = $obj;
				}
			}
			else
			{
				echo "0 resultado";
			}
		$con->close();
		return $arrayListar;
	}

	public function selecionar($id)
	{
        global $con;
        
        $sql = "SELECT * FROM usuario WHERE usuario.id = $id";  
        $result = $con->query($sql);
	        if ($result->num_rows > 0) 
        	{	#Condição que verifica se os dados repassados na variavel contém no BD, caso tenha algum dado o mesmo é selecionado
            	while ($obj = $result->fetch_object("usuario")) 
            	{
                	$usuario = $obj;
            	} 
        	} 
        	else 
        	{
            	echo "0 resultado";
        	}
        $con->close();
        return $usuario; 
    }
public function editar($produtoModelo){
        global $con;

        $sql = "UPDATE usuario SET  nome =  '{$usuario->getnome()}' ," 
            ."rg =  '{$usuario->getrg()}' , " 
            ."cpf =  '{$usuario->getcpf()}' , " 
            ."datadeNascimento =  '{$usuario->getdatadeNascimento()}' , " 
            ."sexo =  '{$usuario->getsexo()}' , "  
            ."estadoCivil =  '{$usuario->getestadoCivil()}' , "
            ."logradouro = '{$usuario->getlogradouro()}', "
            ."numero = '{$usuario->getnumero()}', "
            ."bairro = '{$usuario->getbairro()}', "
            ."cidade = '{$usuario->getcidade()}', "
            ."estado = '{$usuario->getestado()}', "
            ."turno = '{$usuario->getturno()}', "
            ."horario = '{$usuario->gethorario()}' WHERE id = '{$usuario->getId()}' "; 

            

        if ($con->query($sql) === TRUE) 
        {
            echo "Edit record created successfully";
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        } 

	}

}

?>