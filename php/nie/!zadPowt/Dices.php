<?php
abstract class Dices {
    /**
     * Tablica graczy.
     * Zawiera informacje o graczu w postaci imienia.
     * Dodatkowo tablica zawiera informacje o aktualnej ilości punktów.
     * Nie może być modyfikowana podczas gry!
     * Jej modyfikacja powoduje zakończenie aktualnej gry i rozpoczęcie nowej.
     * Przykładowo dla dwójki graczy:
     * $players = [
     *   0 => ['name' => 'Jan Niezbędny', 'points' => 0],
     *   1 => ['name' => 'Piotr Potrzebny', 'points' => 0]
     * ];
     */
    protected $players = [];
    /**
     * Tablica wielowymiarowa rzutów graczy.
     * Pierwszym wymiarem jest indeks z tablicy graczy, a drugim lista zdobytych do tej pory punktów.
     */
    protected $playerRolls = [];
    /**
     * Metoda ustawiająca nazwę gracza.
     * Po ustawieniu wprowadza informację do tablicy graczy.
     * 
     * @param int $playerId
     * @param string $playerName
     * 
     * @return null
     */
    abstract public function setPlayerName($playerId, $playerName);
    /**
     * Metoda ustawiająca ilość punktów gracza.
     * Po ustawieniu wprowadza informację do tablicy graczy.
     * 
     * @param int $playerId
     * @param string $playerPoints
     * 
     * @return null
     */
    abstract public function setPlayerPoints($playerId, $playerPoints);
    /**
     * Wykonuje rzut dla gracza.
     * Metoda ma za zadanie wylosować kartę, dodać do puli kart gracza, dodać punkty za kartę do punktacji gracza, a następnie usunąć ją z listy dostępnych.
     * @param int $playerId
     * 
     * @return null
     */
    abstract public function makeRollForPlayer($playerId);
}
?>