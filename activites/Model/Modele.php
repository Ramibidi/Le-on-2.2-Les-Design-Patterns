<?php
require('connectDB.php');
class Article
{
    // private $localhost = 'localhost';
    // private $username = 'username';
    // private $password = '';
    // private $db = 'test_db';

    //method to connect to database
    // function connect()
    // {
    //     $connexion = mysqli_connect($this->localhost, $this->username, $this->password, $this->db);
    // if (!$connexion) {
    //     echo 'Connection error' . mysqli_connect_error();
    // } else {
    //     echo "you are successfully connected";
    // }
    //     return $connexion;
    // }


    //method to post articles
    public function postArticle()
    {
        // $conn = $this->connect();
        $connexion = new connectDB();
        $conn = $connexion->getConnection();

        if (isset($_POST['submit'])) {

            $post = isset($_POST['post']) ? $_POST['post'] : '';
        
            //create sql insert
            $add_sql = "INSERT INTO posts(post) VALUES ('$post')";
            // save to db and check
            if (mysqli_query($conn, $add_sql)) {
                echo " successfully added !!! ";
            } else {
                echo 'query error : ' . mysqli_error($conn);
            }
        }
    }


    //method to get articles
    public function getArticles()
    {
        $connexion = new connectDB();
        $conn = $connexion->getConnection();

        // $conn = $this->connect();
        //write query for all articles
        $sql = 'SELECT * from posts';

        //make query and get result
        $result = mysqli_query($conn, $sql);

        //fetch the resulting rows as an array
        $articles = mysqli_fetch_all($result, MYSQLI_ASSOC);

        //free result from memory
        // mysqli_free_result($result);

        return $articles;
    }
}
