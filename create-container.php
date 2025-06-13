<?php $script = '<script src="assets/js/homeOneChart.js"></script>'; ?>

<?php include './partials/layouts/layoutTop.php' ?>
<!-- DASHBOARD BUTTONS   -->
<div class="dashboard-main-body">
    <div class="dashboard-main-body">
        <div class="container-edit-grid">
            <!-- 1st -->
            <div class="page-container">
                <div class="card">
                    <div class="card-body mb-20">
                        <div class="mt-20">
                            <div class="page-frm-items">
                                <label class="form-label">No of Pallets</label>
                                <input type="number" name="#0" class="form-control" placeholder="No of Pallets">
                            </div>
                        </div>

                        <div class="mt-24">
                            <div class="page-frm-items">
                                <label class="form-label">ETD FOB</label>
                                <input type="date" name="#0" class="form-control">
                            </div>
                        </div>

                        <div class="mt-24">
                            <div class="page-frm-items">
                                <label class="form-label">ETA POA</label>
                                <input type="date" name="#0" class="form-control">
                            </div>
                        </div>

                        <div class="mt-24">
                            <div class="page-frm-items">
                                <label class="form-label">Port of Departure</label>
                                <input type="text" name="#0" class="form-control" placeholder="Port of Departure">
                            </div>
                        </div>

                        <div class="mt-24">
                            <div class="page-frm-items">
                                <label class="form-label">Port of Arrival</label>
                                <input type="text" name="#0" class="form-control" placeholder="Port of Arrival">
                            </div>
                        </div>

                        <div class="mt-24">
                            <div class="page-frm-items">
                                <label class="form-label">Remark</label>
                                <textarea name="#0" class="form-control" rows="4" cols="50" placeholder="Remark"></textarea>
                            </div>
                        </div>
                        <div class="mt-24">
                            <div class="page-frm-items">
                                <label class="form-label">Invoice Date</label>
                                <input type="date" name="#0" class="form-control">
                            </div>
                        </div>

                        <div class="mt-24">
                            <div class="page-frm-items">
                                <label class="form-label">Invoice Sent Date</label>
                                <input type="date" name="#0" class="form-control">
                            </div>
                        </div>

                        <div class="mt-20">
                            <div class="page-frm-items">
                                <label class="form-label">Invoice Amount</label>
                                <input type="number" name="#0" class="form-control" placeholder="Invoice Amount">
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <!-- Shipping Sec -->
            <div class="page-container">
                <div class="card">
                    <div class="card-body mb-20">

                        <div class="mt-20">
                            <div class="page-frm-items">
                                <label class="form-label">Amount Received</label>
                                <input type="number" name="#0" class="form-control" placeholder="Amount Received">
                            </div>
                        </div>

                        <div class="mt-24">
                            <div class="page-frm-items">
                                <label class="form-label">Amount Received Date</label>
                                <input type="date" name="#0" class="form-control">
                            </div>
                        </div>

                        <div class="mt-24">
                            <div class="page-frm-items">
                                <label class="form-label">Shipping Line</label>
                                <input type="text" name="#0" class="form-control" placeholder="Shipping Line">
                            </div>
                        </div>

                        <div class="mt-24">
                            <div class="page-frm-items">
                                <label class="form-label">Name of Ship</label>
                                <input type="text" name="#0" class="form-control" placeholder="Name of ship">
                            </div>
                        </div>

                        <div class="mt-24">
                            <div class="page-frm-items">
                                <label class="form-label">Container Size</label>
                                <input type="text" name="#0" class="form-control" placeholder="Container Size">
                            </div>
                        </div>

                        <div class="mt-24">
                            <div class="page-frm-items">
                                <label class="form-label">Pallet-1</label>
                                <input type="number" name="#0" class="form-control" placeholder="Pallet-1 Number">
                            </div>
                        </div>

                        <div class="mt-24">
                            <div class="page-frm-items">
                                <label class="form-label">Part No-1</label>
                                <input type="text" name="#0" class="form-control" placeholder="Part No-1">
                            </div>
                        </div>

                        <div class="mt-24">
                            <div class="page-frm-items">
                                <label class="form-label">Pallet-from/to</label>
                                <input type="number" name="#0" class="form-control" placeholder="Pallet-from">
                            </div>
                            <div class="page-frm-items margin-top-10">
                                <input type="number" name="#0" class="form-control" placeholder="Pallet-to">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <!-- packing list -->
            <div class="page-container">
                <div class="card">
                    <div class="card-body mb-20">

                        <div class="grid-two-form mt-24">
                            <div class="page-frm-items">
                                <label class="form-label">Packing List</label>
                                <a href="#">Link</a>
                            </div>
                            <div class="page-frm-items">
                                <div class="upload-btn">
                                    <label for="file-upload-packing" class="upload-btn-btn center-text width-100 border border-neutral-600">
                                        <iconify-icon icon="solar:upload-linear" class="text-xl"></iconify-icon>
                                        Upload
                                        <input type="file" class="form-control form-control-lg file-input" id="file-upload-packing" multiple hidden>
                                    </label>
                                    <div class="filename-display"></div>
                                    <ul id="uploaded-img-names" class=""></ul>
                                </div>
                                <div class="upload-btn">
                                    <a href="#"><button class="upload-btn-btn-2 center-text width-100 border border-danger-700 bg-dark-danger-gradient text-primary-50"><iconify-icon icon="proicons:delete"></iconify-icon> Delete</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="grid-two-form mt-24">
                            <div class="page-frm-items">
                                <label class="form-label">Invoice</label>
                                <a href="#">Link</a>
                            </div>
                            <div class="page-frm-items">
                                <div class="upload-btn">
                                    <label for="file-upload-invoice" class="upload-btn-btn center-text width-100 border border-neutral-600">
                                        <iconify-icon icon="solar:upload-linear" class="text-xl"></iconify-icon>
                                        Upload
                                        <input type="file" class="form-control form-control-lg file-input" id="file-upload-invoice" multiple hidden>
                                    </label>
                                    <div class="filename-display"></div>
                                    <ul id="uploaded-img-names" class=""></ul>
                                </div>
                                <div class="upload-btn">
                                    <a href="#"><button class="upload-btn-btn-2 center-text width-100 border border-danger-700 bg-dark-danger-gradient text-primary-50"><iconify-icon icon="proicons:delete"></iconify-icon> Delete</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="grid-two-form mt-24">
                            <div class="page-frm-items">
                                <label class="form-label">Bill of Lading</label>
                                <a href="#">Link</a>
                            </div>
                            <div class="page-frm-items">
                                <div class="upload-btn">
                                    <label for="file-upload-bill" class="upload-btn-btn center-text width-100 border border-neutral-600">
                                        <iconify-icon icon="solar:upload-linear" class="text-xl"></iconify-icon>
                                        Upload
                                        <input type="file" class="form-control form-control-lg file-input" id="file-upload-bill" multiple hidden>
                                    </label>
                                    <div class="filename-display"></div>
                                    <ul id="uploaded-img-names" class=""></ul>
                                </div>
                                <div class="upload-btn">
                                    <a href="#"><button class="upload-btn-btn-2 center-text width-100 border border-danger-700 bg-dark-danger-gradient text-primary-50"><iconify-icon icon="proicons:delete"></iconify-icon> Delete</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="grid-two-form mt-24">
                            <div class="page-frm-items">
                                <label class="form-label">Certificate of Origin</label>
                                <a href="#">Link</a>
                            </div>
                            <div class="page-frm-items">
                                <div class="upload-btn">
                                    <label for="file-upload-certificate" class="upload-btn-btn center-text width-100 border border-neutral-600">
                                        <iconify-icon icon="solar:upload-linear" class="text-xl"></iconify-icon>
                                        Upload
                                        <input type="file" class="form-control form-control-lg file-input" id="file-upload-certificate" multiple hidden>
                                    </label>
                                    <div class="filename-display"></div>
                                    <ul id="uploaded-img-names" class=""></ul>
                                </div>
                                <div class="upload-btn">
                                    <a href="#"><button class="upload-btn-btn-2 center-text width-100 border border-danger-700 bg-dark-danger-gradient text-primary-50"><iconify-icon icon="proicons:delete"></iconify-icon> Delete</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="grid-two-form mt-24">
                            <div class="page-frm-items">
                                <label class="form-label">Letter of Credit</label>
                                <a href="#">Link</a>
                            </div>
                            <div class="page-frm-items">
                                <div class="upload-btn">
                                    <label for="file-upload-letter" class="upload-btn-btn center-text width-100 border border-neutral-600">
                                        <iconify-icon icon="solar:upload-linear" class="text-xl"></iconify-icon>
                                        Upload
                                        <input type="file" class="form-control form-control-lg file-input" id="file-upload-letter" multiple hidden>
                                    </label>
                                    <div class="filename-display"></div>
                                    <ul id="uploaded-img-names" class=""></ul>
                                </div>
                                <div class="upload-btn">
                                    <a href="#"><button class="upload-btn-btn-2 center-text width-100 border border-danger-700 bg-dark-danger-gradient text-primary-50"><iconify-icon icon="proicons:delete"></iconify-icon> Delete</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="grid-two-form mt-24">
                            <div class="page-frm-items">
                                <label class="form-label">Airway Bill</label>
                                <a href="#">Link</a>
                            </div>
                            <div class="page-frm-items">
                                <div class="upload-btn">
                                    <label for="file-upload-airway" class="upload-btn-btn center-text width-100 border border-neutral-600">
                                        <iconify-icon icon="solar:upload-linear" class="text-xl"></iconify-icon>
                                        Upload
                                        <input type="file" class="form-control form-control-lg file-input" id="file-upload-airway" multiple hidden>
                                    </label>
                                    <div class="filename-display"></div>
                                    <ul id="uploaded-img-names" class=""></ul>
                                </div>
                                <div class="upload-btn">
                                    <a href="#"><button class="upload-btn-btn-2 center-text width-100 border border-danger-700 bg-dark-danger-gradient text-primary-50"><iconify-icon icon="proicons:delete"></iconify-icon> Delete</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="grid-two-form mt-24">
                            <div class="page-frm-items">
                                <label class="form-label">Custom Decl.Form</label>
                                <a href="#">Link</a>
                            </div>
                            <div class="page-frm-items">
                                <div class="upload-btn">
                                    <label for="file-upload-custom" class="upload-btn-btn center-text width-100 border border-neutral-600">
                                        <iconify-icon icon="solar:upload-linear" class="text-xl"></iconify-icon>
                                        Upload
                                        <input type="file" class="form-control form-control-lg file-input" id="file-upload-custom" multiple hidden>
                                    </label>
                                    <div class="filename-display"></div>
                                    <ul id="uploaded-img-names" class=""></ul>
                                </div>
                                <div class="upload-btn">
                                    <a href="#"><button class="upload-btn-btn-2 center-text width-100 border border-danger-700 bg-dark-danger-gradient text-primary-50"><iconify-icon icon="proicons:delete"></iconify-icon> Delete</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="grid-two-form mt-24">
                            <div class="page-frm-items">
                                <label class="form-label">Insurance</label>
                                <a href="#">Link</a>
                            </div>
                            <div class="page-frm-items">
                                <div class="upload-btn">
                                    <label for="file-upload-insurance" class="upload-btn-btn center-text width-100 border border-neutral-600">
                                        <iconify-icon icon="solar:upload-linear" class="text-xl"></iconify-icon>
                                        Upload
                                        <input type="file" class="form-control form-control-lg file-input" id="file-upload-insurance" multiple hidden>
                                    </label>
                                    <div class="filename-display"></div>
                                    <ul id="uploaded-img-names" class=""></ul>
                                </div>
                                <div class="upload-btn">
                                    <a href="#"><button class="upload-btn-btn-2 center-text width-100 border border-danger-700 bg-dark-danger-gradient text-primary-50"><iconify-icon icon="proicons:delete"></iconify-icon> Delete</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="grid-two-form mt-24">
                            <div class="page-frm-items">
                                <label class="form-label">Export License</label>
                                <a href="#">Link</a>
                            </div>
                            <div class="page-frm-items">
                                <div class="upload-btn">
                                    <label for="file-upload-export" class="upload-btn-btn center-text width-100 border border-neutral-600">
                                        <iconify-icon icon="solar:upload-linear" class="text-xl"></iconify-icon>
                                        Upload
                                        <input type="file" class="form-control form-control-lg file-input" id="file-upload-export" multiple hidden>
                                    </label>
                                    <div class="filename-display"></div>
                                    <ul id="uploaded-img-names" class=""></ul>
                                </div>
                                <div class="upload-btn">
                                    <a href="#"><button class="upload-btn-btn-2 center-text width-100 border border-danger-700 bg-dark-danger-gradient text-primary-50"><iconify-icon icon="proicons:delete"></iconify-icon> Delete</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CMR List -->
            <div class="page-container">
                <div class="card">
                    <div class="card-body mb-20">
                        <!-- CMR 1 -->
                        <div class="mt-24">
                            <div class="page-frm-items">
                                <label class="form-label">CMR 1</label>
                                <input type="CMR 1" name="#0" class="form-control" placeholder="Enter CMR Details">
                            </div>
                            <div class="grid-two-form page-frm-items">
                                <div class="upload-btn">
                                    <label for="file-upload-cmr1" class="upload-btn-btn center-text width-100 border border-neutral-600">
                                        <iconify-icon icon="solar:upload-linear" class="text-xl"></iconify-icon>
                                        Upload
                                        <input type="file" class="form-control form-control-lg file-input" id="file-upload-cmr1" multiple hidden>
                                    </label>
                                    <div class="filename-display"></div>
                                    <ul id="uploaded-img-names" class=""></ul>
                                </div>
                                <div class="upload-btn mrgntp-btn">
                                    <a href="#">
                                        <button class="mrgntp-btn upload-btn-btn-2 center-text width-100 border border-danger-700 bg-dark-danger-gradient text-primary-50">
                                            <iconify-icon icon="proicons:delete" class="text-xl"></iconify-icon>
                                            Delete
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- CMR 2 -->
                        <div class="mt-24">
                            <div class="page-frm-items">
                                <label class="form-label">CMR 2</label>
                                <input type="CMR 1" name="#0" class="form-control" placeholder="Enter CMR Details">
                            </div>
                            <div class="grid-two-form page-frm-items">
                                <div class="upload-btn">
                                    <label for="file-upload-cmr2" class="upload-btn-btn center-text width-100 border border-neutral-600">
                                        <iconify-icon icon="solar:upload-linear" class="text-xl"></iconify-icon>
                                        Upload
                                        <input type="file" class="form-control form-control-lg file-input" id="file-upload-cmr2" multiple hidden>
                                    </label>
                                    <div class="filename-display"></div>
                                    <ul id="uploaded-img-names" class=""></ul>
                                </div>
                                <div class="upload-btn mrgntp-btn">
                                    <a href="#">
                                        <button class="mrgntp-btn upload-btn-btn-2 center-text width-100 border border-danger-700 bg-dark-danger-gradient text-primary-50">
                                            <iconify-icon icon="proicons:delete" class="text-xl"></iconify-icon>
                                            Delete
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- CMR 3 -->
                        <div class="mt-24">
                            <div class="page-frm-items">
                                <label class="form-label">CMR 3</label>
                                <input type="CMR 1" name="#0" class="form-control" placeholder="Enter CMR Details">
                            </div>
                            <div class="grid-two-form page-frm-items">
                                <div class="upload-btn">
                                    <label for="file-upload-cmr3" class="upload-btn-btn center-text width-100 border border-neutral-600">
                                        <iconify-icon icon="solar:upload-linear" class="text-xl"></iconify-icon>
                                        Upload
                                        <input type="file" class="form-control form-control-lg file-input" id="file-upload-cmr3" multiple hidden>
                                    </label>
                                    <div class="filename-display"></div>
                                    <ul id="uploaded-img-names" class=""></ul>
                                </div>
                                <div class="upload-btn mrgntp-btn">
                                    <a href="#">
                                        <button class="mrgntp-btn upload-btn-btn-2 center-text width-100 border border-danger-700 bg-dark-danger-gradient text-primary-50">
                                            <iconify-icon icon="proicons:delete" class="text-xl"></iconify-icon>
                                            Delete
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- CMR 4 -->
                        <div class="mt-24">
                            <div class="page-frm-items">
                                <label class="form-label">CMR 4</label>
                                <input type="CMR 1" name="#0" class="form-control" placeholder="Enter CMR Details">
                            </div>
                            <div class="grid-two-form page-frm-items">
                                <div class="upload-btn">
                                    <label for="file-upload-cmr4" class="upload-btn-btn center-text width-100 border border-neutral-600">
                                        <iconify-icon icon="solar:upload-linear" class="text-xl"></iconify-icon>
                                        Upload
                                        <input type="file" class="form-control form-control-lg file-input" id="file-upload-cmr4" multiple hidden>
                                    </label>
                                    <div class="filename-display"></div>
                                    <ul id="uploaded-img-names" class=""></ul>
                                </div>
                                <div class="upload-btn mrgntp-btn">
                                    <a href="#">
                                        <button class="mrgntp-btn upload-btn-btn-2 center-text width-100 border border-danger-700 bg-dark-danger-gradient text-primary-50">
                                            <iconify-icon icon="proicons:delete" class="text-xl"></iconify-icon>
                                            Delete
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gy-4 mt-0">
            <div class="tab-pane fade show active" id="pills-to-do-list" role="tabpanel" aria-labelledby="pills-to-do-list-tab" tabindex="0">
                <div class="update-button-row">
                    <div class="card-action-btns-start">
                        <a href=""><span class="btn-img badge text-btn fw-semibold bg-dark-primary-gradient text-white"><iconify-icon icon="mynaui:save" class="text-xl"></iconify-icon> Save</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include './partials/layouts/layoutBottom.php' ?>
