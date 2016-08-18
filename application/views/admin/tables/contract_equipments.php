<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$aColumns     = array('name');
$sIndexColumn = "id";
$sTable       = 'tblcontractequipments';
$custom_fields = get_custom_fields('equipment',array('show_on_table'=>1));
$join          = array();

$i = 0;
foreach($custom_fields as $field){
    array_push($aColumns,'ctable_'.$i.'.value as cvalue_'.$i);
    array_push($join,'LEFT JOIN tblcustomfieldsvalues as ctable_'.$i . ' ON tblcontractequipments.id = ctable_'.$i . '.relid AND ctable_'.$i . '.fieldto="'.$field['fieldto'].'" AND ctable_'.$i . '.fieldid='.$field['id']);
    $i++;
}

$where = '';
$where = 'WHERE contractid= "'.$rel_id.'"';
if(count($custom_fields) > 4){
    @$this->_instance->db->query('SET SQL_BIG_SELECTS=1');
}
$result  = data_tables_init($aColumns, $sIndexColumn, $sTable, $join, $where, array('tblcontractequipments.id'));
$output  = $result['output'];
$rResult = $result['rResult'];

foreach ($rResult as $aRow) {
    $row = array();
    for ($i = 0; $i < count($aColumns); $i++) {
         if(strpos($aColumns[$i],'as') !== false && !isset($aRow[ $aColumns[$i] ])){
              $_data = $aRow[ strafter($aColumns[$i],'as ')];
         } else {
              $_data = $aRow[ $aColumns[$i] ];
         }
        if ($aColumns[$i] == 'name') {
            $_data = '<a href="#" onclick="edit_type(this,'.$aRow['id'].'); return false;" data-name="'.$aRow['name'].'">' . $_data . '</a> ';
        }
        $row[] = $_data;
    }
    $options = '';
    $options = icon_btn('#', 'pencil-square-o','btn-default',array('onclick'=>'edit_type(this,'.$aRow['id'].'); return false;','data-name'=>$aRow['name']));
    $row[]   = $options .= icon_btn('contracts/delete_contract_equipment/' . $aRow['id'], 'remove', 'btn-danger _delete');

    $output['aaData'][] = $row;
}
