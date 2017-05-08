<?php

class Model 
{
	private $db;

	public function __construct(Database $db) {
			$this->db = $db;
	}

    public function getById($id) {
        $get_stm = $this->db->prepare('SELECT * FROM `music` WHERE id = :id');
        $get_stm->bindValue(':id', $id);
        $get_stm->execute();
        $get_stm-> setFetchMode(PDO:: FETCH_ASSOC);
        $result = $get_stm->fetch();
        $music = new Music($result['artist'],$result['song'],$result['year']);
        $music->setId($result['id']);
        return $music;
    }

    public function getAllArtist()
    {
        $get_stm = $this->db->prepare('SELECT * FROM `music`');
        $get_stm->execute();
        $get_stm-> setFetchMode(PDO:: FETCH_ASSOC);
        $music = $get_stm->fetchAll();
        $music = array_map(function($item) {
            $music = new Music($item['artist'],$item['song'],$item['year']);
            $music->setId($item['id']);
        	return $music;
        }, $music);
        return $music;
    }
	
    public function addMusic(Music $music) 
    {
            $sql = "INSERT INTO `music` (`artist`, `song`, `year`) VALUES (:artist, :song, :year)";
            $stm = $this->db->prepare($sql);
            
            $stm->bindValue(':artist', $music->getArtist());
            $stm->bindValue(':song', $music->getSong());
            $stm->bindValue(':year', $music->getYear());

            $success = $stm->execute();
            $id = $this->db->lastInsertId();
            $music->setId($id);
            return $success;
    }

    public function deleteMusicById($id)
    {
        $delete_stm = $this->db->prepare("DELETE FROM `music` WHERE id = :id");
        $delete_stm->execute([':id' => $id]);
        return $delete_stm;
    }

    public function updateMusic($music) 
    {
        $stm_update = $this->db->prepare("UPDATE `music` SET `artist` = :artist, `song` = :song, `year` = :year WHERE `id`= :id");

        $stm_update->execute([':id' => $music->getId(), ':artist' => $music->getArtist(), ':song' => $music->getSong(), ':year' => $music->getYear()]);
        return $stm_update;
    }

}
