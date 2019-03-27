<form method="post" action="/?controller=content&action=update">
    <label>Masukkan Judul Berita</label><br/>
    <input type="text" name="title" value=".$news->getTitle().">  <br/>
    <label>Masukkan Isi Berita</label> <br/>
    <input type="text" name="content" value=".$news->getContent().">  <br/>
    <label>Kategori Berita</label> <br/>
    <input type="text" name="category" value=".$news->getCategory().">  <br/>
    <input type="submit" value="oke">
</form>

}