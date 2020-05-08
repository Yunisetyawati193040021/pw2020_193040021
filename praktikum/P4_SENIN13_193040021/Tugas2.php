<?php
    $elektronik = [
        [
         "foto" => "tv.jpg",
         "nama" => "LG 22LD350",
         "warna" => "Black",
         "stok" => 220,
         "harga" => 4500000
        ],
        [
         "foto" => "camera.jpg",
         "nama" => "Canon EOS M6 Mark",
         "warna" => "Black",
         "stok" => 600,
         "harga" => 13750000  
        ],
        [
         "foto" => "ac.jpg",
         "nama" => "Samsung 1/2PK AR05HCFSVURN",
         "warna" => "Black,White",
         "stok" => 520,
         "harga" => 3620000
        ],
        [
        "foto" => "leptop.png",
         "nama" => "Laptop HP Notebook Pav 15-DB0005AU",
         "warna" => "Blue,Black,White",
         "stok" => 150,
         "harga" => 3500000
        ],
        [
        "foto" => "ricecooker.jpg",
         "nama" => "PHILIPS HD 3132 Pemium RiceCooker",
         "warna" => "Red,Gold,Black,White-Green",
         "stok" => 345,
         "harga" => 497000
        ],
        [
         "foto" => "kulkas.jpg",
         "nama" => "TOSHIBA GR-WG66ED",
         "warna" => "Blue-Grey,Black",
         "stok" => 660,
         "harga" => 7500000
        ],
        [
         "foto" => "kipas.png",
         "nama" => "Cosmos Dsk Fan Kipas Angin Meja12LDA",
         "warna" => "Grey,Black",
         "stok" => 213,
         "harga" => 187000
        ],
        [
         "foto" => "blender.jpg",
         "nama" => "BLENDER ELECTROLUX EBR3416",
         "warna" => "Lightblue",
         "stok" => 361,
         "harga" => 648000
        ],
        [
         "foto" => "microwave.jpg",
         "nama" => "Panasonic Microwave Oven",
         "warna" => "Black,Grey,Drak-Blue",
         "stok" => 320,
         "harga" => 1680000
        ],
        [
         "foto" => "setrika.jpg",
         "nama" => "PHILIPS Setrika HD 1173/80",
         "warna" => "Black,Pink-White,Orange-White,Green-White",
         "stok" => 278,
         "harga" => 342000
        ],
        [
         "foto" => "kompor.jfif",
         "nama" => "Kompor Gas Glass/Kaca-W888",
         "warna" => "Green-Black",
         "stok" => 570,
         "harga" => 850000
        ],
        [
         "foto" => "mesincuci.jpg",
         "nama" => "SHARP Mesin Cuci Twin Tub ES-T86CL-HK",
         "warna" => "Grey-White",
         "stok" => 990,
         "harga" => 1990000
        ],
        [
         "foto" => "dispenser.jpg",
         "nama" => "SANKEN HWD-C590 Dispenser",
         "warna" => "Black,Silver",
         "stok" => 432,
         "harga" => 3000000
        ],
        [
        "foto" => "radio.jpg",
        "nama" => "Lenco SCD-580-boombox-CD-USB",
        "warna" => "White",
        "stok" => 890,
        "harga" => 1408000
        ],
        [
        "foto" => "pc.jpg",
        "nama" => "ASUS All-inOne V222UAK-WA541T",
        "warna" => "White,Gold",
        "stok" => 800,
        "harga" => 9660000
        ]
     ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas2</title>
    <style>
        table{
            border: 1px solid black;
        }
        td, h2{
            text-align: center;
        }
        h1{
            text-align: center;

        }
        img{
            height: 250px;
        }
    </style>
</head>
<body>
    <h1 align="center">ELECTRONIC BERKAH</h1>
    <table border="1" cellpadding="3" cellspacing="0">
        <tr>
          <td align="center"><b>No.</b></td>
          <td align="center"><b>Foto Barang</b></td>
          <td align="center"><b>Nama Barang</b></td>
          <td align="center"><b>Warna</b></td>
          <td align="center"><b>Stok Tersedia</b></td>
          <td align="center"><b>Harga (Rp.)</b></td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($elektronik as $e) : ?>
         <tr>
             <td align="center"><?=$i; ?></td>
             <td align="center"><img src="img/<?=$e["foto"]; ?>"></td>
             <td align="center"><?=$e["nama"]; ?></td>
             <td align="center"><?=$e["warna"]; ?></td>
             <td align="center"><?=$e["stok"]; ?></td>
             <td align="center"><?=$e["harga"]; ?></td>
         </tr>
         <?php $i++;?>
        <?php endforeach ?>
    </table>
</body>
<br></br>
    <tr>
        <h3><a href="index.php">Back</a></h3>
    </tr>
</html>