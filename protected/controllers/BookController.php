<?php

class BookController extends Controller
{
    public function actionIndex()
    {

         $b = new Book; $b->author = "Тургенев"; $b->save(false);

    }
}


/*
Поиск
findByPk
findAllByPk
find
findAll $a = Book::model()->findAll(('id<:num'), array(':num' =>$num));
findByAttributes  $a = Book::model()->findByAttributes(array('id'=> array(1,2,3), 'title' => 'Война и мир2'));
findAllByAttributes
findBySql a = Book::model()->findBySql('SELECT title FROM {{book}} WHERE id = :num', array(':num' => $num));
Count   $a = Book::model()->count('year = :num', array(':num' => $num));
findAllBySql
exists

updateByPk $a = Book::model()->updateByPk('2', array('title' => $title));
updateAll  $a = Book::model()->updateAll(array('title' => "Война и мир"), "title = :title", array(':title' => 'Юху'));
deleteByPk $a = Book::model()->deleteByPk(4);
deleteAll 

$b = new Book; $b->author = "Тургенев"; $b->save(false);
*/
