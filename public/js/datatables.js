const datatableServices = {
	datatable: function(container, url){
		$(container).dataTable({
			'responsive': true,
			'searchDelay': 500,
			'processing': true,
			'ajax': url
		})
	}
}
export default datatableServices;
