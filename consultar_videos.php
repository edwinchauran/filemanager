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
                substr($archivo,-4) == ".mp4" ||
                substr($archivo,-4) == ".ogg" ||
                substr($archivo,-4) == ".webm"||
                substr($archivo,-4) == ".ogv"
            )
            {
                echo '
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="col-sm-12 pt-3">
                        <div class="text-light">
                        <b>'.substr($archivo, 0, 20).substr($archivo,-5).' | </b>
                        <input type="checkbox">
                        <i class="fa fa-trash"></i>
                        </div>
                    </div>
                    <div class=" embed-responsive embed-responsive-21by9 shadow">
                    <video controls class="pb-4 embed-responsive-item" src="archivos/'.rawurlencode(basename($archivo)).'"></video>
                    <a class="btn btn-dark col-sm-12" target="_blank" download href="archivos/'."/".$archivo.'"><i class="fa fa-download"></i></a>
                    </div>
                </div>
                ';
            }
            $i++;
        }
        $Directory->close();
?>



