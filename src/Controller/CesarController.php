<?php
namespace Controller;
use ThirtySix\Connexion as PDO;
use Model\Nominee;
use Model\User;
use Model\Category;

class CesarController{
  public function gagnantsAction(){
    $pdo = new PDO;
    $pdo = $pdo->getInstance();

    $winners = Nominee::getWinners($pdo);

    $bestplayers = User::getBest($pdo);

    $categories = [];
    foreach ($winners as $winner) {
      $categories[$winner['category_id']] = Category::getById($pdo, $winner['category_id']);
    }
    include "./winners.php";
  }
}