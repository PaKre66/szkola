<?php
include('Blackjack.php')
class BlackjackGame extends Blackjack{
  public function __constructor($numberOfPlayers,$players){
    for($x=0;$x<$players;$x++){
      $this->listaGraczy[]=$players[setPlayerName(),setPlayerpoints()];
    }
  }
 
  public function setPlayerName($playerId, $playerName){

  }
  public function setPlayerpoints($playerId, $playerPoints){

  }
  public function setDeckAndValues($cards = []){

  }
  public function takeCardForPlayer($playerId){

  }
  public function getPlayerName($playerId){

  }
  public function getPlayerPoints($playerId){

  }
  public function getAllPlayersPoints(){

  }
}
new BlackjackGame
?>