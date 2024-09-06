<?php
	class MySQL
	{
		private $conexion;
		private $total_consultas;
		private $error;

		function __construct($bd,$usuario,$pass) {
					$this->conexion=mysqli_connect('localhost', 'qaseduc_usujardi', 'Ingeniero1986', 'qaseduc_'.$bd);

		}

		public function consulta($consulta)
			{
				$this->total_consultas++;
				$resultado = mysqli_query($this->conexion,$consulta);
				if(!$resultado)
				{
					echo 'MySQL Error: '.mysqli_error($this->conexion);
					exit;
				}
				return $resultado;
			}

		public function fetch_array($consulta)
			{
			return mysqli_fetch_array($consulta);
			}

		public function num_rows($consulta)
			{
			return mysqli_num_rows($consulta);
			}

		public function getTotalConsultas()
			{
			return $this->total_consultas;
			}
		public function guardar($sql)
			{
			$bl=0;
			$resultado=mysqli_query($this->conexion,$sql);
				if(!$resultado)
					{
						$message='Invalid query: ' . mysqli_error($this->conexion) . "\n";
						$message.=mysqli_error($this->conexion);
						$bl=mysqli_errno($this->conexion);
					}
						return $bl;
			}

		public function borrar($sql)
			{
				$resultado=mysqli_query($sql);
					if(!$resultado)
					{
						$message='Invalid query: ' . mysqli_error() . "\n";
						$message.=mysqli_error();
						$bl=mysqli_error();
					}
			}
				//Cierra la conexion no-persistente con el servidor MySQL.
				function CerrarConexion()
					{
						if(!@mysqli_close($this->conexion))
							{
								$this->error = mysqli_error();
								return( False );
							}
						else
							{
								return( True );
							}
					}

		public function LimpiarConsulta()		 //Libera la memoria associoada a la variable donde se guarda la consulta.
		{
			if(!@mysqli_free_result($this->consulta))
				{
					$this->error = mysqli_error();
					return( False );
				}
			else
				{
					return( True );
				}
		}



	}



?>
