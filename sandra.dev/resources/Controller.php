<?php

class Controller
{
    private $model;
    public function __construct(PDO $db)
    {
        $this->model = new Model($db);
    }
    public function index()
    {
        $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS);
        if (empty($page))
            require('view/view.all.php');
        elseif ($page === "view") {
            require('view/view.all.php');
        } 
        elseif ($page === 'add') {
            require('view/add.php');
        }
        elseif ($page === 'create') {
            $music = new Music($_POST['Artist'], $_POST['Song'], $_POST['Year']);
            $success = $this->addMusic($music);
            header('Location: /index.php');
        }
        elseif ($page === 'delete') {
                $id = $_GET['id'];
                $this->deleteMusicById($id);
                header('Location: /index.php');
                exit();
        }

        elseif ($page === 'update') 
        {
            if (!empty($_POST)) {
                $music = $this->getById($_POST['id']);
                $music->setArtist($_POST['Artist']);
                $music->setSong($_POST['Song']);
                $music->setYear($_POST['Year']);
                $this->updateMusic($music);
                header('Location: /index.php');
                exit();
            }
            else {
                $id = $_GET['id'];
                $music = $this->getById($id);
                require('view/update.php');

            }
        }
        else {
            
        }
    }

    public function getById($id) {
        return $this->model->getById($id);
    }

    public function getAllMusic()
    {
        return $this->model->getAllArtist();
    }

    public function addMusic(Music $music) 
    {
        return $this->model->addMusic($music);
    }

    public function deleteMusicById($id) 
    {
        return $this->model->deleteMusicById($id);
    }

    public function updateMusic(Music $music) 
    {
        return $this->model->updateMusic($music);
    }
} 
