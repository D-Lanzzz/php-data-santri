<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Santri</title>
    
    <!-- Kumpulan Link -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="hm.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">



</head>
<body>
    <div class="container.judul">
        <h1 style="margin-left: 50%; margin-top: 150px;">Data Santri</h1>
        <a href="tambah.php">
        <button type="button" class="btn btn-light" > + Tambah Data</button>
        </a>
    
    </div>
    <div class="container mt-4 kotak">
   
        <div class="row justify-content-center">
            <!-- berhasil -->
            
            
            <div class="col-md-12 mt-3 rounded">
                
            <!-- berhasil sweetAlert-->
            <table class="table">
                <div class="duwur">

        <tr class="text-dark"> 
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No.telp</th>
            <th>Ayah</th>
            <th>Ibu</th>
            <th>Aksi</th>
        </tr>
                </div>
      

        <tr>
            <td>1</td>
            <td>Agil</td>
            <td>Setono</td>
            <td>0821345</td>
            <td>Eed</td>
            <td>Pipin</td>
            <td>
                <a href="edit.php"><i class="bi bi-pencil-square"></i></a>  | 
                <a href="hapus.php"><i class="bi bi-trash3"></i></a> 
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Uden</td>
            <td>Adoh</td>
            <td>0812345</td>
            <td>Misbah</td>
            <td>Mala</td>
            <td><i class="bi bi-pencil-square"></i> | <i class="bi bi-trash3"></i></td>
        </tr>
        <tr>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>






    </table>
    
    </div>
        </div>
             </div>

</body>
</html>