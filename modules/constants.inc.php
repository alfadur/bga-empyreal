<?php

interface GameOption {
}

interface Fsm {
    const NAME = 'name';
    const DESCRIPTION = 'description';
    const OWN_DESCRIPTION = 'descriptionmyturn';
    const TYPE = 'type';
    const ACTION = 'action';
    const TRANSITIONS = 'transitions';
    const PROGRESSION = 'updateGameProgression';
    const POSSIBLE_ACTIONS = 'possibleactions';
    const ARGUMENTS = 'args';
}

interface FsmType {
    const MANAGER = 'manager';
    const GAME = 'game';
    const SINGLE_PLAYER = 'activeplayer';
    const MULTIPLE_PLAYERS = 'multipleactiveplayer';
}

interface State {
    const GAME_START = 1;
    const NEXT_TURN = 2;
    const GAME_END = 99;
}

interface Globals {
}

interface HexDirection {
    const RIGHT = [1, 0];
    const BOTTOM_RIGHT = [1, 1];
    const BOTTOM_LEFT = [0, 1];
    const LEFT = [-1, 0];
    const TOP_LEFT = [-1, -1];
    const TOP_RIGHT = [0, -1];

    const ALL = [self::RIGHT, self::BOTTOM_RIGHT, self::BOTTOM_LEFT,
        self::LEFT, self::TOP_LEFT, self::TOP_RIGHT];
}

interface Terrain {
    const DESERT = 0;
    const FOREST = 1;
    const GLACIER = 2;
    const LAKE = 3;
    const LAVA = 4;
    const MOUNTAIN = 5;
    const WASTELAND = 6;
    const CITY = 7;

    const ALL = [self::DESERT, self::FOREST, self::GLACIER,
        self::LAKE, self::LAVA, self::MOUNTAIN, self::CITY];
}

const TILE_COORDS_AB = [
    [0, 0], [1, 0], [2, 0], [3, 0], [4, 0],
    [0, 1], [1, 1], [2, 1], [3, 1], [4, 1],
    [1, 2], [2, 2], [3, 2], [4, 2], [5, 2],
    [1, 3], [2, 3], [3, 3], [4, 3], [5, 3],
    [2, 4], [3, 4], [4, 4], [5, 4], [6, 4],
    [2, 5], [3, 5], [4, 5], [5, 5], [6, 5],
];

const TILE_COORDS_C = [
    [0, 0], [1, 0], [2, 0], [3, 0], [4, 0],
    [1, 1], [2, 1], [3, 1], [4, 1], [5, 1],
    [1, 2], [2, 2], [3, 2], [4, 2], [5, 2],
    [2, 3], [3, 3], [4, 3], [5, 3], [6, 3],
    [2, 4], [3, 4], [4, 4], [5, 4], [6, 4],
    [3, 5], [4, 5], [5, 5], [6, 5], [7, 5],
];