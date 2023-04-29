@extends('layouts.main')
@section('main')
@section('title', 'Menu Category - Fishvillae')
<div id="main" class="layout-column flex">
    <div id="header" class="page-header">
        <div class="navbar navbar-expand-lg">
            <a href="#" class="navbar-brand d-lg-none"><svg width="32" height="32" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                    <g class="loading-spin" style="transform-origin: 256px 256px">
                        <path d="M200.043 106.067c-40.631 15.171-73.434 46.382-90.717 85.933H256l-55.957-85.933zM412.797 288A160.723 160.723 0 0 0 416 256c0-36.624-12.314-70.367-33.016-97.334L311 288h101.797zM359.973 134.395C332.007 110.461 295.694 96 256 96c-7.966 0-15.794.591-23.448 1.715L310.852 224l49.121-89.605zM99.204 224A160.65 160.65 0 0 0 96 256c0 36.639 12.324 70.394 33.041 97.366L201 224H99.204zM311.959 405.932c40.631-15.171 73.433-46.382 90.715-85.932H256l55.959 85.932zM152.046 377.621C180.009 401.545 216.314 416 256 416c7.969 0 15.799-.592 23.456-1.716L201.164 288l-49.118 89.621z"></path>
                    </g>
                </svg>
                <!-- <img src="../assets/img/logo.png" alt="..."> -->
                <span class="hidden-folded d-inline l-s-n-1x d-lg-none">Fishvillae</span> </a>
            <ul class="nav navbar-menu order-1 order-lg-2">
                <li class="nav-item d-lg-none"><a class="nav-link px-1" data-toggle="modal" data-target="#aside"><i data-feather="menu"></i></a></li>
            </ul>
        </div>
    </div>

    <div id="content" class="flex"> 
    <div>
            <div class="page-hero page-container" id="page-hero">
                <div class="padding d-flex">
                    <div class="page-title">
                        <h2 class="text-md text-highlight">Welcome back, Fishvillae</h2>
                    </div>
                    @if (session('status'))
                    <div class="btn btn-sm box-shadows btn-rounded gd-primary text-white"> <i data-feather="check"></i> {{ session('status') }} </div>
                    @endif 
                    @if($errors->any())
                    <div class="btn btn-sm box-shadows btn-rounded gd-danger text-white">
                        <ul> @foreach($errors->all() as $error) <li><i data-feather="x"></i>{{ $error }}</li> @endforeach </ul>
                    </div>
                    @endif

                    <div class="flex"></div>
                    <div><a href="#" title="add new menu" data-toggle="modal" data-target="#modal" class="btn btn-sm box-shadows btn-rounded gd-primary text-white"><span class="d-sm-inline mx-1"> </span> <i data-feather="plus-circle"></i>&nbsp;Category</a></div>
                </div>
            </div>
             
        </div>
        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div id="toolbar"></div>
                <table id="table" class="table table-theme v-middle" data-plugin="bootstrapTable" data-toolbar="#toolbar" data-search="true" data-search-align="left" data-show-export="true" data-show-columns="true" data-detail-view="false" data-mobile-responsive="true" data-pagination="true" data-page-list="[10, 25, 50, 100, ALL]">
                    <thead>
                        <tr>
                            <th data-sortable="true" data-field="id">ID</th>
                            <th data-sortable="true" data-field="project">Category name</th>
                            <th data-field="task"><span class="d-none d-sm-block">Edit</span></th>
                            <th data-field="finish"><span class="d-none d-sm-block">Delete</span></th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse($menu_categories as $category)
                        <tr class="" data-id="20">
                            <td style="min-width:30px;text-align:center"><small class="text-muted">{{ $category->id }}</small>
                            </td>
                            <td class="flex"><a href="#" class="item-title text-color"> {{ $category->title }}</a> 
                            </td>
                            <td><span class="item-amount d-none d-sm-block text-sm">Edit</span></td>
                            <td><span class="item-amount d-none d-sm-block text-sm [object Object]">Delete</span>
                            </td>
                            <td>
                                <div class="item-action dropdown"><a href="#" data-toggle="dropdown" class="text-muted"><i data-feather="more-vertical"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right bg-black" role="menu"><a class="dropdown-item" href="#">See detail </a> <a class="dropdown-item edit">Edit</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item trash">Delete item</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        Coming soon
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="modal" class="modal fade" data-backdrop="true" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content text-left box-shadow mb-4 bg-white">
            <div class="modal-header">
                <div class="modal-title text-md">Add new menu category</div><button class="close" data-dismiss="modal">×</button>
            </div>
            <form action="{{ route('menuCategory.store') }}" method="POST">
                @csrf
                <div class="modal-body bg-dark">
                    <div class="form-group"><label class="col-sm-4 col-form-label">Title</label>
                        <div class="col-sm-12"><input required type="text" id="item" name="title" class="form-control"></div>
                    </div>  
                </div>
                <div class="modal-footer"><button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-dark">Save Menu</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div>
</div>
@endsection