<?php

class News {
  
  /*
   * Возвращает новость по идентификатору
   */
  public static function getNewsItemById($id) {
    $id = intval($id);
    
    if ($id) {
      $db = Db::getConnection();

      $newsList = array();

      $result = $db->query('SELECT * FROM news WHERE id=' . $id);

      $result->setFetchMode(PDO::FETCH_ASSOC);
      //$result->setFetchMode(PDO::FETCH_NUM);

      $newsItem = $result->fetch();

      return $newsItem;
    }
  }
  
  /*
   * Возвращает список новостей
   */
  public static function getNewsList() {
    $db = Db::getConnection();
    
    $newsList = array();
    
    $result = $db->query('SELECT id, title, date, short_content '
      . 'FROM news '
      . 'ORDER BY date DESC '
      . 'LIMIT 10');
    
    $i = 0;
    
    while ($row = $result->fetch()) {
      $newsList[$i]['id'] = $row['id'];
      $newsList[$i]['title'] = $row['title'];
      $newsList[$i]['date'] = $row['date'];
      $newsList[$i]['short_content'] = $row['short_content'];
      $i++;
    }
    return $newsList;
  }
}