window.onload = function(){
			$.getScript('../js/jquery.DatePicker.js', function(){
				$('#date_picker_demo').datePicker({
					followOffset : [0, 24]
				});
			});
		}