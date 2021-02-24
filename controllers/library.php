<?php

class mobs
{
	function show_mobs_info()
	{
		
		if(isset($_POST["xp_sub"]))
		{
			$result = 50;
		}

		echo $result;
	}
}

class coins
{
	function show_coins()
	{

	}
}

class premium
{
	function show_premium_feature()
	{

	}
}
class player
{
	function show_player_info()
	{

	}

	function insert_new_player()
	{

	}
}

class adventure
{
		function show_adventure_info()
	{
		
	}
}

class recolt
{
	function show_recolt()
	{

	}
}

class crafting
{
	function show_crafting()
	{

	}
}

class enchant
{
	function show_enchant()
	{

	}
}

class event
{
	function show_event()
	{

	}

	function show_event_incoming()
	{

	}
}

class guild
{
	function show_guild()
	{

	}

	function create_guild()
	{

	}	

	function delete_guild()
	{

	}

	function modify_guild()
	{

	}
}

class info
{
	function leaderboard()
	{	
		$host = "localhost";
		$dbname= "infinity_rpg";
		$charset = "utf8";
		$user = "root";
		$password = "";
	
		$sql = new PDO("mysql:host=".$host.";dbname=".$dbname.";charset=".$charset."", $user, $password);

		//  Récupération de l"utilisateur et de son pass hashé
		$req = $sql->prepare("SELECT pseudo_player, lv_player  FROM players ORDER BY lv_player ASC");
		$req->execute(array());

		while($data = $req->fetch())
		{
			echo "<li>pseudo : ".$data["pseudo_player"]."</li>
				  <li>lv : ".$data["lv_player"];
		}

		$req->closeCursor();
	}

	function leaderboard_guild()
	{

	}
}

?>