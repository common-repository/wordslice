<?php
require('../../../wp-blog-header.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/1">
	<title>Webslice</title>
	<style type="text/css" media="all">@import "webslice.css";</style>
</head>
	
<body>

<div class="hslice entry-content" id="blog-updates" style="width: 320px;">
<div id="contents">
<a rel="entry-content" href="webslice.php" style="display: none;" ></a>
<h2 class="entry-title" style="margin:0; display:none;"><?php echo get_bloginfo('name'); ?></h2>

<h2>Recent Posts</h2>

<?php
    function get_recent_posts ($num_posts = 7)
    {
    global $wpdb, $tableposts, $post, $tablepost2cat;

    if (!isset($tablepost2cat)) $tablepost2cat = $wpdb->post2cat;
     if (!isset($tableposts)) $tableposts = $wpdb->posts;

    $orderby = "$tableposts.post_$orderby";

    $now = current_time('mysql');
    $sql = "SELECT DISTINCT * FROM $tableposts ";
    $sql .= "WHERE $tableposts.post_date <= '$now' AND ( $tableposts.post_status = 'publish') ";
    $sql .= "GROUP BY $tableposts.ID ORDER BY $tableposts.post_date DESC";
    $sql .= " LIMIT 0, $num_posts";

    $posts = array();
    $posts = $wpdb->get_results($sql);
    if (empty($posts)) return;

    echo '<ul>';

    foreach ($posts as $post) {

     $title = the_title('', '', false);
     echo '<li>';
     echo '<a href="'.get_permalink().'" title="View Post '.htmlspecialchars(strip_tags($title)).'">'.$title.'</a>';
     echo '</li>';
    }

    echo '</ul>';

   } //end function get_recent_posts()

   get_recent_posts();
   ?>

</div>
</div>

</body>
</html>