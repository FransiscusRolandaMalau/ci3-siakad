const datatableServices = {
	datatable: function(container, url){
		$(container).DataTable({
			'responsive': true,
			'searchDelay': 500,
			'processing': true,
			'ajax': {
                "url": url,
				"type": "GET",
				"dataType": "JSON",
            },
		})
	}
}
export default datatableServices;
