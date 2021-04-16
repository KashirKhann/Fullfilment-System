<!--end::Demo Panel-->
<script>
	var HOST_URL = "https://preview.keenthemes.com/keen/theme/tools/preview";
</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>
	var KTAppSettings = {
		"breakpoints": {
			"sm": 576,
			"md": 768,
			"lg": 992,
			"xl": 1200,
			"xxl": 1400
		},
		"colors": {
			"theme": {
				"base": {
					"white": "#ffffff",
					"primary": "#3E97FF",
					"secondary": "#E5EAEE",
					"success": "#08D1AD",
					"info": "#844AFF",
					"warning": "#F5CE01",
					"danger": "#FF3D60",
					"light": "#E4E6EF",
					"dark": "#181C32"
				},
				"light": {
					"white": "#ffffff",
					"primary": "#DEEDFF",
					"secondary": "#EBEDF3",
					"success": "#D6FBF4",
					"info": "#6125E1",
					"warning": "#FFF4DE",
					"danger": "#FFE2E5",
					"light": "#F3F6F9",
					"dark": "#D6D6E0"
				},
				"inverse": {
					"white": "#ffffff",
					"primary": "#ffffff",
					"secondary": "#3F4254",
					"success": "#ffffff",
					"info": "#ffffff",
					"warning": "#ffffff",
					"danger": "#ffffff",
					"light": "#464E5F",
					"dark": "#ffffff"
				}
			},
			"gray": {
				"gray-100": "#F3F6F9",
				"gray-200": "#EBEDF3",
				"gray-300": "#E4E6EF",
				"gray-400": "#D1D3E0",
				"gray-500": "#B5B5C3",
				"gray-600": "#7E8299",
				"gray-700": "#5E6278",
				"gray-800": "#3F4254",
				"gray-900": "#181C32"
			}
		},
		"font-family": "Poppins"
	};
</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="<?php echo base_url('assets/backend/'); ?>plugins/global/plugins.bundle.js"></script>
<script src="<?php echo base_url('assets/backend/'); ?>plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="<?php echo base_url('assets/backend/'); ?>js/scripts.bundle.js"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Vendors(used by this page)-->
<script src="<?php echo base_url('assets/backend/'); ?>plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="<?php echo base_url('assets/backend/'); ?>js/pages/widgets.js"></script>
<!--end::Page Scripts-->
<!--begin::Page Vendors(used by this page)-->
<script src="<?php echo base_url('assets/backend'); ?>/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="<?php echo base_url('/assets/backend'); ?>/js/pages/features/ktdatatable/base/html-table.js"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="<?php echo base_url('assets/backend'); ?>/js/pages/features/datatables/basic/scrollable.js"></script>
<!--end::Page Scripts-->
<!--begin::Page Vendors(used by this page)-->
<script src="<?php echo base_url('assets/backend'); ?>/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="<?php echo base_url('assets/backend'); ?>/js/pages/features/calendar/basic.js"></script>
<!--end::Page Scripts-->
<!-- edit-user - settings -->
<script src="<?php echo base_url('assets/backend'); ?>/js/pages/custom/user/edit-user.js"></script>
<!-- close -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- Add customer -->
<script type="text/javascript">
	$(document).ready(() => {
		$(document).on('change', '#user_group', function() {
			changeAddUserFormData();
		});

		$(document).ready(() => {
			changeAddUserFormData();
		});

		function changeAddUserFormData() {
			value = $('#user_group').val();
			if (value == 'SuperAdmin') {
				$('.super_emp_div').show('slow');
				$('.admin_div').hide('slow');
				$('.assignparent').hide('slow');
				$('.admin_options').hide();
				$('.customer_options').hide();

			}
			if (value == 'Employee') {
				$('.super_emp_div').show('slow');
				$('.admin_div').hide('slow');
				$('.assignparent').show('slow');
				$('.assignparent').css('opacity', 1);
				$('.admin_options').hide();
				$('.customer_options').show();

			}
			if (value == 'Admin') {
				$('.admin_div').show('slow');
				$('.assignparent').css('opacity', 0);
				$('.admin_options').hide();
				$('.customer_options').hide();
			}
			if (value == 'Customer') {
				$('.admin_div').show();
				$('.assignparent').show();
				$('.assignparent').css('opacity', 1);
				$('.admin_options').show();
				$('.customer_options').hide();
			}
		}

		$(".alert").delay(3000).fadeOut(800);

		$(document).on('click', '.deleteBtn', function(e) {
			e.preventDefault();
			Swal.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
				if (result.isConfirmed) {
					Swal.fire(
						'Deleted!',
						'Your file has been deleted.',
						'success'
					)
					window.location.href = $(this).attr('href');
				}
			})
		});
	});
</script>



<?php
if ($this->uri->segment(2) === 'edit_customer_user') {
?>
	<script type="text/javascript">
		jQuery(document).ready(() => {
			jQuery('#user_parent').val('<?= $customer_user->which_admin ?>');
		});
	</script>
<?php
}
?>

</body>
<!--end::Body-->

</html>