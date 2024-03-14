@extends('layout.master')

@section('content')
    <!--begin::Header-->
    <div id="kt_app_header" class="app-header fixed-top" data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false">
        <!--begin::Header container-->
        <div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
            <!--begin::Sidebar mobile toggle-->
            <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
                <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                    <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
            </div>
            <!--end::Sidebar mobile toggle-->
            <!--begin::Mobile logo-->
            <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                <a href="../../demo1/dist/index.html" class="d-lg-none">
                    <img alt="Logo" src="assets/media/logos/default-small.svg" class="h-30px" />
                </a>
            </div>
            
            <!--end::Mobile logo-->
            <!--begin::Header wrapper-->
            <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
                <!--begin::Menu wrapper-->
                <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                    <!--begin::Menu-->
                    <div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-title">Dashboards</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                            <!--end:Menu link-->
                            <!--begin:Menu sub-->
                            <!--end:Menu sub-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-title">Pages</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-title">Apps</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2">
                            <!--begin:Menu link-->
                            <span class="menu-link">
                                <span class="menu-title">Layouts</span>
                                <span class="menu-arrow d-lg-none"></span>
                            </span>
                        </div>
                    </div>
                    <!--end::Menu-->
                </div>
                <div class="cursor-pointer symbol symbol-35px mt-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                    @if (\Auth::user())
                        @include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/sidebar-layout/header/_navbar')
                    @else
                        <div class="symbol-label fs-3 {{ app(\App\Actions\GetThemeType::class)->handle('bg-light-? text-?', 'Login') }}">
                            Login
                        </div>
                        {{-- <img src="https://banner2.cleanpng.com/20180426/lwq/kisspng-computer-icons-login-management-user-5ae155f3386149.6695613615247170432309.jpg" class="rounded-3" alt="user" /> --}}
                    @endif
                </div>
                <!--end::Menu wrapper-->
                <!--begin::Navbar-->

                
                <!--end::Navbar-->
            </div>
            <!--end::Header wrapper-->
        </div>
        <!--end::Header container-->
    </div>

    
    <div class="d-flex flex-column flex-root app-root pt-10" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <!--begin::Sidebar-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container container-xxl">
                                <div class="d-flex flex-wrap flex-stack pb-7">
                                    <!--begin::Title-->
                                    <div class="d-flex flex-wrap align-items-center my-1">
                                        <h3 class="fw-bold me-5 my-1">Total Users: {{ $count }}</h3>
                                        <!--begin::Search-->
                                        <div class="d-flex align-items-center position-relative my-1">
                                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-3">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <input type="search" id="kt_filter_search"
                                                class="form-control form-control-sm form-control-solid w-250px ps-10 border border-2"
                                                placeholder="Search" />
                                        </div>
                                        <!--end::Search-->
                                    </div>
                                    <!--end::Title-->
                                    <!--begin::Controls-->
                                    <div class="d-flex flex-wrap my-1">
                                        <!--begin::Tab nav-->
                                        <ul class="nav nav-pills me-6 mb-2 mb-sm-0">
                                            <li class="nav-item m-0">
                                                <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3 active"
                                                    data-bs-toggle="tab" href="#kt_project_users_card_pane">
                                                    <i class="ki-duotone ki-element-plus fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                        <span class="path5"></span>
                                                    </i>
                                                </a>
                                            </li>
                                            <li class="nav-item m-0">
                                                <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary"
                                                    data-bs-toggle="tab" href="#kt_project_users_table_pane">
                                                    <i class="ki-duotone ki-row-horizontal fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Tab nav-->
                                        <!--begin::Actions-->
                                        <div class="d-flex my-0">
                                            <!--begin::Select-->
                                            <select name="status" data-control="select2" data-hide-search="true"
                                                data-placeholder="Filter"
                                                class="form-select form-select-sm form-select-solid w-150px me-5">
                                                <option value="1">Recently Updated</option>
                                                <option value="2">Last Month</option>
                                                <option value="3">Last Quarter</option>
                                                <option value="4">Last Year</option>
                                            </select>
                                            <!--end::Select-->
                                            <!--begin::Select-->
                                            <select name="status" data-control="select2" data-hide-search="true"
                                                data-placeholder="Export"
                                                class="form-select form-select-sm form-select-solid w-100px">
                                                <option value="1">Excel</option>
                                                <option value="1">PDF</option>
                                                <option value="2">Print</option>
                                            </select>
                                            <!--end::Select-->
                                        </div>
                                        <!--end::Actions-->
                                    </div>
                                    <!--end::Controls-->
                                </div>
                                <!--end::Toolbar-->
                                <!--begin::Tab Content-->
                                <div class="tab-content">
                                    <!--begin::Tab pane-->
                                    <div id="kt_project_users_card_pane" class="tab-pane fade show active">
                                        <!--begin::Row-->
                                        <div class="container-fluid">
                                            <div class="row">
                                                @foreach ($user_details as $user)
                                                    {{-- <div class="col-md-4"> --}}
                                                        <div class="col-md-4 col-xxl-4">
                                                            <!--begin::Card-->
                                                            <div class="card">
                                                                <!--begin::Card body-->
                                                                <div class="card-body d-flex flex-center flex-column pt-12 p-9">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-65px symbol-circle mb-5">
                                                                        <img src="assets/media//avatars/300-2.jpg" alt="image" />
                                                                        {{-- <div
                                                                            class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n3 mt-n3">
                                                                        </div> --}}
                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                    <!--begin::Name-->
                                                                    <a href="#"
                                                                        class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">{{ $user->name }}</a>
                                                                    <!--end::Name-->
                                                                    <!--begin::Position-->
                                                                    @if ($user->experience)
                                                                        <div class="fw-semibold text-gray-400 mb-6">{{ $user->experience }}</div>
                                                                    @else
                                                                        <div class="fw-semibold text-gray-400 mb-6">Open for Work</div>
                                                                    @endif
                                                                    <!--end::Position-->
                                                                    <!--begin::Info-->
                                                                    <div class="d-flex flex-wrap flex-stack">
                                                                        <!--begin::Wrapper-->
                                                                        <div class="d-flex flex-column flex-grow-1 pe-8">
                                                                            <!--begin::Stats-->
                                                                            <div class="d-flex flex-wrap row">
                                                                                <!--begin::Stat-->
                                                                                <div class="border border-gray-500 col-sm border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                                    <!--begin::Number-->
                                                                                    
                                                                                    <div class="fs-6 fw-bold text-gray-700">Education</div>
                                                                                    @if ($user->education)
                                                                                        <div class="fw-semibold text-gray-500">{{ $user->education }}</div>                                                                        
                                                                                    @else
                                                                                        <div class="fw-semibold text-gray-500">No Skill added yet</div>                                                                        
                                                                                    @endif
                                                                                    
                                                                                    <!--end::Label-->
                                                                                </div>
                                            
                                                                                <div class="border border-gray-500 col-sm border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                                    <!--begin::Number-->
                                                                                    
                                                                                    <div class="fs-6 fw-bold text-gray-700">Skills</div>
                                                                                    @if ($user->skills)
                                                                                        <div class="fw-semibold text-gray-500">{{ $user->skills }}</div>                                                                        
                                                                                    @else
                                                                                        <div class="fw-semibold text-gray-500">No Skill added yet</div>                                                                        
                                                                                    @endif
                                                                                    
                                                                                    <!--end::Label-->
                                                                                </div>
                                                                            </div>
                                                                            <!--end::Stats-->
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                                <!--end::Card body-->
                                                            </div>
                                                        </div>
                                                    {{-- </div> --}}
                                    
                                                    @if ($loop->iteration % 3 == 0)
                                                        </div><div class="row">
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        
                                    </div>
                                    <!--end::Tab pane-->
                                    <!--begin::Tab pane-->
                                    {{-- Table view --}}
                                    <div id="kt_project_users_table_pane" class="tab-pane fade">
                                        <!--begin::Card-->
                                        <div class="card card-flush">
                                            <!--begin::Card body-->
                                            <div class="card-body pt-0">
                                                <!--begin::Table container-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table id="kt_project_users_table"
                                                        class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
                                                        <thead class="fs-7 text-gray-400 text-uppercase">
                                                            <tr>
                                                                <th class="min-w-250px">Users</th>
                                                                <th class="min-w-150px">Education</th>
                                                                <th class="min-w-90px">Skills</th>
                                                                <th class="min-w-90px">Status</th>
                                                                <th class="min-w-50px text-end">Address</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="fs-6">
                                                            {{-- <tr>
                                                                <td>
                                                                    <!--begin::User-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Wrapper-->
                                                                        <div class="me-5 position-relative">
                                                                            <!--begin::Avatar-->
                                                                            <div class="symbol symbol-35px symbol-circle">
                                                                                <img alt="Pic"
                                                                                    src="assets/media/avatars/300-6.jpg" />
                                                                            </div>
                                                                            <!--end::Avatar-->
                                                                        </div>
                                                                        <!--end::Wrapper-->
                                                                        <!--begin::Info-->
                                                                        <div
                                                                            class="d-flex flex-column justify-content-center">
                                                                            <a href=""
                                                                                class="mb-1 text-gray-800 text-hover-primary">Emma
                                                                                Smith</a>
                                                                            <div class="fw-semibold fs-6 text-gray-400">
                                                                                smith@kpmg.com</div>
                                                                        </div>
                                                                        <!--end::Info-->
                                                                    </div>
                                                                    <!--end::User-->
                                                                </td>
                                                                <td>Aug 19, 2023</td>
                                                                <td>$427.00</td>
                                                                <td>
                                                                    <span
                                                                        class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a href="#"
                                                                        class="btn btn-light btn-sm">View</a>
                                                                </td>
                                                            </tr>   --}}
                                                            @foreach ($user_details as $user)
                                                                <tr>
                                                                    <td>
                                                                        <!--begin::User-->
                                                                        <div class="d-flex align-items-center">
                                                                            <!--begin::Wrapper-->
                                                                            <div class="me-5 position-relative">
                                                                                <!--begin::Avatar-->
                                                                                <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic"
                                                                                        src="{{ $user->profile_image_path }}" />
                                                                                </div>
                                                                                <!--end::Avatar-->
                                                                            </div>
                                                                            <!--end::Wrapper-->
                                                                            <!--begin::Info-->
                                                                            <div
                                                                                class="d-flex flex-column justify-content-center">
                                                                                <a href=""
                                                                                    class="mb-1 text-gray-800 text-hover-primary"> {{$user->name}} </a>
                                                                                <div class="fw-semibold fs-6 text-gray-400">
                                                                                    {{ $user->email }} </div>
                                                                            </div>
                                                                            <!--end::Info-->
                                                                        </div>
                                                                        <!--end::User-->
                                                                    </td>
                                                                    <td>Aug 19, 2023</td>
                                                                    <td>$427.00</td>
                                                                    <td>
                                                                        <span
                                                                            class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                                                                    </td>
                                                                    <td class="text-end">
                                                                        <a href="#"
                                                                            class="btn btn-light btn-sm">View</a>
                                                                    </td>
                                                                </tr> 
                                                            @endforeach                                                          
                                                        </tbody>
                                                    </table>
                                                    <h1 id="noResultsMessage" style="display: none;"> No matching entities found. </h1>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Table container-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Tab pane-->
                                </div>
                                                            
                                
                            </div>
                            <!--end::Content container-->
                        </div>
                        <!--end::Content-->
                    </div>
                </div>
                <!--end:::Main-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    
    <h1>Entities</h1>
    <!-- entities.blade.php -->

    <input type="text" id="searchInput" placeholder="Search entities...">
    <div id="entitiesList" class="bg-primary">
        @foreach ($items as $entity)
            <h1> {{ $entity->user_birthday }} </h1> 
        @endforeach
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            function updateEntities(query = '') {
                $.ajax({
                    url: "{{ route('search.entities') }}",
                    type: "GET",
                    data: {'search': query},
                    success:function(data){
                        var entitiesList = $('#entitiesList');
                        entitiesList.empty();

                        if (data.length === 0) {
                            entitiesList.append('<div id="noResults">No results found.</div>');
                        } else {
                            $.each(data, function(index, entity) {
                                entitiesList.append(
                                    '<div class="entity"><h3>' + entity.user_birthday + '</h3><p>' + entity.year + '</p></div>'
                                );
                            });
                        }
                    }
                });
            }

            $('#searchInput').on('keyup', function() {
                var query = $(this).val();
                updateEntities(query);
            });

            // Load entities on initial page load
            updateEntities();
        });
    </script>
    {{-- Table Search  --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#kt_filter_search').on('keyup', function() {
                var query = $(this).val().toLowerCase().split(' ');
                var noResultsMessage = $('#noResultsMessage');

                $('#kt_project_users_table tr:gt(0)').each(function() {
                    var entityName = $(this).find('td:first').text().toLowerCase();
                    var match = true;

                    query.forEach(function(word) {
                        if (!entityName.includes(word)) {
                            match = false;
                        }
                    });

                    if (match) {
                        $(this).show();
                        noResultsMessage.hide();
                    } else {
                        $(this).hide();
                        noResultsMessage.show();
                    }
                });
            });
        });
    </script>     

    {{-- Realtime without full list  --}}
    <!-- entities.blade.php -->

    {{-- <input type="text" id="searchInput" placeholder="Search entities...">
    <ul id="entitiesList"></ul>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#searchInput').on('keyup', function() {
            var query = $(this).val();

            $.ajax({
                url: "{{ route('search.entities') }}",
                type: "GET",
                data: {'search': query},
                success:function(data){
                    var entitiesList = $('#entitiesList');
                    entitiesList.empty();

                    $.each(data, function(index, entity) {
                        entitiesList.append('<li>' + entity.name + ' - ' + entity.description + '</li>');
                    });
                }
            });
        });
    });
    </script> --}}

    

    {{-- <div class="container">
        <div class="row">
            @foreach($items as $index => $item)
                <div class="col-md-6">
                    {{ $item->user_birthday }}
                </div>
                @if($index % 2 != 0)
                    </div><div class="row mt-2">
                @endif
            @endforeach
        </div>
    </div> --}}
@endsection
