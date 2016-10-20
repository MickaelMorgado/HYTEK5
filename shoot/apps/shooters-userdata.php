<?php
/* GET USER DATA FOR SHOOTERS */
	include '../../dbConnection.php';
	if (isset($_SESSION['id_session'])) { 

		/* GET SETTINGS FROM DB */
			$result = mysqli_query( $link, "SELECT * FROM shooters WHERE id_session = $_SESSION[id_session]" );
			while($row = mysqli_fetch_assoc($result)) {
				$settings				 = $row['settings'];
				$aud_musics				 = $row['aud_musics'];
				$aud_ambiances 			 = $row['aud_ambiances'];
				$aud_weapons			 = $row['aud_weapons'];
				$aud_birds				 = $row['aud_birds'];
				$score					 = $row['score'];
				$last_score				 = $row['last_score'];
				$timeplayed				 = $row['timeplayed'];
				$gametype				 = $row['gamemode'];
				$coins					 = $row['coins'];
				$weapon_mag_capacity	 = $row['mag_capacity'];   	/* int */
				$weapon_damage			 = $row['damage']; 			/* int */
				$weapon_handle			 = $row['handle']; 			/* float */
				$weapon_ammo			 = $row['ammo']; 	 		/* int */
				$weapon_src				 = $row['src'];       		/* varchar */
				$weapon_sound_fire		 = $row['sound_fire'];		/* varchar */
				$weapon_sound_reload	 = $row['sound_reload'];	/* varchar */
				$weapon_sound_empty	 	 = $row['sound_empty'];		/* varchar */
			} 

		//	echo "<link rel='stylesheet' href='../stylesheets/normal-settings.css'>";
		//	echo $settings.$aud_musics.$aud_ambiances.$aud_weapons.$aud_birds.$score.$weapon_mag_capacity.$weapon_damage.$weapon_handle.$weapon_ammo.$weapon_src.$weapon_sound_fire.$weapon_sound_reload;
	}

	/* SET DEFAULT SETTINGS FOR EMPTY FIELDS */
		if ($settings=='' 					|| $settings==NULL) 			{ $settings = 1; 						}
		if ($aud_musics=='' 				|| $aud_musics==NULL) 			{ $aud_musics = 1; 						}
		if ($aud_ambiances=='' 				|| $aud_ambiances==NULL) 		{ $aud_ambiances = 1; 					}
		if ($aud_weapons=='' 				|| $aud_weapons==NULL) 			{ $aud_weapons = 1; 					}
		if ($aud_birds=='' 					|| $aud_birds==NULL) 			{ $aud_birds = 1; 						}
		if ($score=='' 						|| $score==NULL) 				{ $score = "N/D"; 						}
		if ($last_score=='' 				|| $last_score==NULL) 			{ $last_score = "N/D"; 					}
		if ($timeplayed=='' 				|| $timeplayed==NULL) 			{ $timeplayed = "N/D"; 					}
		if ($gametype=='' 					|| $gametype==NULL) 			{ $gametype = "N/D"; 					}
		if ($coins=='' 						|| $coins==NULL) 				{ $coins = "N/D"; 						}
		if ($weapon_mag_capacity=='' 		|| $weapon_mag_capacity==NULL) 	{ $weapon_mag_capacity = 8; 			}
		if ($weapon_damage=='' 				|| $weapon_damage==NULL) 		{ $weapon_damage = 1; 					}
		if ($weapon_handle=='' 				|| $weapon_handle==NULL) 		{ $weapon_handle = 0.1; 				}
		if ($weapon_ammo=='' 				|| $weapon_ammo==NULL) 			{ $weapon_ammo = 200; 					}
		if ($weapon_src=='' 				|| $weapon_src==NULL) 			{ $weapon_src = "cursor.png"; 			}
		if ($weapon_sound_fire=='' 			|| $weapon_sound_fire==NULL) 	{ $weapon_sound_fire = "gun.mp3"; 		}
		if ($weapon_sound_reload=='' 		|| $weapon_sound_reload==NULL) 	{ $weapon_sound_reload = "reload.mp3"; 	}
		if ($weapon_sound_empty=='' 		|| $weapon_sound_empty==NULL) 	{ $weapon_sound_empty = "empty.mp3"; 	}

?>