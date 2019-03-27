<?php
    $nmr = 0;
    echo "<table border='1'>
    <tr>
    <th>No</th>
    <th>Judul Berita</th>
    <th>Konten Berita</th>
    <th>Kategori Berita</th>
    <th>Creator Berita</th>
    </tr>";
    if($this->news){
        foreach ($this->news as $new){
            echo "<tr>";
            echo "<td>" . $nmr += 1 . "</td>";
            echo "<td>" . $new->getTitle() . "</td>";
            echo "<td>" . $new->getContent() . "</td>";
            echo "<td>" . $new->getCategory() . "</td>";
            if($new->getCreator()) {
                echo "<td>" . $new->getCreator()->getName(). "</td>";
            }else{
                echo "<td></td>";
            }
            <form method='post' action='/?controller=content&action=tampil/".$new->getId()."'>
                    <input type='hidden' name='id' value=".$new->getId().">
                    <input type='submit' name='submit' value='Update'>
                </form>

            echo "</tr>";
        }
    }

    echo "<button type='submit' href='/content/save' value='Tambah Berita'>Tambah</button>";