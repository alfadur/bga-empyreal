<?php
/**
 *------
 * BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
 * EmpyrealSpellsAndSteam implementation : © <Your name here> <Your email address here>
 *
 * This code has been produced on the BGA studio platform for use on https://boardgamearena.com.
 * See http://en.doc.boardgamearena.com/Studio for more information.
 * -----
 */

class action_empyrealspellsandsteam extends APP_GameAction
{
    // Constructor: please do not modify
    public function __default()
    {
        if(self::isArg('notifwindow')) {
            $this->view = 'common_notifwindow';
            $this->viewArgs['table'] = self::getArg('table', AT_posint, true);
        } else {
            $this->view = 'empyrealspellsandsteam_empyrealspellsandsteam';
            self::trace('Complete reinitialization of board game');
        }
    }
}
  

