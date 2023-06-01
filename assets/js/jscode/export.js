$( document ).ready(function() {
	$(".dataExport").click(function() {
		var exportType = $(this).data('type');		
		$('#save').tableExport({
			type : exportType,			
			escape : 'false',
			ignoreColumn: []
		});		
	});
});
