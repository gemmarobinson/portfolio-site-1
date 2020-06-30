<?php
    // returns full path for file in images folder with only file name being passed in
    function get_image_path($file) {
        return get_template_directory_uri().'/assets/images/'.$file;
    }

    // Inline SVG with check for non-URL / broken link...
    function get_inline_svg($file) {

        // Check the SVG file exists
        if ( file_exists( get_template_directory().'/assets/images/' . $file ) ) {

            // Load and return the contents of the file
            return file_get_contents( get_template_directory().'/assets/images/' . $file );
        }
        
    };

    // Inline SVG with check for non-URL / broken link...
    function get_inline_svg_url($url) {

        // Load and return the contents of the url
        return file_get_contents( $url );
        
    };

    // custom excerpt length
    function trax_excerpt($limit) {
        $excerpt = explode(' ', get_the_excerpt(), $limit);
        
        if (count($excerpt)>=$limit) {
            array_pop($excerpt);
            $excerpt = implode(" ",$excerpt).'...';
        } else {
            $excerpt = implode(" ",$excerpt);
        }	

        $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
        return $excerpt;
    }

    // turn last word in string green
    function last_word_green($str) {
        $last = substr($str, strrpos($str, " ")+1);
        $rest = substr($str, 0, strrpos($str, " "));

        echo $rest.' <span class="h-color-green">'.$last.'</span>';
    }

    // wrap all words in span
    function wrap_in_spans($str) {
        $words = explode(' ', $str);
        $count = 1;

        foreach($words as $word) {
            echo '<span class="fadeInLeft wow" data-wow-delay="'.$count*0.4.'s">'.$word.'</span>';

            $count++;
        }
    }

    function first_word_split($str) {
        $str = preg_split("/\s+/", $str);

        // Replace the first word.
        $str[0] = "<span class='fadeInLeft wow'>" . $str[0] . "</span>";
        
        // Replace the second word.
        $str[1] = "<span class='fadeInLeft wow' data-wow-delay='0.4s'>" . $str[1];

        // Replace the third word.
        $str[2] =  $str[2] . "</span>";
        
        // Re-create the string.
        $str = join(" ", $str);

        echo $str;
    }