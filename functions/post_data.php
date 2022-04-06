<?php
if (have_posts()){
	while(have_posts()){    
		the_post();
    echo post_data_core(get_the_id());
	}
}