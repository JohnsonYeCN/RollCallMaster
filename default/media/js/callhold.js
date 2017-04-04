function callhold(){
			alert("get!");
			var info_box = document.getElementById('selectcourse');
			var cold_down = document.getElementById('showcall');
			//document.select_course_form.submit();
			//var checkcodebox = document.getElementById('checkcode');
			//checkcodebox.setAttribute("value",GetRandStr(4));
			info_box.setAttribute("hidden","true");
			cold_down.removeAttribute("hidden");
}
//生成验证码
function GetRandStr($len){ 
    $chars = array( 
        "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k",  
        "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v",  
        "w", "x", "y", "z", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9" 
    ); 
    $charsLen = count($chars) - 1; 
    shuffle($chars);   
    $output = ""; 
    for ($i=0; $i<$len; $i++){ 
        $output .= $chars[mt_rand(0, $charsLen)]; 
    }  
    return $output;  
} 
