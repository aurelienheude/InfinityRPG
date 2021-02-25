<?php

declare(strict_types=1);

class player
{
	function show_player_info()
	{
		/* SELECT */
	}
	
	function connect()
	{
		$date = date("y-m-d");
						
		$host = "localhost";
		$dbname= "infinity_rpg";
		$charset = "utf8";
		$user = "root";
		$password = "";
	
		$sql = new PDO("mysql:host=".$host.";dbname=".$dbname.";charset=".$charset."", $user, $password);

		//  Récupération de l"utilisateur et de son pass hashé
		$req = $sql->prepare("SELECT * FROM players WHERE pseudo_player = :pseudo_player");
		$req->execute(array("pseudo_player" => $_POST["pseudo_player"]));
		$resultat = $req->fetch();

		if ($resultat["password_player"] != $_POST["password_player"])
		{
			echo "Mauvais identifiant ou mot de passe !";
		}else{
			if ($resultat["password_player"] == $_POST["password_player"]) 
			{
				session_start();
				$_SESSION["id_player"] = $resultat["id_player"];
				$_SESSION["pseudo_player"] = $resultat["pseudo_player"];
				
				header("Location:app/game.php");
			}else{
				echo "Mauvais identifiant ou mot de passe !";
			}
		}
	}

	function insert_new_player()
	{
		/* INSERT */

		if(isset($_POST["pseudo_player"]))
		{
			if(isset($_POST["password_player"]))
			{
				if(isset($_POST["email_player"]))
				{
					if(isset($_POST["description_player"]))
					{

						$date = date("y-m-d");
						
						$host = "localhost";
						$dbname= "infinity_rpg";
						$charset = "utf8";
						$user = "root";
						$password = "";
					
						$sql = new PDO("mysql:host=".$host.";dbname=".$dbname.";charset=".$charset."", $user, $password);
						
						$req = $sql->prepare("INSERT INTO players(pseudo_player, password_player, email_player, register_date_player, description_player)  
												VALUES(:pseudo_player, :password_player, :mail_player, :register_date_player, :description_player)");

						$req->execute(array(
							"pseudo_player" => $_POST["pseudo_player"],
							"password_player" => $_POST["password_player"],
							"mail_player" => $_POST["email_player"],
							"register_date_player" => $date,
							"description_player" => $_POST["description_player"]
							));
					}
				}
			}
		}
	}

	function delete_player()
	{
		$host = "localhost";
						$dbname= "infinity_rpg";
						$charset = "utf8";
						$user = "root";
						$password = "";

						$sql = new PDO("mysql:host=".$host.";dbname=".$dbname.";charset=".$charset."", $user, $password);
								
						$req = $sql->prepare("DELETE INTO players(pseudo_player, password_player, email_player, register_date_player, description_player)  
												VALUES(:pseudo_player, :password_player, :mail_player, :register_date_player, :description_player)");

						$req->execute(array(
							"pseudo_player" => $_POST["pseudo_player"],
							"password_player" => $_POST["password_player"],
							"mail_player" => $_POST["email_player"],
							"register_date_player" => $date,
							"description_player" => $_POST["description_player"]
							));
	}

	function modify_player()
	{
		/* UPDATE */
	}
}



class aventure
{
	/** @var string */

	private $player;/*
	private $dmg;
	private $mob;
	private $health;
	private $xp;
	private $coins;*/
	
	public function __construct(string $new_player/*, int $new_dmg, string $mob, int $health, int $xp, int $coins*/)
	{
		$this->set_player($new_player);/*
		$this->set_new_dmg();
		$this->set_mob();
		$this->set_new_health();
		$this->set_new_xp();
		$this->set_new_coins();*/
	}	 

	/** GETTER **/
	public function get_player()
	{
		echo $this->player;
	}

	/** SETTER **/
	public function set_player(string $new_player)
	{
		$this->player = $new_player;
	}
}

?>