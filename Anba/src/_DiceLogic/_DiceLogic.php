<?php

/**
 * A class that holds the logic behind the dice game.
 *
 */

class _DiceLogic {
	
	private $game;
	private $html;
	private $player;

	public function __construct() {
		$this->player = 1;
		$this->game = new _Dice();
	}

	private function GameSession() {
		if(isset($_SESSION['dicegame'])) {
			$this->game = $_SESSION['dicegame'];

			if(isset($_GET['nrPlayers'])) {
				if($_GET['nrPlayers'] != $this->game->GetNrPlayers()) {
					$this->game = new _Dice($_GET['nrPlayers']);
					$_SESSION['dicegame'] = $this->game;
				}
			}
		}
		else {
			if(isset($_GET['nrPlayers'])) {
				$this->game = new _Dice($_GET['nrPlayers']);
			}
			$_SESSION['dicegame'] = $this->game;
		}
	}

	private function GameStates() {
		if(isset($_GET['player'])) {
            $this->player = $_GET['player'];
        }

        if(isset($_GET['roll'])) {
            if($this->game->RollDice() == 1) {
                $this->game->ResetSum();

                if($this->game->GetNrPlayers() == 1) { // A included check which automatically switches between player 1 and 2 if either rolls a 0.
                	return;
                }
                else {
	                if($this->player >= 2) {
	                	$this->player = $this->player - 1; 
	                }
	                else{
	                	$this->player = $this->player + 1;
	                }
	            }
            }
        }
        else if(isset($_GET['save'])) {
            if($this->player > 1) {
                $this->game->SaveSum($this->player - 1);
            }
            else if($this->player == 1) {
                $this->game->SaveSum(($this->game->GetNrPlayers()));
            }
        }
        else if(isset($_GET['reset'])) {
            $this->game->resetTotalSum();
            $this->game->resetSum();
            session_destroy();
        }
	}

	private function CheckScore($maxSum) {
		$win = -1;

		for($i = 0; $i < $this->game->GetNrPlayers(); $i++) {
			if($this->game->player[$i]->GetSum() >= $maxSum) {
				$win = $i;
			}
		}

		return $win;
	}

	public function ViewGame() {
		session_name('dicegame');

		static::GameSession(); // Static refers to the class. 
		static::GameStates();
		$win = static::CheckScore(100);

		if($win != -1) {
			$this->html .= "<p class='diceText'>The winner is player: " . ($win+1) . " !</p>";
			$this->html .= "<p class='diceText'><a class='aButton' href='?p=dice&amp;reset&amp;nrPlayers=1'>Solo</a>   <a class='aButton' href='?p=dice&amp;reset&amp;nrPlayers=2'>2 Players</a></p></br>";
		}
		else {
			$this->html .= "<p>Current Player: " . $this->player . "</p>";
            $this->html .= "<p>Current Points: " . $this->game->GetSum() . "</p>";
            $this->html .= "<ul>";

            for($i = 0; $i < $this->game->GetNrPlayers(); $i++) {
                $this->html .= "<li>Player " . ($i + 1) . ": " . $this->game->GetTotalSum($i + 1) . "</li></br>";
            }

            $this->html .= "</ul>";

			if($this->game->GetNrPlayers() < 2) {
				$this->html .= "<p><a class='aButton' href='?p=dice&amp;roll&amp;nrPlayers=" . $this->game->GetNrPlayers() . "'>Throw the dice</a>   <a class='aButton' href='?p=dice&amp;save'>Save sum</a>   ";
			}
			else {
                $this->html .= "<p><a class='aButton' href='?p=dice&amp;roll&amp;nrPlayers=" . $this->game->GetNrPlayers() . "&amp;player=" . $this->player . "'>Throw the dice</a>   <a class='aButton' href='?p=dice&amp;save&amp;nrPlayers=" . $this->game->GetNrPlayers() . "&amp;player=";
                if($this->player < $this->game->GetNrPlayers()) {
                    $this->html .= ($this->player + 1);
                }
                else {
                    $this->html .= 1;
                }
                $this->html .= "'>Save round</a>  ";
            }
            $this->html .= "<a class='aButton' href='?p=dice&amp;reset'>Restart</a></p></br>";
            if($this->game->GetNrPlayers() == 2) {
            	$this->html .= "<a class='aButton' href='?p=dice&amp;nrPlayers=1'>Solo</a>";
            }
            else if($this->game->GetNrPlayers() == 1) {
            	$this->html .= "<a class='aButton' href='?p=dice&amp;nrPlayers=2'>2 players</a>";
        	}
        }
        return $this->html;

	}
} 