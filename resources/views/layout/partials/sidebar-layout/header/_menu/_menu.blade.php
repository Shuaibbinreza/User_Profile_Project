<!--begin::Menu wrapper-->
<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
	<!--begin::Menu-->
	<div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
		<!--begin:Menu item-->
		<div 
			{{-- data-kt-menu-trigger="{default: 'click', lg: 'hover'}"  --}}
			data-kt-menu-placement="bottom-start" 
			class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
			<!--begin:Menu link-->
			<span class="menu-link">
				<a href="{{ route('dashboard') }}">
					Dashboard
				</a>
				<span class="menu-arrow d-lg-none"></span>
			</span>
			<!--end:Menu link-->
			<!--begin:Menu sub-->
			<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
				{{-- @include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/sidebar-layout/header/_menu/__dashboards') --}}
			</div>
			<!--end:Menu sub-->
		</div>

		<div class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
			<!--begin:Menu link-->
			<span class="menu-link">
				<a href="{{ route('profile.details') }}">
					User Details
				</a>
				<span class="menu-arrow d-lg-none"></span>
			</span>
			<!--end:Menu link-->
			<!--begin:Menu sub-->
			<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
				{{-- @include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/sidebar-layout/header/_menu/__dashboards') --}}
			</div>
			<!--end:Menu sub-->
		</div>
		<!--end:Menu item-->
		<!--begin:Menu item-->
		
		<!--end:Menu item-->
		<!--begin:Menu item-->
		<!--end:Menu item-->
	</div>
	<!--end::Menu-->
</div>
<!--end::Menu wrapper-->
