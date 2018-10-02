<?php

class PostController
{

    public function actionIndex()
    {
        $posts = array();
        $posts = Posts::getPostList();
        $com1 = Posts::getPopPost();
        require_once(ROOT . '/views/post/index.php');
        return true;
    }


    /**
     * @param $postId
     * @return bool
     */
    public function actionView($postId)
    {
        $post = array();
        $post = Posts::getPost($postId);


       if (isset($_POST['author_name1'])) {
            $author_name = $_POST['author_name1'];
            $comments = $_POST['comment'];
           var_dump($author_name,$comments,$postId);
            $db = Db::getConnection();
            $res = $db->prepare("INSERT INTO comments (`post_id`,`comments`,`author_name`) VALUES ('$postId','$comments','$author_name')");
            $res->execute();
        }
        $com = array();
        $com = Posts::getComments($postId);
        require_once(ROOT . '/views/post/view.php');
        return true;

    }


    public function actionForm()
    {
        if (isset($_POST['title'])) {
            $title = htmlspecialchars($_POST['title']);
            $description = htmlspecialchars($_POST['description']);
            $author_name = htmlspecialchars($_POST['author_name']);
            //$submit = $_POST['submit'];
            if (isset($_POST['submit'])) {
                $db = Db::getConnection();
                $add = $db->prepare("INSERT INTO post (`title`,`author_name`,`description`) VALUES ('$title','$author_name','$description')");
                $add->execute();
            }
        }

        require_once(ROOT . '/views/post/form.php');
        if (isset($_POST['submit'])) {
            $scr = '<script type="text/javascript">
window.location = "/"
</script>';
            return print ($scr);
        }
    }


}