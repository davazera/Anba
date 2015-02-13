<?php

/**
 * A class that holds the core functionality of the dice game. 
 * NOTE: I've included the class _DicePlayer at the bottom.
 */

class _Dice {
	public $die;
	public $player;
	private $sum;
	private $nrPlayers;

	public function __construct($nrPlayers = 1) {
		$this->die = new _DiceDie();
		$this->sum = 0;
		$this->nrPlayers = $nrPlayers;
		$this->player = array();
		for($i = 0; $i < $this->nrPlayers; $i++) {
			$this->player[$i] = new _DicePlayer();
		}
	}

	public function RollDice() {
		$this->die->Roll();
		$this->sum += $this->die->GetDiceValue();

		return $this->die->GetDiceValue();
	}

	/**
	 * SAVE/POST functions
	 *
	 */

	public function SaveSum($i) {
		$this->player[$i - 1]->SetPoints($this->player[$i - 1]->GetSum() + $this->sum);
		$this->sum = 0;
	}

	public function TempSum() {
		$this->sum += $this->die->GetSum();
	}

	/**
	 * RESET functions
	 *
	 */

	public function ResetSum() {
		$this->sum = 0;
	}

	public function ResetTotalSum() {
		for($i = 0; $i < $this->nrPlayers; $i++) {
			$this->player[$i]->SetPoints(0);
		}
	}

	/**
	 * GET functions
	 *
	 */

	public function GetSum() {
		return $this->sum;
	}

	public function GetTotalSum($i) {
		return $this->player[$i - 1]->GetSum();
	}

	public function GetNrPlayers() {
		return $this->nrPlayers;
	}
}

/**
 * Since the _DicePlayer class is quite small, I decided to place it here instead of having
 * its own file and folder (as a result of the autoloader). 
 * The class itself is quite self-explanatory, it contains two properties
 * and holds the ability to set one of them and return the other.
 * Did not get the SetName function to work, leaving it for future work.
 */

class _DicePlayer {
    private $points;
    private $players;
    //private $name;
    
    public function __construct() {
        $this->points = 0;
        $this->players = 1;
        //$this->name = '';
    }
    
    public function GetSum() {
        return $this->points;
    }

    /*
    public function SetName($name) {
    	$this->name = $name;
    }*/
    
    public function SetPoints($points) {
        $this->points = $points;
    }
}