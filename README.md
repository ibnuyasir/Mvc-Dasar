cara penggunaan

1. run service XAMPP PHP & phpmyadmin
2. buat database baru bernama "shell"
3. import table dalam folder /database dan pilih database.txt
4. coba jalankan service dengan nama http://localhost/<nama_folder>

#! Jika muncul pesan 

Koneksi Gagal: could not find driver
Fatal error: Uncaught Error: Call to a member function prepare() on null in C:\xampp\htdocs\shell-php\model\model.php:12 Stack trace: #0 C:\xampp\htdocs\shell-php\controller\controller.php(12): MI_Models->data() #1 C:\xampp\htdocs\shell-php\index.php(5): MI_Controller->index() #2 {main} thrown in C:\xampp\htdocs\shell-php\model\model.php on line 12

1. buka file php.ini
2. cari ;extension=pdo_mysql
3. aktifkan dengan menghapus ;# Mvc-Dasar-PHP-
# Mvc-Dasar-PHP-
