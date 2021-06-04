<?php
session_start();

require_once '../models/data.php';
if (!isset($_SESSION['name']) || $_SESSION['name'] == '') {
    // Redirect url
    header('Location: ../choices.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Belajar cara Penulisan</title>
</head>

<body>
    </div>
        <div class="col-md-auto">
            <div class="container">
            <a href="../choices.php?name=<?= $_SESSION['name'] ?>"class="kembali btn btn-success">Kembali</a>
        <div class="row">
            <div class="col-md-12 content">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h4><?= $_SESSION['name'] ?> memilih topik Cara Penulisan untuk dipelajari<h4>
            </div>
        </div>
        <div>            
            <div class="col">
                <h1 class="text-center"><strong>CARA PENULISAN HANGEUL</strong></h1>
                <P>   </P>
                <div class="deskripsi">
                    <P>Cara penulisan huruf Korea adalah persuku kata. Dengan demikian kosakata bahasa Korea merupakan terdiri dari suku kata atau bahkan terdiri dari gabungan beberapa suku kata. Selanjutnya dari suku kata bisa kita potong menjadi suku kata Konsonan dan Vokal (KV) atau Konsonan, Vokal, Konsonan (KVK).</p>
                    <p>Jika penerapan huruf Korea vokal yang berdiri sendiri penulisannya, maka huruf ㅇ masih berfungsi. Artinya huruf ㅇ tidak dihilangkan. Kecuali jika huruf vokal digabungkan dengan huruf konsonan maka huruf ㅇ dihilangkan.</p>
                    <P>Contoh :</p>
                    <P>우유 dibaca ‘uyu’ artinya ‘susu’</P>
                    <P>Selanjutnya didalam huruf Korea, terdapat 4 pola dasar penggabungan vokal dan konsonan yang harus Anda pahami.</P>
                    <P>Pertama adalah jika Konsonan bergabung dengan Vokal vertikal, maka berpola susun kesamping.</P>
                    <P>Contoh :</P>
                    <P>다리미 dibaca ‘tarimi’ artinya ‘setrika’</P>
                    <P>Kedua jika Konsonan bergabung dengan Vokal horizontal maka berpola susun kebawah.</P>
                    <P>Contoh :</P>
                    <P>포도 dibaca ‘phodo’ artinya ‘anggur’</P>
                    <P>Ketiga jika Konsonan bergabung dengan Vokal vertikal dan ada Konsonan akhir (bachim), maka ditulis seperti berikut :</P>
                    <P>Contoh :</P>
                    <P>신발 dibaca ‘sinbal’ artinya ‘sepatu’</P>
                    <P>Keempat jika  Konsonan bergabung dengan Vokal horizontal maka berpola susun tindih seperti contoh berikut :</P>
                    <P>Contoh :</P>
                    <P>공장 dibaca ‘kongjang’ artinya ‘pabrik’</P>                    
                </div>
            </div>        
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
<html>
