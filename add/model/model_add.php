<?php
class MI_Model_Add
{
    private $db;

    public function insert_data()
    {
        try {
            $conn = 'mysql:host=localhost;dbname=shell';
            $this->db = new PDO($conn, 'root', '');
        } catch (PDOException $e) {
            echo "Koneksi Gagal: " . $e->getMessage();
        }
        if (isset($_POST['submit'])) {
            $user = $_POST['username'];
            $email = $_POST['email'];
            $pass = $_POST['password'];

            $sql = "INSERT INTO tables (username, email, password)" .
                "VALUES ('$user', '$email', '$pass')";
            $query = $this->db->prepare($sql);
            $query->execute();
            $row = $query->fetchAll(PDO::FETCH_ASSOC);
            return $row;
            
            if (count($row) == 1) {
                echo "";
            }
        }
    }
}
