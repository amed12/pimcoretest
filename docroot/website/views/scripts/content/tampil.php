<?php
echo  "<form method='post' action='/?controller=content&action=update'>
    <label>Masukkan Judul Berita</label><br/>
    <input type='hidden' name='id' value=".$this->news->getId().">
    <input type='text' name='title' value='".$this->news->getTitle()."'>  <br/>
    <label>Masukkan Isi Berita</label> <br/>
    <input type='text' name='content' value='".$this->news->getContent()."'>  <br/>
    <label>Kategori Berita</label> <br/>
    <input type='text' name='category' value='".$this->news->getCategory()."'>  <br/>
    <input type='submit' value='oke'>
</form>";

