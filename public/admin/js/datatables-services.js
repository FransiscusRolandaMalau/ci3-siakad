const datatableServices = {
	datatable: function(container, url){
		$(container).DataTable({
			'responsive': true,
			'searchDelay': 500,
			'processing': true,
			'serverSide': false,
			'ajax': {
                "url": url,
				"type": "GET",
				"dataType": "JSON",
			},
			'language': {
				"url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Indonesian.json",
			},
			"columnDefs": [
				{ "orderable": false, "targets": 'action' }
			  ]
		})
	}
}
export default datatableServices;
