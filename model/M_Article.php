<?php

require_once 'DAO.php';

class M_Article
{
    private $DAO;

    public function __construct()
    {
        $this->DAO = new DAO;
    }

    public function getArticle($filter=array())
    {
        $id_article='';
        extract($filter);
        $SQL = " SELECT * FROM article WHERE id_article = $id_article";

        return  $this->DAO->read($SQL);
    }

    public function getAllArticle($filter=array())
    {
        $page = 1;
        $cantRow=5;
        $count = 'N';

        extract($filter);
        
        if ($count=='S') {
            $SQL = "SELECT count(*) as totalRows";
        } else {
            $SQL = "SELECT *";
        }

        $SQL .= " FROM article ORDER BY date DESC";
        $SQL .= " LIMIT ".($page*$cantRow-$cantRow).", $cantRow ";

        $article = $this->DAO->read($SQL);

        if ($count=='S') {
            return $article[0]['totalRows'];
        } else {
            return $article;
        }
    }
    public function createArticle($filter=array())
    {
        $title = '';
        $urlVideo = '';
        $content = '';
        $img ='';
        $id_img='';
        extract($filter);
        if ($img!='') {
            $SQL = "INSERT INTO image SET
            url_img = '$img',
            desc_img = '',
            date_img = NOW()";
            $id_img = $this->DAO->create($SQL);
        }
        $SQL = "INSERT INTO article SET
        title = '$title',
        content = '$content',
        date = NOW(),
        public = 'Y',
        url_video ='$urlVideo'";
        if ($id_img != '') {
            $SQL.=",id_img=$id_img";
        }
        // echo json_encode( $SQL);
        return $this->DAO->create($SQL);
    }

    public function updateArticle($filter=array())
    {
        $id_article='';
        $title = '';
        $urlVideo = '';
        $content = '';
        $id_img='';
        $date='';
        extract($filter);
        $SQL= "UPDATE article SET";
        if ($title!='') {
            $SQL.=" title ='$title'";
        }
        if ($content!='') {
            $SQL.=", content = '$content'";
        }
        if ($date!='') {
            $SQL.=", date = '$date'";
        }
        if ($id_img!='') {
            $SQL.=", id_img ='$id_img'";
        }
        $SQL.=" WHERE id_article=$id_article";
        // return $SQL;
        return $this->DAO->update($SQL);
    }

    public function deleteArticle($filter=array())
    {
        $id_article='';
        extract($filter);
        $SQL = "DELETE FROM article WHERE id_article ='$id_article'";
        return $this->DAO->delete($SQL);
    }

    public function updateState($filter=array())
    {
        $id_article='';
        extract($filter);
        $SQL="UPDATE article 
                SET public = CASE WHEN public='Y' THEN 'N' ELSE 'Y' END
                WHERE id_article='$id_article' ";
        return $this->DAO->update($SQL);
    }

    /**
     * Get the last 3 articles published
     */
    public function getLastArticles()
    {
        $SQL="SELECT id_article, DATE,title FROM article ORDER BY date DESC LIMIT 3";
        return $this->DAO->read($SQL);
    }
}
