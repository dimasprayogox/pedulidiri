 <style>
   body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 17px;
      color: #666;
      line-height: 22px;
      }
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
li {
  display: inline;
}
table {
  width: 54%;
  hight: 100%;
  border: 1px solid;
}
</style>
 <img src="aky.jpg" alt="aku" width="128" height="128px;" style="float: left"/>
<h2 class="text-primary ">PEDULI DIRI</h2> <br> 
        <P class=" text-secondary small ">CATATAN PERJALANAN</P><br>

        
    <ul>
     <li><a href="?page=home">Home</a></li> |
  <li><a href="?page=catatan_perjalanan">Catatan Perjalanan</a></li> |
  <li><a href="?page=isi_data">Isi Data</a></li> |
  <li><a href="?page=logout">Logout</a></li> |

</ul><br>
<div class="card">
   
    <div class="card-body">
        <div class="table-responsive">
            <table id="data-table" class="table table-bordered">
                <thead>
                    <th>Tanggal</th>
                    <th>Waktu</th>
                    <th>Lokasi</th>
                    <th>Suhu Tubuh</th>
                </thead>
                <tbody>
                    <?php
                    $file="file/".$nik."-".$nama.".txt";
                    $fh=fopen($file, "r");
                    while(!feof($fh)){
                        $baris=fgets($fh);
                        if ($baris) {
                        $string_data=explode("|", $baris);
                    ?>
                    <tr>
                        <td><?php echo $string_data['0'] ?></td>
                        <td><?php echo $string_data['1'] ?></td>
                        <td><?php echo $string_data['2'] ?></td>
                        <td><?php echo $string_data['3'] ?></td>
                    </tr>

                    <?php }} ?>
                </tbody>
            </table>
        </div>
    </div>
</div><br>
<form>
<center><input type="button" class="btn btn-primary btn-b"  value="Isi catatan perjalanan" onclick="window.location.href='?page=isi_data'" /></center>
</form>