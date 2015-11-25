<?php 

//////////////////////////////////////////////////////////////////////
////////// register page type //////////
///////////////////////////////////////////////////////////////////////


//add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
//ex
//add_menu_page( 'custom menu title', 'custom menu','manage_options',
// 'myplugin/myplugin-admin.php', '', plugins_url( 'myplugin/images/icon.png' ), 6 );
//add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function ); 
function add_menu_page_3DaVinci(){
add_menu_page( '3DaVinci','3DaVinci' , 'manage_options','3davinci' ,'wwwp_add_menu', 'dashicons-welcome-widgets-menus', 99 );
}
add_action('admin_menu','add_menu_page_3DaVinci' );
function wwwp_add_menu (){

?>
<style>
.bg{margin-left: -100px;}

.dn{margin-left: -100px;}
.bg a{background-color: #222;margin: 10px;padding:0 10px ;border:2px solid #fff;}
div.items p {display: none}
div.items p:target{display: block;}
.bg {background-color: #333;height: 200px;width: 100%;}
.bg td {color: #fff;border:1px solid #fff;}
table td:first-child{width:200px;}
table td:last-child{width: 600px;}
 #adminmenuback{display: none;}
 #adminmenuwrap{display: none;}
 #adminmenu{display: none;}
</style>



<meta http-equiv="refresh" content="30">






<div class="bg">
<a class="df" href="index.php">return to admin menu</a>
<input id='ref_butn' type="submit" value="refresh">
<form action="" method="post">
<table>
<tr>
<td>

<a href="#default">clear</a>
<a href="#item1">item 1</a>
<a href="#item2">item 2</a>
<a href="#item3">item 3</a>

</td>
</tr>
<tr>
<td>
<div class="items">
  <p id="item1">

      <input type="checkbox" value="blue">blue <br>
      <input type="checkbox" value="red">red <br>
      <input type="checkbox" value="black">black <br>
      <input type="checkbox" value="green">green <br>
      <input type="submit" value='nosubmit' >
  </p>

  <p id="item2">
<input type="radio" name="radio" value="Radio 1">Radio 1
<input type="radio" name="radio" value="Radio 2">Radio 2
<input type="radio" name="radio" value="Radio 3">Radio 3
<input type="submit" name="submit" value="Get Selected Values" />
  </p>

  <p id="item3">
<select name="taskOption" id=""  type="submit">
<option > one </option>
<option > two </option>
<option > three </option>
<option > four </option>
</select>
<input type="submit" value='what do you want will not ?'>
  </p>

  <p id="default"></p><!-- by default, show no text -->

</div>
</td>
</tr>
</table>

</form>

</div>
<iframe width="120%" height="800px" style="margin-left:-180px;" src="..//index.php" frameborder="0"></iframe>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.1.min.js"></script>
<script>
$(document).ready(function(){
    $('#adminmenuback').show;
    $('#adminmenuwrap').show;
    $('#adminmenu').show;
    });
$(document).ready(function(){
  $("#ref_butn").click(function(){
 location.reload();
  });
});
/*
window.setInterval("reloadIFrame();", 30000);
function reloadIFrame() {
 document.getElementById("myIframe").src="YOUR_PAGE_URL_HERE";

function refresh()
{
    var iframe = document.getElementById('iframe');
    iframe.reload(true);
}

setTimeout('refresh()', 3000); 
}
*/
</script>
<?php 
// echo "<div class='dn'>";
// get_template_part('theme-customize' );
// echo '</div>';
// echo '</div>';

// $GLOBALS['z'] =$selectOption = $_POST['taskOption'];
// echo $selectOption ." hello";
// echo "<h1>".$selectOption ."hello</h1>"; 
// echo "<h1>".$GLOBALS['z'] ."hello</h1>"; 

if($_POST['taskOption']=='two'){
    echo '<style>.bg td{background-color: blue; }</style>';
}
}
 
?>
<!-- test 3 -->