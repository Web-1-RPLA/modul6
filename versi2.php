<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge6</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>gambar</th>
            <th>Jumlah Kaki</th>
            <th>cari</th>

        </tr>
        <?php
            $data = array('ayam', 'kucing', 'sapi', 'kambing');
            $jumlahKaki = array('ayam' => 2, 'kucing' => 4, 'sapi' => 4, 'kambing' => 4);
            $gambar = array('ayam' => 'https://i.pinimg.com/originals/2d/58/38/2d58385ccd6184d776e2be1f34a6e8d5.jpg', 
            'kucing' => 'https://th.bing.com/th/id/R.376290fd89593b649b3ba0a5b15d1e5e?rik=LjEdYgOhov%2f80Q&riu=http%3a%2f%2fwww.pets-of-the-realm.com%2fwp-content%2fuploads%2f2016%2f10%2fkucing.jpg&ehk=Qvo6%2b0oa45fzrp0hW4p5L4%2f0hR8bkvM%2biQInw5Rw%2fHs%3d&risl=&pid=ImgRaw&r=0', 
            'sapi' => 'https://moondoggiesmusic.com/wp-content/uploads/2019/03/Sapi.jpg', 
            'kambing' => 'https://th.bing.com/th/id/OIP.oM7N6VCgXEwkhSOQzvQjCwHaF3?rs=1&pid=ImgDetMain');

            $i = 1;
            foreach($data as $item){
                ?>
                <tr>
                <td><?= $i ?></td>
                <td><?= $item ?></td>
                <td><img src="<?= $gambar[$item] ?>" alt="<?= $item ?>" width="100"></td>
                <td><?= $jumlahKaki[$item] ?></td>
                <td><a href="https://www.google.com/search?tbm=isch&q=<?= $item ?>" target="_blank">cari</a></td>
                </tr>
            <?php   
            $i++;
            }
            ?>

    </table>
</body>
</html>