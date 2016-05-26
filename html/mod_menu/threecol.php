<?php

    // Load vendors
    include 'vendor/autoload.php';

    // Split the menu into two cols
    $split = array_chunk($list, ceil(count($list) / 3));

    // Count the number of rows required
    $rows = count(current( $split ));

?>

<div id="drivenLogoWrapper"> 
  <a href="http://www.epsgroup.co.za/index.php"><img id="drivenLogo" onerror="this.onerror=null; this.src='/templates/excellerate/assets/img/driven-by-excellerate.png'" src="templates/excellerate/assets/img/driven-by-excellerate.svg"></a>
</div>

<table>
<?php
  for ($i=0; $i < $rows; $i++) {

    print implode(
      array(
        '<tr>',
         '<td>'.(isset($split[0][$i]) ? '<i class="ui small '.$split[0][$i]->params->get('menu-anchor_css').' circle icon"></i><a href="'.$split[0][$i]->flink.'">'.$split[0][$i]->title : '&nbsp;').'</a></td>',
         '<td>'.(isset($split[1][$i]) ? '<i class="ui small '.$split[1][$i]->params->get('menu-anchor_css').' circle icon"></i><a href="'.$split[1][$i]->flink.'">'.$split[1][$i]->title : '&nbsp;').'</a></td>',
         '<td>'.(isset($split[2][$i]) ? '<i class="ui small '.$split[2][$i]->params->get('menu-anchor_css').' circle icon"></i><a href="'.$split[2][$i]->flink.'">'.$split[2][$i]->title : '&nbsp;').'</a></td>',
        '</tr>'
      )
    );
  }
?>
</table>