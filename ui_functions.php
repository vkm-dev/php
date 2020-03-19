// Create DD MM YYYY select dropdown
function getDateSelect($yearStart, $yearEnd, $selectName) {
    $output = ''; 
    $output .= '<select class="form-control date_dd" style="width:70px;margin-right:2px;display:inline;" name="'.$selectName.'_d" id="'.$selectName.'_d">';
    $output .=   '<option value="">DD</option>';
       for ($d = 1; $d <=31; $d++) {
           $d = str_pad($d,2,'0',STR_PAD_LEFT);
           $output .= '<option value="'.$d.'">'.$d.'</option>';
       }
    $output .='</select>';
    $output .='<select class="form-control date_mm" style="width:70px;margin-right:2px;display:inline;" name="'.$selectName.'_m" id="'.$selectName.'_m">';
    $output .=   '<option value="">MM</option>';
       for ($m = 1; $m <=12; $m++) {
           $m = str_pad($m,2,'0',STR_PAD_LEFT);
           $output .= '<option value="'.$m.'">'.$m.'</option>';
       }
    $output .='</select>';
    $output .='<select class="form-control date_yyyy" style="width:80px;display:inline;" name="'.$selectName.'_y" id="'.$selectName.'_y">';
    $output .=   '<option value="">YYYY</option>';
       for ($y = $yearStart; $y < $yearEnd; $y++) {
        $output .= '<option value="'.$y.'">'.$y.'</option>';
       }
    $output .='</select>';
    return $output;
 } 
