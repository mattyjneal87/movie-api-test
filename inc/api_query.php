<?php

require_once('api_key.php'); // store API key outside of git

// If we submit the colour form, run the queries.
if(isset($_POST['colour'])) { 
    
    $colour = $_POST['colour'];
    $base = 1;
    $columns = 4;
    $row_count = 0;
    $column_width = 12 / $columns;
    $response = file_get_contents('http://www.omdbapi.com/?apikey='.$api_key.'&s='.$colour . '&type=movie');
    $response = json_decode($response);

        foreach ( $response as $list ) {

            if (is_array($list) || is_object($list)) {

                foreach ($list as $movie ) {
                    
                    // Grab the individual movie info via ID. This should be done with Ajax on a per movie basis to save making lots of calls.
                    $movie_details = file_get_contents('http://www.omdbapi.com/?apikey=b85122f8&i='.$movie->imdbID);
                    $movie_details = json_decode($movie_details);

                    // Output all our data on each movie witha modal each.
                    echo '
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#'.$movie->imdbID.'" rel="modal:open">
                                    <img src="' . $movie->Poster . '" alt="'. $movie->Title . '">
                                </a>
                                    <div class="card-body">
                                        <h4 class="card-title">'. $movie->Title . '</h4>
                                        <p class="card-text">' . $movie_details->Plot . '</p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#'.$movie->imdbID.'" class="btn btn-primary" rel="modal:open">More details</a>
                                        <div id="'.$movie->imdbID.'" class="modal">
                                            <h3 style="color:'. $colour.';">'.$movie->Title.'</h3>
                                            <strong> Run Time: </strong>'. $movie_details->Runtime .'<br>
                                            <strong> Release Date: </strong>'. $movie_details->Released .'<br>
                                            <strong> Genre: </strong>'. $movie_details->Genre .'<br>
                                            <strong> Directors: </strong>'. $movie_details->Director .'<br>
                                            <strong> Actors: </strong>'. $movie_details->Actors .'<br>
                                            <strong> Synopsis: </strong>'. $movie_details->Plot .'<br>
                                            <strong> Language(s): </strong>'. $movie_details->Language .'<br>
                                            <strong> Box Office: </strong>'. $movie_details->BoxOffice .'<br>
                                            <strong> Production: </strong>'. $movie_details->Production .'<br>
                                            <a href="#" class="btn btn-success" rel="modal:close">Close</a>
                                        </div>
                                    </div>
                            </div>
                        </div>';

                }

            }

        }
        
        $base++;    
        $row_count++; // Counting rows for bootstrap columns

        if($row_count % $columns == 0) echo '</div><div class="row">'; // Output new row and close full row

}
