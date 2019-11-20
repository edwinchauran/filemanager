<?php
        $Directory = dir("archivos");
        $i = -1;
        $path = "./archivos";
            while (($archivo = $Directory->read()) == true)
        {
            //Imagenes
            if
            (
                $archivo !== "." &&
                $archivo !== ".."  &&
                $archivo !== "desktop.ini" &&
                $archivo !== "Thumbs.db" &&
                $archivo !== "carpeta" &&
                substr($archivo, -4) == ".png"||
                substr($archivo, -4) ==".jpg" ||
                substr($archivo, -4) ==".gif" ||
                substr($archivo, -5) ==".jpeg"||
                substr($archivo, -4) ==".JPG"
            )
            {
                // <div class="col-4  col-md-4 col-lg-2 px-1 pt-3 shadow">
                //     <div class="text-light p-1">
                //         <b>'.substr($archivo, 0, 20).substr($archivo,-5).'</b>
                //         <input type="checkbox">
                //         <i class="fa fa-trash"></i>
                //     </div>
                echo '
                <div class="col-4  col-md-4 col-lg-2 pb-1 px-1 ">
                    <a  target="_blank" href="archivos/'."/".rawurlencode(basename($archivo)).'">
                        <img src="archivos/'.rawurlencode(basename($archivo)).'" class="img-fluid bg-light">
                    </a>
                    </div>
                    ';
                    // <a class="btn btn-dark col-sm-12" target="_blank" download href="archivos/'."/".rawurlencode(basename($archivo)).'"><i class="text-white fa fa-download"></i></a>
            }
            $i++;
        }

        $Directory->close();
                // echo '
                // <tr id="'."img".$i.'">
                //     <td><b>'.substr($archivo,0,25).'</b></td>
                //     <td>
                //     <a class="btn btn-primary col-sm-6 col-md-5" target="_blank" href="archivos/'."/".$archivo.'"><i class="fa fa-eye"></i> Ver</a>
                //     <a class="btn btn-success col-sm-6 col-md-5" target="_blank" download href="archivos/'."/".$archivo.'"><i class="fa fa-download"></i> Descargar</a>
                //     </td>
                // </tr>';
                // echo '<video src="archivos/'.rawurlencode(basename($archivo)).'"></video>';
                // echo '<br>';
?>



