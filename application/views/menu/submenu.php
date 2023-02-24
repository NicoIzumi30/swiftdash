<main>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Title and Top Buttons Start -->
                <div class="page-title-container">
                    <div class="row">
                        <!-- Title Start -->
                        <div class="col-12 col-md-7">
                            <h1 class="mb-0 pb-0 display-4" id="title"><?= $title ?></h1>
                            <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                                <ul class="breadcrumb pt-0">
                                    <li class="breadcrumb-item"><a href="Dashboards.Default.html">Menu</a></li>
                                    <li class="breadcrumb-item"><a href="Interface.html">Submenu Management</a></li>

                                </ul>
                            </nav>
                        </div>
                        <!-- Title End -->

                        <!-- Top Buttons Start -->
                        <div class="col-12 col-md-5 d-flex align-items-start justify-content-end">
                            <!-- Add New Button Start -->
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#addmenu"><i data-cs-icon="plus" width="15px"
                                    style="margin-bottom: 3px;"></i> Add Submenu</button>
                            <!-- Add New Button End -->
                        </div>
                        <!-- Top Buttons End -->
                    </div>
                </div>
                <!-- Title and Top Buttons End -->

                <!-- Content Start -->
                <div class="data-table-rows slim">
                    <!-- Controls Start -->
                    <div class="row">
                        <!-- Search Start -->
                        <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
                            <div
                                class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                                <input class="form-control datatable-search" placeholder="Search"
                                    data-datatable="#datatableRows" />
                                <span class="search-magnifier-icon">
                                    <i data-cs-icon="search"></i>
                                </span>
                                <span class="search-delete-icon d-none">
                                    <i data-cs-icon="close"></i>
                                </span>
                            </div>
                        </div>
                        <!-- Search End -->

                        <div class="col-sm-12 col-md-7 col-lg-9 col-xxl-10 text-end mb-1">
                            <div class="d-inline-block">
                                <!-- Print Button Start -->
                                <button
                                    class="btn btn-icon btn-icon-only btn-foreground-alternate shadow datatable-print"
                                    data-datatable="#datatableRows" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-delay="0" title="Print" type="button">
                                    <i data-cs-icon="print"></i>
                                </button>
                                <!-- Print Button End -->

                                <!-- Export Dropdown Start -->
                                <div class="d-inline-block datatable-export" data-datatable="#datatableRows">
                                    <button class="btn p-0" data-bs-toggle="dropdown" type="button"
                                        data-bs-offset="0,3">
                                        <span
                                            class="btn btn-icon btn-icon-only btn-foreground-alternate shadow dropdown"
                                            data-bs-delay="0" data-bs-placement="top" data-bs-toggle="tooltip"
                                            title="Export">
                                            <i data-cs-icon="download"></i>
                                        </span>
                                    </button>
                                    <div class="dropdown-menu shadow dropdown-menu-end">
                                        <button class="dropdown-item export-copy" type="button">Copy</button>
                                        <button class="dropdown-item export-excel" type="button">Excel</button>
                                        <button class="dropdown-item export-cvs" type="button">Cvs</button>
                                    </div>
                                </div>
                                <!-- Export Dropdown End -->

                                <!-- Length Start -->
                                <div class="dropdown-as-select d-inline-block datatable-length"
                                    data-datatable="#datatableRows" data-childSelector="span">
                                    <button class="btn p-0 shadow" type="button" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false" data-bs-offset="0,3">
                                        <span class="btn btn-foreground-alternate dropdown-toggle"
                                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-delay="0"
                                            title="Item Count">
                                            10 Items
                                        </span>
                                    </button>
                                    <div class="dropdown-menu shadow dropdown-menu-end">
                                        <a class="dropdown-item" href="#">5 Items</a>
                                        <a class="dropdown-item active" href="#">10 Items</a>
                                        <a class="dropdown-item" href="#">20 Items</a>
                                    </div>
                                </div>
                                <!-- Length End -->
                            </div>
                        </div>
                    </div>
                    <!-- Controls End -->
                    <!-- Table Start -->
                    <div class="data-table-responsive-wrapper">
                        <table id="datatableRows" class="data-table nowrap hover">
                            <thead class="text-center">
                                <tr>
                                    <th class="text-muted text-small text-uppercase">No</th>
                                    <th class="text-muted text-small text-uppercase">Submenu</th>
                                    <th class="text-muted text-small text-uppercase">Menu</th>
                                    <th class="text-muted text-small text-uppercase">Url</th>
                                    <th class="text-muted text-small text-uppercase">Active</th>
                                    <th class="text-muted text-small text-uppercase">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
								$no = 1;
								foreach ($subMenu as $sm) :
								?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $sm['title']; ?></td>
                                    <td><?= $sm['menu']; ?></td>
                                    <td><?= $sm['url']; ?></td>
                                    <?php if ($sm['is_active']) { ?>
                                    <td><span class="badge text-bg-success"
                                            style="color: #fff !important;background-color: RGBA(25, 135, 84, var(--bs-bg-opacity, 1)) !important;">Active</span>
                                    </td>
                                    <?php } else { ?>
                                    <td><span class="badge text-bg-danger"
                                            style="color: #fff !important;background-color: RGBA(220, 53, 69, var(--bs-bg-opacity, 1)) !important;">Deactivate</span>
                                    </td>
                                    <?php } ?>

                                    <td>
                                        <a href="<?= base_url('menu/delete_sub/'); ?><?= $sm['id'] ?>"
                                            class="tombol-hapus btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                        <a href="#" class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#myModal<?= $sm['id'] ?>"><i class="fa fa-edit"></i>
                                        </a>
                                    </td>
                                </tr>
                                <div class="modal fade" id="myModal<?= $sm['id'] ?>" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Sub Menu</h5>
                                                <button class="close" type="button" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?= base_url() ?>menu/update_submenu/<?= $sm['id']; ?>"
                                                    method="post">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="title" name="title"
                                                            placeholder="Submenu title" value="<?= $sm['title']; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <select name="menu_id" id="menu_id" class="form-control">
                                                            <?php
																$idMenu = $sm['menu_id'];
																$getData = $this->M_menu->get_data_submenu_where($idMenu);
																?>
                                                            <option value="<?= $idMenu ?>"><?= $getData[0]->menu; ?>
                                                            </option>
                                                            <?php foreach ($menu as $m) : ?>
                                                            <option value="<?= $m['id'] ?>"><?= $m['menu']; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="url" name="url"
                                                            placeholder="Submenu url" value="<?= $sm['url'];; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-check">
                                                            <input type="checkbox" name="is_active" id="is_active"
                                                                value="1" class="form-check-input" checked>
                                                            <label for="is_active"
                                                                class="form-check-label">Active?</label>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" value="<?= $sm['id']; ?>" name="id">
                                                    <div class="modal-footer">
                                                        <input class="btn btn-primary" type="submit" value="Update">
                                                    </div>

                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- Table End -->
                </div>
                <!-- Content End -->

                <!-- Add Edit Modal Start -->
                <div class="modal modal-right fade" id="addmenu" tabindex="-1" role="dialog"
                    aria-labelledby="modalTitle" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitle">Add New Submenu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="<?= base_url('menu/submenu') ?>" method="post">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Submenu Name</label>
                                        <input name="submenu" type="text" class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Menu</label>
                                        <select name="menu_id" id="menu_id" class="form-control">
                                            <option value="" disabled selected>Choose....</option>
                                            <?php foreach ($menu as $m) : ?>
                                            <option value="<?= $m['id'] ?>"><?= $m['menu']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label">Url</label>
                                        <input name="url" type="text" class="form-control" />
                                    </div>
                                    <div class="mb-1">
                                        <input type="checkbox" name="is_active" id="is_active" value="1"
                                            class="form-check-input" checked>
                                        <label for="is_active" class="form-check-label">Active?</label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Add Edit Modal End -->
            </div>
        </div>
    </div>
</main>