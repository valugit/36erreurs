<?php 
namespace Model;

class Category{

  const TABLE_NAME = "ce16_category";

  public static function getById($id){
    $q = $pdo->prepare('SELECT * FROM '.self::TABLE_NAME.' WHERE id = :id');
    $q->execute();
    return $q->fetch();
  }

}