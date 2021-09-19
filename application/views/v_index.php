<section>
    <h1><?php echo $judul ?></h1>
    <p align='justify'>
    Pada pengertian codeigniter di atas tadi di jelaskan bahwa codeigniter mengguakan metode MVC. Apa itu MVC? Kita juga harus mengetahui apa itu MVC sebelum masuk dan lebih jauh dalam belajar codeigniter.
    </p>

    <p>MVC adalah teknik atau konsep yang memisahlan komponen utama menjadi tiga komponen yaitu model, view, dan controller.</p>

    <ol type="a">
        <li>Model</li>

    <p align='justify'>
    Model adalah kelas mempresentasikan atau memodelkan tipe data yang akan digunakan oleh aplikasi. Model juga dapat didefinisikan sebagai bagian penangan yang berhubungan dengan pengolahan atau memanipulasi database. Seperti misalnya mengambil data dari database, menginput dan pengolahan database lainnya. Semua instruksi atau fungsi yang berhubungan dengan pengolahan database di letakkan di dalam model. Sebagai contoh, jika ingin membuat aplikasi untuk menghitung luas dan keliling lingkaran, maka data memodelkan objek lingkaran sebagai kelas model.</p>

    <p align='justify'>Sebagai catatan, semua model harus disimpan di dalam folder applicatio\models</p>

        <li>View</li>

    <p align='justify'>Viewmerupakan bagian yang menangani halaman userinterface atau halaman yang muncul pada user (pada browser). Tampilan dari user interface di kumpulkan pada view untuk memisahkannya dengan controller dan model sehingga memudahkan web designer dalam melakukan pengembangan tampilan halaman website.</p>

        <li>Controller</li>

    <p align='justify'>Controller merupakan kumpulan instruksi aksi yang menghubungkan model dan view, jadi user tidak akan berhubungan dengan model secara langsung, intinya data yang tersimpan di database (model) di ambil oleh controller dan kemudian controller pula yang menampilkan nya ke view.</p>

    <p align='justify'>Dari penjelasan tentang model, view, dan controller di atas dapat disimpulkan bahwa controller sebagai penghubung view dan model. Misalnya pada aplikasi yang menampilkan data dengan menggunakan metode konsep MVC, controller memanggil instruksi pada model yang mengambil data pada database, kemudian controller yang akan meneruskannya pada view untuk ditampilkan. Jadi jelas sudah dan sangat mudah dalam pengembangan aplikasi dengan cara MVC ini karena web designer atau front-end developer tidak perlu lagi berhubungan dengan controller, dia hanya perlu berhubungan view untuk mendeign tampilan aplikasi, karena back-end developer yang menangani bagian controller dan modelnya. Jadi pembagian tugas pun menjadi mudah dan pengembangan aplikasi dapat dilakukan dengan cepat dan terstruktur.</p>
</section>