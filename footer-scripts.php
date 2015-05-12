




	</div>
	



	<!-- /#wrapper -->

	<!-- JS -->
	<script src="js/output.min.js"></script>

	<!-- Menu Toggle Script -->
	<script>
		$("#menu-toggle").click(function(e) {
			e.preventDefault();
			$("#wrapper").toggleClass("toggled-left");
			//$("#wrapper").removeClass("toggled-right");
		});
		$("#user-toggle").click(function(e) {
			e.preventDefault();
			$("#wrapper").toggleClass("toggled-right");
			//$("#wrapper").removeClass("toggled-left");
		});
		$('#builder-basic').queryBuilder({
			plugins: ['sortable', 'bt-tooltip-errors'],

			filters: [{
				id: 'name',
				label: 'Name',
				type: 'string'
			}, {
				id: 'company',
				label: 'Company',
				type: 'string'

			}],

			rules: {
				condition: 'AND',
				rules: [{
					id: 'price',
					operator: 'less',
					value: 10.25
				}, {
					condition: 'OR',
					rules: [{
						id: 'category',
						operator: 'in',
						value: [1, 2]
					}, {
						id: 'name',
						operator: 'equal',
						value: "John Doe"
					}]
				}]
			}
		});
 		$("#skills input").tagit();
		</script>


</body>

</html>