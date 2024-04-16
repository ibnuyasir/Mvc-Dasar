<?php 
class MI_Models {
    private $db;
    public function data () {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=shell', 'root', '');
            //$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Koneksi Gagal: ". $e->getMessage();
        }
        $sql = "SELECT * FROM tables";
        $query = $this->db->prepare($sql);
        $query->execute();
        $row = $query->fetchAll(PDO::FETCH_ASSOC);
        return $row;

        if (count($row) == 0) {
            echo "<button id=message_empty>Data Tidak Ada</button>";
        }
    }
}