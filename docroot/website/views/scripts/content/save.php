<?php
$nmr = 0;
echo "<table border='1'>
    <tr>
    <th>No</th>
    <th>Judul Berita</th>
    <th>Konten Berita</th>
    <th>Kategori Berita</th>
    <th>Creator Berita</th>
    <th>Aksi Berita</th>
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
        echo "<td>
                <form method='post' action='/?controller=content&action=tampil'>
                    <input type='hidden' name='id' value=".$new->getId().">
                    <input type='submit' name='submit' value='Update'>
                </form>";
        echo "<form method='post' action='/?controller=content&action=delete'>
                    <input type='hidden' name='id' value=".$new->getId().">
                    <input type='submit' name='submit' value='Delete'>
                </form>
             </td>";
        echo "</tr>";
    }
}
?>

<form method="post" action="/?controller=content&action=submit">
    <label>Masukkan Judul Berita</label><br/>
    <input type="text" name="title">  <br/>
    <label>Masukkan Isi Berita</label> <br/>
    <input type="text" name="content">  <br/>
    <label>Pilih kategori Berita</label> <br/>
    <select name="category">
        <option value="Sport">Sport</option>
        <option value="Weather">Weather</option>
    </select>
    <input type="submit" value="oke">
</form>
