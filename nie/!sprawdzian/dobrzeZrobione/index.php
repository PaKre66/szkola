<?php
include_once('./Blackjack.php');
class BlackjackGame extends Blackjack {
    function __construct($playerCount,$playerNames=[]){
      if(count($playerNames)==$playerCount){
        for ($i=0; $i < $playerCount; $i++) { 
          $this->setPlayerName($i,$playerNames[$i]);
          $this->setPlayerPoints($i,0);
          $this->playerCards[$i] = array();
        }
      }
    }
    public function setDeckAndValues($cards=['A' => 11, 'K' => 10, 'Q' => 10,
                                             'J' => 10, '10' => 10, '9' => 9, '8' => 8,
                                             '7' => 7, '6' => 6, '5' => 5, '4' => 4,
                                             '3' => 3, '2' => 2]){
      $this->cardsValues=$cards;
      foreach ($this->cardsAvailable as $v) {
        $this->cardsAvailable[$v]=array_keys($cards);
      }                                  
    }
    public function setPlayerName($playerId, $playerName){
      $this->players[$playerId]['name']=$playerName;
    }
    public function setPlayerPoints($playerId, $playerPoints){
      $this->players[$playerId]['points']=$playerPoints;
    }
    private function shuffleCard() {
      $color=$this->cardsAvailable[rand(0,3)];
      $cardFromColor=rand(0,count((array)$this->cardsAvailable[$color])-1);
      $card=$this->cardsAvailable[$color][$cardFromColor];
      return[
        'color'=>$color,
        'card'=>$card
      ];
  }
    public function takeCardForPlayer($playerId){
      if(!$this->checkCount()) {
        $card = $this->shuffleCard();
        array_push($this->playerCards[$playerId], $card['card']);
        $this->setPlayerPoints($playerId, $this->getPlayerPoints($playerId) + $this->cardsValues[$card['card']]);
        array_splice(
            $this->cardsAvailable[$card['color']],
            array_search(
                $card['card'],
                (array)$this->cardsAvailable[$card['color']]),
            1);
        return true;
      }
      else return false;
    }
    protected function checkCount(){
      foreach($this->getAllPlayersPoints() as $v) {
            if($v>=21)return true;
      } 
      return false;
    }
    public function getPlayerPoints($playerId){
      return $this->players[$playerId]['points'];
    }
    public function getAllPlayersPoints(){
      $points= array();
        foreach($this->players as $k => $v) {
          array_push($points, $v['points']);
        }
        return $points;
    }
    public function getPlayerName($playerId){
      return $this->players[$playerId]['name'];
    }
}
$bj=new BlackjackGame(2,['a','b']);
$bj->setDeckAndValues();
$nextTurn=true;
for ($i=0; $i < 10; $i++) { 
  for ($j=0; $j < 2; $j++) { 
    if (!$bj->takeCardForPlayer($j)) {
      $nextTurn=false;
      break;
    }
  }
}
var_dump($bj->getAllPlayersPoints());
?>