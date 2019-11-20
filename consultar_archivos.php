<table class="table  table-sm table-dark">
<thead class="">
<tr>
<th>nombre</th>
<th></th>
</tr>
</thead>
<tbody>
<?php
        $Directory = dir("archivos");
        $i = -1;
        $path = "./archivos";
            while (($archivo = $Directory->read()) == true)
        {
            if (
                $archivo !== "."           &&
                $archivo !== ".."          &&
                $archivo !== "desktop.ini" &&
                $archivo !== "Thumbs.db"   &&
                $archivo !== "carpeta"     &&
                substr($archivo,-4) !== ".mp4" &&
                substr($archivo,-4) !== ".ogg" &&
                substr($archivo,-4) !== ".webm"&&
                substr($archivo,-4) !== ".ogv" &&
                substr($archivo,-4) !== ".mp3" &&
                substr($archivo,-4) !== ".png" &&
                substr($archivo,-4) !== ".jpg" &&
                substr($archivo,-5) !== ".jpeg"&&
                substr($archivo,-4) !== ".MP4"
            ) 
            {
                echo '
                <tr>
                    <td>'.substr($archivo,0,27).substr($archivo,-4).'</td>
                        <td><a download href="archivos/'.$archivo.'" class="btn btn-dark shadow">Descargar</a></td>
                </tr>';
            }
            $i++;
        }
        $Directory->close();
        // rawurlencode(basename($archivo))
?>
</tbody>
</table>