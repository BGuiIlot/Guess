<?php

namespace App\Core;

/**
 * Class CardGame32 : un jeu de cartes.
 * @package App\Core
 */
class CardGame32
{

  
  const ORDER_COLORS=['trèfle'=>4,'coeur'=>3,'pique'=>2,'carreau'=>1];
  const ORDER_NAMES=['roi'=>8,'dame'=>7,'valet'=>6,'as'=>5,'10'=>4,'9'=>3,'8'=>2,'7'=>1];
  /**
   * @var $cards array a array of Cards
   */
  private $cards;

  /**
   * Guess constructor.
   * @param array $cards
   */
  public function __construct(array $cards)
  {
    $this->cards = $cards;
  }

  /**
   * Brasse le jeu de cartes
   */
  public function shuffle(array $cardGame)
  {
    shuffle($cardGame);
  }

  // TODO ajouter une méthode reOrder qui remet le paquet en ordre

  /** définir une relation d'ordre entre instance de Card.
   * à valeur égale (name) c'est l'ordre de la couleur qui prime
   * coeur > carreau > pique > trèfle
   * Attention : si AS de Coeur est plus fort que AS de Trèfle,
   * 2 de Coeur sera cependant plus faible que 3 de Trèfle
   *
   *  Remarque : cette méthode n'est pas de portée d'instance (static)
   *
   * @see https://www.php.net/manual/fr/function.usort.php
   *
   * @param $c1 Card
   * @param $c2 Card
   * @return int
   * <ul>
   *  <li> zéro si $c1 et $c2 sont considérés comme égaux </li>
   *  <li> -1 si $c1 est considéré inférieur à $c2</li>
   * <li> +1 si $c1 est considéré supérieur à $c2</li>
   * </ul>
   *
   */
  public static function compare(Card $c1, Card $c2) : int
  {
    // TODO code naïf, et de plus il faudra prendre en compte la couleur !

    $c1Name = strtolower($c1->getName());
    $c2Name = strtolower($c2->getName());
    $c1Color = strtolower($c1->getColor());
    $c2Color = strtolower($c2->getColor());

    if ($c1Name === $c2Name) {
      if($c1Color ===$c1Color){
        return 0;
      }
      return(self::ORDER_COLORS[$c1Color]> self::ORDER_COLORS[$c2Color]) ? +1 : -1;
    }
    
    return (self::ORDER_NAMES[$c1Name]> self::ORDER_NAMES[$c2Name]) ? +1 : -1;
    return ($c1Name > $c2Name) ? +1 : -1;
    
  }

 // TODO manque PHPDoc
  public static function factoryCardGame32() : CardGame32 {
     // TODO création d'un jeu de 32 cartes
    $cartes = array(2, 3, 4, 5, 6, 7, 8, 9, 10, 'valet', 'dame', 'roi', 'As');
    $couleurs = array('carreau', 'coeur', 'pic', 'trefle');
    for($i=0; $i<count($couleurs);$i++){ 
    for($j=0; $j<count($cartes);$j++){ 
    $cardGame[$i*count($cartes)+$j] = $cartes[$j].' '.$couleurs[$i];
  }
   }
    //$cardGame = new CardGame32([new Card('As', 'Trèfle'), new Card('2', 'Trèfle')]);

    return $cardGame;
  }

  // TODO manque PHPDoc
  public function getCard($index) : Card {
    // TODO naïf
    return  $this->cards[$index];
  }

}
