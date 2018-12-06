<?php
function MenuMulti($data,$parent_id ,$str='---| ',$select)
{
  foreach ($data as $val) {
    $id = $val["id"];
    $ten= $val["name"];
    if ($val['parent_id'] == $parent_id) {
      // print_r($select);  exit();
      if ($select!=0 && $id == $select) {
        echo '<option value="'.$id.'" selected >'.$str." ".$ten.'</option>';
      }	else {
        echo '<option value="'.$id.'">'.$str." ".$ten.'</option>';
      }
      MenuMulti($data,$id,$str.'---|',$select);
    }
  }
}
function listcate ($data,$parent_id =0,$str="---|")
{
  foreach ($data as $val) {
    $id = $val["id"];
    $ten= $val["name"];
    if ($val['parent_id'] == $parent_id) {
      echo '<tr>';
      if ($str =="") {
          echo '<td ><strong>'.$id.'</strong></td>';
          echo '<td ><strong style="color:blue;">'.$str.'- '.$ten.'</strong></td>';
        } else {
          echo '<td ><strong>'.$id.'</strong></td>';
          echo '<td style="color:green;">'.$str.'--|'.$ten.'</td>';
        }
        '</tr>';
        listcate ($data,$id,$str." ---| ");
    }
  }
}




 ?>
