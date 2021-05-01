<?php
echo "<table border='1'
<tr>
    <td>Nama Barang</td>
    <td>Harga Barang</td>
    <td>Stock Barang</td>
</tr>";
foreach ($konten as $rows =>$row){
    echo 
    "<tr>";
    foreach ($row as $col => $cell){
        echo "<td>".$cell. "</td>";
    }
    echo "</td>";
}
echo "</table>";