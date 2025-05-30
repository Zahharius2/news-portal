<?php

class Controller {


    
    public static function StartSite() {
        $arr = News::getLast10News();
        include_once 'view/start.php';
    }

    public static function AllCategory() {
        $arr = Category::getAllCategory();
        include_once 'view/category.php';
    }

    public static function AllNews() {
        $arr = News::getAllNews();
        include_once 'view/allnews.php';
    }

        public function registerForm() {
            include_once('view/formRegister.php');
        }
    
        public function registerUser() {
            $result = Register::registerUser();
            include_once('view/answerRegister.php');
        }    

    public static function NewsByCatID($id) {
        $arr = News::getNewsByCategoryID($id);
        include_once 'view/catnews.php';
    }

    public static function NewsByID($id) {
        $n = News::getNewsByID($id);
        include_once 'view/readnews.php';
    }

    public static function error404() {
        include_once 'view/error404.php';
    }

    public static function InsertComment($c, $id) {
        Comments::InsertComment($c, $id);
        header('Location:news?id='.$id.'#ctable');
    }

    public static function Comments($newsid) {
        $arr = Comments::getCommentByNewsID($newsid);
        ViewComments::CommentsByNews($arr);
    }

    public static function CommentsCount($newsid) {
        $arr = Comments::getCommentsCountByNewsID($newsid);
        ViewComments::CommentsCount($arr);
    }

    public static function CommentsCountWithAncor($newsid) {
        $arr = Comments::getCommentsCountByNewsID($newsid);
        ViewComments::CommentsCountWithAncor($arr);
    }
    public function registerForm()
    {
        include_once('view/formRegister.php');
    }
    public function registerUser()
    {
        $result = Register::registerUser();

        include_once ('view/answerRegister.php')
    }
}