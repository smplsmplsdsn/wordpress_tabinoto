<?php
if (have_posts()){
	while(have_posts()){    
		the_post();
    include($theme_dir."/functions/post_data_core.php");
	}
}