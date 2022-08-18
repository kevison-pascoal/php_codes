<?php 
  echo "\n\n=======================================================\n\n";

  final class Months {
    private $months;
    
    public function __construct($months) {
      $this->setMonths($months);
    }

    private function setMonths($months) {
      $this->months = $months;
    }
    public function getMonths() {
      switch($this->months) {
        case 1:
          echo "Janeiro";
          break;
        case 2:
          echo "Fevereiro";
          break;
        case 3:
          echo "Março";
          break;
        case 4:
          echo "Abril";
          break;
        case 5:
          echo "Maio";
          break;
        case 6:
          echo "Junho";
          break;
        case 7:
          echo "Julho";
          break;
        case 8:
          echo "Agosto";
          break;
        case 9:
          echo "Setembro";
          break;
        case 10:
          echo "Outubro";
          break;
        case 11:
          echo "Novembro";
          break;
        case 12:
          echo "Dezembro";
          break;
        default:
          echo "Mês invalido";
          break;
      }
    }
  }

  $months = new Months(9);
  $months->getMonths();
  echo "\n\n=======================================================\n\n";
?>