<?php

namespace Hackathon\PlayerIA;
use Hackathon\Game\Result;

/**
 * Class PaperPlayer
 * @package Hackathon\PlayerIA
 * @author Robin
 *
 */
class JoffreymarcPlayer extends Player
{
    protected $mySide;
    protected $opponentSide;
    protected $result;

    public function getChoice()
    {
      //rotation de 1 en cas de défaites
      if ($this->result->getLastScoreFor($this->mySide) != 3)
      {
        if ($this->result->getLastChoiceFor($this->mySide) == 'rock')
          return parent::paperChoice();
        elseif ($this->result->getLastChoiceFor($this->mySide) == 'paper')
          return parent::scissorsChoice();
        elseif ($this->result->getLastChoiceFor($this->mySide) == 'scissors')
          return parent::rockChoice();
        else
          return parent::rockChoice();
      }
      else
      {
        if ($this->result->getLastChoiceFor($this->mySide) == 'rock')
          return parent::rockChoice();
        elseif ($this->result->getLastChoiceFor($this->mySide) == 'paper')
          return parent::paperChoice();
        elseif ($this->result->getLastChoiceFor($this->mySide) == 'scissors')
          return parent::scissorsChoice();
        else
          return parent::rockChoice();
        }
    }
      // -------------------------------------    -----------------------------------------------------
        // How to get my Last Choice           ?    $this->result->getLastChoiceFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Choice ?    $this->result->getLastChoiceFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get all the Choices          ?    $this->result->getChoicesFor($this->mySide)
        // How to get the opponent Last Choice ?    $this->result->getChoicesFor($this->opponentSide)
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide)
        // -------------------------------------    -----------------------------------------------------
        // How to get the stats                ?    $this->result->getStats()
        // How to get the stats for me         ?    $this->result->getStatsFor($this->mySide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // How to get the stats for the oppo   ?    $this->result->getStatsFor($this->opponentSide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // -------------------------------------    -----------------------------------------------------
        // How to get the number of round      ?    $this->result->getNbRound()
        // -------------------------------------    -----------------------------------------------------
        // How can i display the result of each round ? $this->prettyDisplay()
      // -------------------------------------    -----------------------------------------------------
};
