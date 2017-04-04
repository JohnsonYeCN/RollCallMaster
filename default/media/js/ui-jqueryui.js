var UIJQueryUI = function () {

    
    var handleDatePickers = function () {
        
        $("#ui_date_picker").datepicker();

        $("#ui_date_picker_with_button_bar").datepicker({
          showButtonPanel: true
        });

        $("#ui_date_picker_inline").datepicker();

        $("#ui_date_picker_change_year_month" ).datepicker({
	      changeMonth: true,
	      changeYear: true
	    });

	    $("#ui_date_picker_multiple").datepicker({
	    	numberOfMonths: 2,
      		showButtonPanel: true
	    });

	    $( "#ui_date_picker_range_from" ).datepicker({
	      defaultDate: "+1w",
	      changeMonth: true,
	      numberOfMonths: 2,
	      onClose: function( selectedDate ) {
	        $( "#ui_date_picker_range_to" ).datepicker( "option", "minDate", selectedDate );
	      }
	    });
	    $( "#ui_date_picker_range_to" ).datepicker({
	      defaultDate: "+1w",
	      changeMonth: true,
	      numberOfMonths: 2,
	      onClose: function( selectedDate ) {
	        $( "#ui_date_picker_range_from" ).datepicker( "option", "maxDate", selectedDate );
	      }
	    });

	    $("#ui_date_picker_week_year" ).datepicker({
	      showWeek: true,
	      firstDay: 1
	    });

	    $("#ui_date_picker_trigger input").datepicker();
	    $("#ui_date_picker_trigger .add-on").click(function(){
	    	$("#ui_date_picker_trigger input").datepicker("show");
	    });
    }

    var handleDialogs = function () {

    	// basic dialog1
    	$( "#dialog_basic1" ).dialog({
		      autoOpen: false,
		      dialogClass: 'ui-dialog-yellow',
		      show: {
		        effect: "blind",
		        duration: 500
		      },
		      hide: {
		        effect: "explode",
		        duration: 500
		      }
	    });
	 
	    $( "#basic_opener1").click(function() {
	      $( "#dialog_basic1" ).dialog( "open" );	
	      $('.ui-dialog button').blur();// avoid button autofocus     
	    });

	    // basic dialog2
    	$( "#dialog_basic2" ).dialog({
		      autoOpen: false,
		      dialogClass: 'ui-dialog-purple',
		      show: {
		        effect: "blind",
		        duration: 500
		      },
		      hide: {
		        effect: "explode",
		        duration: 500
		      }
	    });
	 
	    $( "#basic_opener2").click(function() {
	      $( "#dialog_basic2" ).dialog( "open" );	
	      $('.ui-dialog button').blur();// avoid button autofocus     
	    });

	    // basic dialog3
    	$( "#dialog_basic3" ).dialog({
		      autoOpen: false,
		      dialogClass: 'ui-dialog-grey',
		      show: {
		        effect: "blind",
		        duration: 500
		      },
		      hide: {
		        effect: "explode",
		        duration: 500
		      }
	    });
	 
	    $( "#basic_opener3").click(function() {
	      $( "#dialog_basic3" ).dialog( "open" );	
	      $('.ui-dialog button').blur();// avoid button autofocus     
	    });

	    // basic dialog4
    	$( "#dialog_basic4" ).dialog({
		      autoOpen: false,
		      dialogClass: 'ui-dialog-red',
		      show: {
		        effect: "blind",
		        duration: 500
		      },
		      hide: {
		        effect: "explode",
		        duration: 500
		      }
	    });
	 
	    $( "#basic_opener4").click(function() {
	      $( "#dialog_basic4" ).dialog( "open" );	
	      $('.ui-dialog button').blur();// avoid button autofocus     
	    });

	    // info dialog
	    $("#dialog_info").dialog({
	      dialogClass: 'ui-dialog-blue',
	      autoOpen: false,
	      resizable: false,
	      height: 250,
	      modal: true,
	      buttons: [
	      	{
	      		"text" : "OK",
	      		'class' : 'btn green',
	      		click: function() {
        			$(this).dialog( "close" );
      			}
	      	}
	      ]
	    });

	    $( "#info_opener").click(function() {
	      $( "#dialog_info" ).dialog( "open" );
	       $('.ui-dialog button').blur();// avoid button autofocus
	    });

	    //confirm dialog
	    $("#dialog_confirm" ).dialog({
	      dialogClass: 'ui-dialog-green',
	      autoOpen: false,
	      resizable: false,
	      height: 210,
	      modal: true,
	      buttons: [
	      	{
	      		'class' : 'btn green',	
	      		"text" : "Confirm",
	      		click: function() {
					fun1();
        			$(this).dialog( "close" );
      			}
	      	},
	      	{
	      		'class' : 'btn',
	      		"text" : "Cancel",
	      		click: function() {
        			$(this).dialog( "close" );
      			}
	      	}
	      ]
	    });

	    $( "#confirm_opener").click(function() {
	      $( "#dialog_confirm" ).dialog( "open" );
	       $('.ui-dialog button').blur();// avoid button autofocus
	    });

    }

    return {
        //main function to initiate the module
        init: function () {
            handleDatePickers();
            handleDialogs();
        }

    };

}();

function fun1(){
	var xmlhttp;
	var response;
	if (window.XMLHttpRequest)
	  {// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
		var uri = "index.php?/callresult/saveprepare";
		xmlhttp.open("GET",uri,true);
		//var mstring = "testCode="+checkcode+"&courseId="+courseId ;
		xmlhttp.send();
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				alert("发起成功\n"+uri);
				response = xmlhttp.responseText;
				document.getElementById('content2confirm').innerHTML = response;			
			}
		  }
}