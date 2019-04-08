<?php echo form_open_multipart('kontak/create');?>
<center><body>Tampilan Tambah Data Rest Program </body>
<table>
    <tr><td>NAMA</td><td><?php echo form_input('nama');?></td></tr>
    <tr><td>NOMOR</td><td><?php echo form_input('nomor');?></td></tr>        
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('kontak','Kembali');?></td></tr>
</table></center>
<?php
echo form_close();
?>