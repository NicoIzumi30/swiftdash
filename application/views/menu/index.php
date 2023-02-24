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
                                    <li class="breadcrumb-item"><a href="Interface.html">Menu Management</a></li>

                                </ul>
                            </nav>
                        </div>
                        <!-- Title End -->

                        <!-- Top Buttons Start -->
                        <div class="col-12 col-md-5 d-flex align-items-start justify-content-end">
                            <!-- Add New Button Start -->
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#addmenu"><i data-cs-icon="plus" width="15px"
                                    style="margin-bottom: 3px;"></i> Add Menu</button>
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
                                    <th class="text-muted text-small text-uppercase">Menu</th>
                                    <th class="text-muted text-small text-uppercase">Icon</th>
                                    <th class="text-muted text-small text-uppercase">Created</th>
                                    <th class="text-muted text-small text-uppercase">Hapus</th>
                                    <th class="text-muted text-small text-uppercase">Edit</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php
								$no = 1;
								foreach ($menu as $m) :
								?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $m['menu']; ?></td>
                                    <td><i class="<?= $m['icon']; ?>"></i></td>
                                    <td>24-02-2023</td>
                                    <td> <a href="<?= base_url('menu/delete/' . $m['id']); ?>"
                                            class="tombol-hapus btn btn-danger btn-sm" id="cobain"
                                            onclick="coba(event,this.href)">
                                            <i class="fas fa-trash"></i>
                                        </a></td>
                                    <td>
                                        <a href="#" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#myModal<?= $m['id'] ?>"><i class="fa fa-edit"></i>
                                        </a>
                                        <div class="modal modal-right fade" id="myModal<?= $m['id'] ?>" tabindex="-1"
                                            role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content text-start">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalTitle">Add New Menu</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <form action="<?= base_url('menu/update/' . $m['id']) ?>"
                                                        method="post">
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <label class="form-label">Menu Name</label>
                                                                <input name="menu" type="text" class="form-control"
                                                                    value="<?= $m['menu']; ?>" />
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label">Icon</label>
                                                                <input name="icon" type="text" class="form-control"
                                                                    value="<?= $m['icon']; ?>" />
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-primary"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <button type="submit" class="btn btn-primary">Save
                                                                Changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
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
                                <h5 class="modal-title" id="modalTitle">Add New Menu</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="<?= base_url('menu/index') ?>" method="post">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Menu Name</label>
                                        <input name="menu" type="text" class="form-control" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Icon</label>
                                        <input name="icon" type="text" class="form-control" />
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