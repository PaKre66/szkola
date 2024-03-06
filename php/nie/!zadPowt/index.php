<?php
include('Dices.php');
class DiceGame extends Dices{
    public function __construct($players, $playerRolls){
        for($x=0; $x<$players; $x++){
            $this->setPlayerName($x,"Player".($x+1));
            $this->setPlayerPoints($x, 0);
        }
        $this->liczbaRzutow=$playerRolls;
    }
    public function setPlayerName($playerId, $playerName) {
        $this->players[$playerId]['name'] = $playerName;
    }
    public function setPlayerPoints($playerId, $playerPoints) {
        $this->players[$playerId]['points'] = $playerPoints;
    }
    public function makeRollForPlayer($playerId) {
        $roll = rand(1, 6);
        if ($roll == 1) {
            $this->playerRolls[$playerId][] = 0;
        } else if ($roll == 6) {
            $this->playerRolls[$playerId][] = $roll * 2;
        } else {
            $this->playerRolls[$playerId][] = $roll;
        }
        $this->setPlayerPoints($playerId, array_sum($this->playerRolls[$playerId]));
    }
    public function checkCount(){
        $results = [];
        foreach ($this->players as $playerId => $playerInfo) {
            $results[$playerInfo['name']] = array_sum($this->playerRolls[$playerId]);
        }
        return $results;
    }
    public function checkWinner(){
        $results = $this->checkCount();
        arsort($results);
        $winner = key($results);
        return [$winner, $results[$winner]];
    }
}  
$diceGame = new DiceGame(5, 10);
 
for ($i = 0; $i < 10; $i++) {
    for ($playerId = 0; $playerId < 5; $playerId++) {
        $diceGame->makeRollForPlayer($playerId);
    }
}
 
$winnerInfo = $diceGame->checkWinner();
 
echo "Zwycięzca: " . $winnerInfo[0] . "<br>";
echo "Ilość zdobytych punktów: " . $winnerInfo[1];
 
 
?>