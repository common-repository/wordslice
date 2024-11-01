<?php
/*
Plugin Name: WordSlice
Plugin URI: http://www.beakersoft.co.uk/WordSlice
Description: Adds the IE8 WebSlice Fucntionality to your wordpress blog
Version: 1.0
Author: Luke Niland
Author URI: http://www.beakersoft.co.uk

Copyright 2009  Luke Niland  (email : luke@beakersoft.co.uk)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


### Write the div out that will open up the slice
function write_slice_div() {

$blog_title = get_bloginfo('name');
$slice_url = get_bloginfo('wpurl')."/wp-content/plugins/wordslice/webslice.php";

echo "\n".'<!-- Start of Div for wordslice 1.0 plugin -->';
echo "
	<div id='statusupdates' class='hslice' style='padding:8px 0px 0px;display:block'>
		<div style='display:none;'>
			<p class='entry-title'>".$blog_title."</p>
			<p class='entry-content'>&nbsp;</p>
			<a href='".$slice_url."' class='feedurl' rel='feedurl'>&nbsp;</a>
		</div>
	</div>";
echo "\n".'<!-- End of Div for wordslice 1.0 plugin -->';

}
?>
