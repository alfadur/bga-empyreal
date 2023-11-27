<?php
 /**
  *------
  * BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
  * __GameNameUC__ implementation : © <Your name here> <Your email address here>
  * 
  * This code has been produced on the BGA studio platform for use on http://boardgamearena.com.
  * See http://en.boardgamearena.com/#!doc/Studio for more information.
  * -----
  */


require_once(APP_GAMEMODULE_PATH.'module/table/table.game.php');
require_once('modules/constants.inc.php');

class __GameNameUC__ extends Table
{
    function __construct()
    {
        parent::__construct();

        self::initGameStateLabels([]);
    }

    protected function getGameName( )
    {
		// Used for translations and stuff. Please do not modify.
        return "__gamenamelc__";
    }

    protected function setupNewGame($players, $options = [])
    {
        $data = self::getGameinfos();
        $defaultColors = $data['player_colors'];
        shuffle($defaultColors);
        $playerValues = [];

        foreach ($players as $playerId => $player) {
            $color = array_shift($defaultColors);

            $name = addslashes($player['player_name']);
            $avatar = addslashes($player['player_avatar']);
            $playerValues[] = "('$playerId','$color','$player[player_canal]','$name','$avatar')";
        }

        $args = implode(',', $playerValues);
        $query = "INSERT INTO player (player_id, player_color, player_canal, player_name, player_avatar) VALUES $args";
        self::DbQuery($query);

        self::reattributeColorsBasedOnPreferences($players, $data['player_colors']);
        self::reloadPlayersBasicInfos();
    }

    function getGameProgression()
    {
        return 0;
    }

    protected function getAllDatas()
    {
        $players = self::getCollectionFromDb(<<<EOF
            SELECT player_id AS id, player_score AS score, 
                   player_name AS name, player_color AS color, 
                   player_no AS no
            FROM player
            EOF);


        return [
            'players' => $players
        ];
    }

    function stNextTurn()
    {

    }

    function zombieTurn($state, $activePlayer)
    {
        $stateName = $state['name'];

        if ($state['type'] === FsmType::SINGLE_PLAYER) {
        } else if ($state['type'] === FsmType::MULTIPLE_PLAYERS) {
        } else {
            throw new feException("Zombie mode not supported at this game state: $stateName");
        }
    }

    function upgradeTableDb($fromVersion)
    {

    }
}
