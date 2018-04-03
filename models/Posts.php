<?php
Class Posts
{
    public static function getPostList()
    {
        $db = Db::getConnection();

        $postList = array();

        $result = $db->query('SELECT * FROM post ORDER BY  date DESC');
        //  $result = $db->query('SELECT id FROM comments WHERE comments.post_id = '.'SELECT id FROM post' );

        $i = 0;
        while ($row = $result->fetch()){
            $postList[$i]['id'] = $row['id'];
            $postList[$i]['author_name'] = $row['author_name'];
            $postList[$i]['title'] = $row['title'];
            $postList[$i]['description'] = $row['description'];
            $postList[$i]['date'] = $row['date'];
            $i++;
        }
        return $postList;
    }

    public static function getPost($id)
    {


        $db = Db::getConnection();

        $result = $db->query("SELECT * FROM post WHERE id = '$id'");//"SELECT * FROM comments WHERE comments.post_id = '$id'"
        $result->setFetchMode(PDO::FETCH_ASSOC);
        return $result->fetch();


    }

public static function getComments($id){


    $db = Db::getConnection();
    $com = array();
    $res = $db->query("SELECT * FROM comments WHERE post_id = '$id'");//"SELECT * FROM comments WHERE comments.post_id = '$id'"
    $i = 0;
    while ($row = $res->fetch()) {
        $com[$i]['id'] = $row['id'];
        $com[$i]['author_name'] = $row['author_name'];
        $com[$i]['comments'] = $row['comments'];
        $com[$i]['date'] = $row['date'];

        $i++;


    }
    return $com;

}
public static function getPopPost(){

    $db = Db::getConnection();
    $com1= array();
    $res1 = $db->query("SELECT  p.title,p.description,p.author_name,p.date,
p.id ,c.post_id,c.comments, COUNT(c.post_id) FROM comments c,post p WHERE p.id = c.post_id GROUP BY c.post_id DESC LIMIT 5");

    $i = 0;
    while ($row = $res1->fetch()) {
        $com1[$i]['title'] = $row['title'];
        $com1[$i]['description'] = $row['description'];
        $com1[$i]['author_name'] = $row['author_name'];
        $com1[$i]['date'] = $row['date'];
        $com1[$i]['id'] = $row['id'];


        $i++;


    }
            return $com1;

}







}
