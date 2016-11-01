<?php
	class DefaultController extends Controller {
		function actionIndex() {
			$model = Yii::app(  )->gs->cache( 300 )->createCommand( 'SELECT COUNT(*) AS `all`,
			(SELECT COUNT(*) FROM players WHERE exp <= 307558) AS `9`,
			(SELECT COUNT(*) FROM players WHERE exp > 307558 AND exp <= 4820229) AS `20`,
			(SELECT COUNT(*) FROM players WHERE exp > 4820229 AND exp <= 89321807) AS `30`,
			(SELECT COUNT(*) FROM players WHERE exp > 89321807 AND exp <= 559280864) AS `40`,
			(SELECT COUNT(*) FROM players WHERE exp > 559280864 AND exp <= 1110255873) AS `50`,
			(SELECT COUNT(*) FROM players WHERE exp > 1110255873 AND exp <= 1956797897) AS `55`,
			(SELECT COUNT(*) FROM players WHERE exp > 1956797897 AND exp <= 3788797597) AS `60`,
			(SELECT COUNT(*) FROM players WHERE exp > 3788797597 AND exp <= 5669583333) AS `65`,
			(SELECT COUNT(*) FROM players WHERE race = "ASMODIANS") AS `asmo`,
			(SELECT COUNT(*) FROM players WHERE race = "ELYOS") AS `ely`,
			(SELECT COUNT(*) FROM players WHERE player_class = "GLADIATOR") AS `GLADIATOR`,
			(SELECT COUNT(*) FROM players WHERE player_class = "TEMPLAR") AS `TEMPLAR`,
			(SELECT COUNT(*) FROM players WHERE player_class = "ASSASSIN") AS `ASSASSIN`,
			(SELECT COUNT(*) FROM players WHERE player_class = "RANGER") AS `RANGER`,
			(SELECT COUNT(*) FROM players WHERE player_class = "SORCERER") AS `SORCERER`,
			(SELECT COUNT(*) FROM players WHERE player_class = "SPIRIT_MASTER") AS `SPIRIT_MASTER`,
			(SELECT COUNT(*) FROM players WHERE player_class = "CLERIC") AS `CLERIC`,
			(SELECT COUNT(*) FROM players WHERE player_class = "CHANTER") AS `CHANTER`,
			(SELECT COUNT(*) FROM players WHERE player_class = "BARD") AS `BARD`,
			(SELECT COUNT(*) FROM players WHERE player_class = "GUNNER") AS `GUNNER`,

			(SELECT COUNT(*) FROM legion_members m LEFT JOIN players p ON p.id=m.player_id WHERE p.race = "ASMODIANS" AND m.rank = "BRIGADE_GENERAL") AS leg_asmo,
			(SELECT COUNT(*) FROM legion_members m LEFT JOIN players p ON p.id=m.player_id WHERE p.race = "ELYOS" AND m.rank = "BRIGADE_GENERAL") AS leg_ely

			FROM players' )->queryRow(  );

			$this->render( '/stats', array( 'model' => $model ) );
		}
	}

?>