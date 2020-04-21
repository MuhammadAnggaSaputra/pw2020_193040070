<?php
// array adalah variabel jamak yang bisa diisi dengan bnyak nilai
// pasangan antara KEY & VALUE

// Array Numerik
// Array yang KEYnya adalah ANGKA, disebut juga INDEX
// Index dibuat otomatis oleh PHP
// index selalu di mulai dari 0


// Array ASSOCIATIVE adalah Array yang KEYnya adalah STRING
// Di buat oleh PRogramer

$buku = ["judul"=>"Harry Potter", 
          "Pengarang" =>"J.K Rowling", 
          "penerbit"=>"Gramedia", 
          "Genre" => "Scifi"];

          echo $buku["penerbit"];


?>