<?php
namespace Controller;
use ThirtySix\Connexion;

class CesarController{
  public function gagnantsAction(){
    $winners = Nominee::getWinners($pdo);

    $bestplayers = User::getBest($pdo);

    $categories = [];
    foreach ($winners as $winner) {
      $categories[$winner['category_id']] = Category::getById($pdo, $winner['category_id']);
    }
    include "./winners.php";
  }
}