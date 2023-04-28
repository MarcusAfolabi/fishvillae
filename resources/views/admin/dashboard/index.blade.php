@extends('layouts.main')
@section('main')
@section('title', 'Admin - Fishvillae')
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
                    <div class="flex"></div>
                    <div><a href="#" title="add new menu" data-toggle="modal" data-target="#modal" class="btn btn-sm box-shadows btn-rounded gd-primary text-white"><span class="d-sm-inline mx-1"> </span> <i data-feather="plus-circle"></i>&nbsp;Menu</a></div>
                </div>
            </div>
            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="row row-sm sr">
                        <div class="col-md-12 d-flex">
                            <div class="card flex">
                                <div class="card-body">
                                    <div class="row row-sm">
                                        <div class="col-sm-6">
                                            <div class="mb-2"><small class="text-muted">Overview</small></div>
                                            <div class="row row-sm">
                                                <div class="col-4">
                                                    <div class="text-highlight text-md">52</div><small>Menu</small>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-danger text-md">+15</div><small>Reservations</small>
                                                </div>
                                                <div class="col-4">
                                                    <div class="text-md">45.5%</div><small>Subscribers</small>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            <th data-sortable="true" data-field="owner">Image</th>
                            <th data-sortable="true" data-field="project">Menu name</th>
                            <th data-field="task"><span class="d-none d-sm-block">Edit</span></th>
                            <th data-field="finish"><span class="d-none d-sm-block">Delete</span></th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr class="" data-id="20">
                            <td style="min-width:30px;text-align:center"><small class="text-muted">20</small>
                            </td>
                            <td><a href="#"><span class="w-32 avatar gd-warning">G</span></a></td>
                            <td class="flex"><a href="#" class="item-title text-color">Netflix hackathon ios
                                    app</a>
                                <div class="item-except text-muted text-sm h-1x">Netflix hackathon creates eye
                                    tracking option for iOS app</div>
                            </td>
                            <td><span class="item-amount d-none d-sm-block text-sm">120</span></td>
                            <td><span class="item-amount d-none d-sm-block text-sm [object Object]">20</span>
                            </td>
                            <td>
                                <div class="item-action dropdown"><a href="#" data-toggle="dropdown" class="text-muted"><i data-feather="more-vertical"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right bg-black" role="menu"><a class="dropdown-item" href="#">See detail </a> <a class="dropdown-item edit">Edit</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item trash">Delete item</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="modal" class="modal fade" data-backdrop="true" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content box-shadow mb-4 bg-white">
            <div class="modal-header">
                <div class="modal-title text-md">Add new menu list</div><button class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body bg-dark">
                <div class="form-group"><label class="col-sm-4 col-form-label">Name</label>
                    <div class="col-sm-8"><input type="text" name="name" class="form-control"></div>
                </div>
                <div class="form-group"><label class="col-sm-4 col-form-label">Description</label>
                    <div class="col-sm-8"><textarea name="description" placeholder="Describe it" type="text" class="form-control"> </textarea> </div>
                </div>
                <div class="form-group"><label class="col-sm-4 col-form-label">Price</label>
                    <div class="col-sm-8"><input type="text" name="price" placeholder="N" class="form-control"></div>
                </div>
                <div class="custom-file"><input type="file" name="image" class="custom-file-input" id="menu-image">
                    <label class="custom-file-label" for="menu-image">Choose file</label>
                </div>
            </div>
            <div class="modal-footer"><button type="button" class="btn btn-light" data-dismiss="modal">Close</button> <button type="button" class="btn btn-primary" data-dismiss="modal">Save Changes</button></div>
        </div><!-- /.modal-content -->
    </div>
</div>
@endsection