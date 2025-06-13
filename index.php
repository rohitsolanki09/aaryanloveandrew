<?php $script = '<script src="assets/js/homeOneChart.js"></script>'; ?>

<?php include './partials/layouts/layoutTop.php' ?>
<!-- DASHBOARD BUTTONS   -->
<div class="dashboard-main-body">
    <div class="dashboard-btn-grid">
        <div class="card-action-btns-start">
            <a href="create-container.php"><span class="btn-img badge text-btn fw-semibold bg-dark-primary-gradient text-white"><iconify-icon icon="octicon:container-16"></iconify-icon> CREATE CONTAINER</span></a>
        </div>
        <div class="card-action-btns-start">
            <a href="list-container.php"><span class="btn-img badge text-btn fw-semibold bg-dark-primary-gradient text-white"><iconify-icon icon="ant-design:container-filled"></iconify-icon> CONTAINER LIST</span></a>
        </div>
        <div class="card-action-btns-start">
            <a href="finalized-container.php"><span class="btn-img badge text-btn fw-semibold bg-dark-primary-gradient text-white"><iconify-icon icon="eos-icons:container-outlined"></iconify-icon> FINALIZED CONTAINER</span></a>
        </div>
        <div class="card-action-btns-start">
            <a href=""><span class="btn-img badge text-btn fw-semibold bg-dark-primary-gradient text-white"><iconify-icon icon="ph:shipping-container" class="text-xl"></iconify-icon> ALL CONTAINER</span></a>
        </div>
    </div>
    <!-- CONTAIENR LIST -->
    <div class="container-list-grid">
        <div class="container-artwork">
            <img src="assets/images/container1.png" alt="container-artwork">
        </div>
        <div class="container-list-num">
            <div class="list-num-btn">
                <a href="edit-container.php">C1</a>
            </div>
            <div class="list-num-btn">
                <a href="edit-container.php">C2</a>
            </div>
            <div class="list-num-btn">
                <a href="edit-container.php">C3</a>
            </div>
            <div class="list-num-btn">
                <a href="edit-container.php">C4</a>
            </div>
            <div class="list-num-btn">
                <a href="edit-container.php">C5</a>
            </div>
            <div class="list-num-btn">
                <a href="edit-container.php">C6</a>
            </div>
            <div class="list-num-btn">
                <a href="edit-container.php">C7</a>
            </div>
            <div class="list-num-btn">
                <a href="edit-container.php">C8</a>
            </div>
            <div class="list-num-btn">
                <a href="edit-container.php">C9</a>
            </div>
            <div class="list-num-btn">
                <a href="edit-container.php">C10</a>
            </div>
            <div class="list-num-btn">
                <a href="edit-container.php">C11</a>
            </div>
            <div class="list-num-btn">
                <a href="edit-container.php">C12</a>
            </div>
            <div class="list-num-btn">
                <a href="edit-container.php">C13</a>
            </div>
            <div class="list-num-btn">
                <a href="edit-container.php">C14</a>
            </div>
            <div class="list-num-btn">
                <a href="edit-container.php">C15</a>
            </div>
            <div class="list-num-btn">
                <a href="edit-container.php">C16</a>
            </div>
            <div class="list-num-btn">
                <a href="edit-container.php">C17</a>
            </div>
            <div class="list-num-btn">
                <a href="edit-container.php">C18</a>
            </div>
            <div class="list-num-btn">
                <a href="edit-container.php">C19</a>
            </div>
            <div class="list-num-btn">
                <a href="edit-container.php">C20</a>
            </div>
        </div>
    </div>
    <hr class="divider-primary">

    <!-- CONTAIENR LIST -->
    <div class="dashboard-container-list">
        <div class="tab-container">
            <div class="tab-buttons">
                <button class="tab-btn active" data-tab="container-list">CONTAINER LIST</button>
                <button class="tab-btn" data-tab="finalized-list">FINALIZED CONTAINER LIST</button>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="container-list">
                    <!-- Container List Content -->
                    <div class="dashboard-container-list-sec">
                        <a href="edit-container.php" class="container-link">
                            <div class="dashboard-container-list-items">
                                <div class="list-items-title">
                                    <div class="items-title-ctn">
                                        <h5>C1</h5>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>ETD FOB:</b><br>2025-05-06</p>
                                        <p><b>ETA POA:</b><br>2025-06-23</p>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>No. of Pallets:</b><br>1234567890</p>
                                        <p><b>Balance:</b><br>1234567890</p>
                                    </div>
                                </div>
                                <div class="list-items-button">
                                    <div class="list-btn-ctn item-attached">
                                        <p>Packing List</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Invoice</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Bill of Landing</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Certificate of Origin</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Letter of Credit</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Airway Bill</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Custom.Decl.Form</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Insurance</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Export License</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>CMR</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="edit-container.php" class="container-link">
                            <div class="dashboard-container-list-items">
                                <div class="list-items-title">
                                    <div class="items-title-ctn">
                                        <h5>C2</h4>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>ETD FOB:</b><br>2025-05-06</p>
                                        <p><b>ETA POA:</b><br>2025-06-23</p>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>No. of Pallets:</b><br>1234567890</p>
                                        <p><b>Balance:</b><br>1234567890</p>
                                    </div>
                                </div>
                                <div class="list-items-button">
                                    <div class="list-btn-ctn item-attached">
                                        <p>Packing List</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Invoice</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Bill of Landing</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Certificate of Origin</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Letter of Credit</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Airway Bill</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Custom.Decl.Form</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Insurance</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Export License</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>CMR</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="edit-container.php" class="container-link">
                            <div class="dashboard-container-list-items">
                                <div class="list-items-title">
                                    <div class="items-title-ctn">
                                        <h5>C3</h4>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>ETD FOB:</b><br>2025-05-06</p>
                                        <p><b>ETA POA:</b><br>2025-06-23</p>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>No. of Pallets:</b><br>1234567890</p>
                                        <p><b>Balance:</b><br>1234567890</p>
                                    </div>
                                </div>
                                <div class="list-items-button">
                                    <div class="list-btn-ctn item-attached">
                                        <p>Packing List</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Invoice</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Bill of Landing</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Certificate of Origin</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Letter of Credit</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Airway Bill</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Custom.Decl.Form</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Insurance</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Export License</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>CMR</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="edit-container.php" class="container-link">
                            <div class="dashboard-container-list-items">
                                <div class="list-items-title">
                                    <div class="items-title-ctn">
                                        <h5>C4</h4>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>ETD FOB:</b><br>2025-05-06</p>
                                        <p><b>ETA POA:</b><br>2025-06-23</p>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>No. of Pallets:</b><br>1234567890</p>
                                        <p><b>Balance:</b><br>1234567890</p>
                                    </div>
                                </div>
                                <div class="list-items-button">
                                    <div class="list-btn-ctn item-attached">
                                        <p>Packing List</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Invoice</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Bill of Landing</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Certificate of Origin</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Letter of Credit</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Airway Bill</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Custom.Decl.Form</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Insurance</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Export License</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>CMR</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="edit-container.php" class="container-link">
                            <div class="dashboard-container-list-items">
                                <div class="list-items-title">
                                    <div class="items-title-ctn">
                                        <h5>C5</h4>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>ETD FOB:</b><br>2025-05-06</p>
                                        <p><b>ETA POA:</b><br>2025-06-23</p>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>No. of Pallets:</b><br>1234567890</p>
                                        <p><b>Balance:</b><br>1234567890</p>
                                    </div>
                                </div>
                                <div class="list-items-button">
                                    <div class="list-btn-ctn item-attached">
                                        <p>Packing List</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Invoice</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Bill of Landing</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Certificate of Origin</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Letter of Credit</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Airway Bill</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Custom.Decl.Form</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Insurance</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Export License</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>CMR</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="edit-container.php" class="container-link">
                            <div class="dashboard-container-list-items">
                                <div class="list-items-title">
                                    <div class="items-title-ctn">
                                        <h5>C6</h4>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>ETD FOB:</b><br>2025-05-06</p>
                                        <p><b>ETA POA:</b><br>2025-06-23</p>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>No. of Pallets:</b><br>1234567890</p>
                                        <p><b>Balance:</b><br>1234567890</p>
                                    </div>
                                </div>
                                <div class="list-items-button">
                                    <div class="list-btn-ctn item-attached">
                                        <p>Packing List</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Invoice</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Bill of Landing</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Certificate of Origin</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Letter of Credit</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Airway Bill</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Custom.Decl.Form</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Insurance</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Export License</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>CMR</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="edit-container.php" class="container-link">
                            <div class="dashboard-container-list-items">
                                <div class="list-items-title">
                                    <div class="items-title-ctn">
                                        <h5>C7</h4>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>ETD FOB:</b><br>2025-05-06</p>
                                        <p><b>ETA POA:</b><br>2025-06-23</p>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>No. of Pallets:</b><br>1234567890</p>
                                        <p><b>Balance:</b><br>1234567890</p>
                                    </div>
                                </div>
                                <div class="list-items-button">
                                    <div class="list-btn-ctn item-attached">
                                        <p>Packing List</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Invoice</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Bill of Landing</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Certificate of Origin</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Letter of Credit</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Airway Bill</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Custom.Decl.Form</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Insurance</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Export License</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>CMR</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="edit-container.php" class="container-link">
                            <div class="dashboard-container-list-items">
                                <div class="list-items-title">
                                    <div class="items-title-ctn">
                                        <h5>C8</h4>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>ETD FOB:</b><br>2025-05-06</p>
                                        <p><b>ETA POA:</b><br>2025-06-23</p>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>No. of Pallets:</b><br>1234567890</p>
                                        <p><b>Balance:</b><br>1234567890</p>
                                    </div>
                                </div>
                                <div class="list-items-button">
                                    <div class="list-btn-ctn item-attached">
                                        <p>Packing List</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Invoice</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Bill of Landing</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Certificate of Origin</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Letter of Credit</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Airway Bill</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Custom.Decl.Form</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Insurance</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Export License</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>CMR</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="edit-container.php" class="container-link">
                            <div class="dashboard-container-list-items">
                                <div class="list-items-title">
                                    <div class="items-title-ctn">
                                        <h5>C9</h4>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>ETD FOB:</b><br>2025-05-06</p>
                                        <p><b>ETA POA:</b><br>2025-06-23</p>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>No. of Pallets:</b><br>1234567890</p>
                                        <p><b>Balance:</b><br>1234567890</p>
                                    </div>
                                </div>
                                <div class="list-items-button">
                                    <div class="list-btn-ctn item-attached">
                                        <p>Packing List</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Invoice</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Bill of Landing</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Certificate of Origin</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Letter of Credit</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Airway Bill</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Custom.Decl.Form</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Insurance</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Export License</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>CMR</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="edit-container.php" class="container-link">
                            <div class="dashboard-container-list-items">
                                <div class="list-items-title">
                                    <div class="items-title-ctn">
                                        <h5>C10</h4>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>ETD FOB:</b><br>2025-05-06</p>
                                        <p><b>ETA POA:</b><br>2025-06-23</p>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>No. of Pallets:</b><br>1234567890</p>
                                        <p><b>Balance:</b><br>1234567890</p>
                                    </div>
                                </div>
                                <div class="list-items-button">
                                    <div class="list-btn-ctn item-attached">
                                        <p>Packing List</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Invoice</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Bill of Landing</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Certificate of Origin</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Letter of Credit</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Airway Bill</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Custom.Decl.Form</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Insurance</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Export License</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>CMR</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="tab-pane" id="finalized-list">
                    <!-- Container List Content -->
                    <div class="dashboard-container-list-sec">

                        <a href="edit-container.php" class="container-link">
                            <div class="dashboard-container-list-items">
                                <div class="list-items-title">
                                    <div class="items-title-ctn">
                                        <h5>C2</h4>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>ETD FOB:</b><br>2025-05-06</p>
                                        <p><b>ETA POA:</b><br>2025-06-23</p>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>No. of Pallets:</b><br>1234567890</p>
                                        <p><b>Balance:</b><br>1234567890</p>
                                    </div>
                                </div>
                                <div class="list-items-button">
                                    <div class="list-btn-ctn item-attached">
                                        <p>Packing List</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Invoice</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Bill of Landing</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Certificate of Origin</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Letter of Credit</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Airway Bill</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Custom.Decl.Form</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Insurance</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Export License</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>CMR</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="edit-container.php" class="container-link">
                            <div class="dashboard-container-list-items">
                                <div class="list-items-title">
                                    <div class="items-title-ctn">
                                        <h5>C3</h4>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>ETD FOB:</b><br>2025-05-06</p>
                                        <p><b>ETA POA:</b><br>2025-06-23</p>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>No. of Pallets:</b><br>1234567890</p>
                                        <p><b>Balance:</b><br>1234567890</p>
                                    </div>
                                </div>
                                <div class="list-items-button">
                                    <div class="list-btn-ctn item-attached">
                                        <p>Packing List</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Invoice</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Bill of Landing</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Certificate of Origin</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Letter of Credit</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Airway Bill</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Custom.Decl.Form</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Insurance</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Export License</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>CMR</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="edit-container.php" class="container-link">
                            <div class="dashboard-container-list-items">
                                <div class="list-items-title">
                                    <div class="items-title-ctn">
                                        <h5>C4</h4>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>ETD FOB:</b><br>2025-05-06</p>
                                        <p><b>ETA POA:</b><br>2025-06-23</p>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>No. of Pallets:</b><br>1234567890</p>
                                        <p><b>Balance:</b><br>1234567890</p>
                                    </div>
                                </div>
                                <div class="list-items-button">
                                    <div class="list-btn-ctn item-attached">
                                        <p>Packing List</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Invoice</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Bill of Landing</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Certificate of Origin</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Letter of Credit</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Airway Bill</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Custom.Decl.Form</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Insurance</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Export License</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>CMR</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="edit-container.php" class="container-link">
                            <div class="dashboard-container-list-items">
                                <div class="list-items-title">
                                    <div class="items-title-ctn">
                                        <h5>C5</h4>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>ETD FOB:</b><br>2025-05-06</p>
                                        <p><b>ETA POA:</b><br>2025-06-23</p>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>No. of Pallets:</b><br>1234567890</p>
                                        <p><b>Balance:</b><br>1234567890</p>
                                    </div>
                                </div>
                                <div class="list-items-button">
                                    <div class="list-btn-ctn item-attached">
                                        <p>Packing List</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Invoice</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Bill of Landing</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Certificate of Origin</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Letter of Credit</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Airway Bill</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Custom.Decl.Form</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Insurance</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Export License</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>CMR</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="edit-container.php" class="container-link">
                            <div class="dashboard-container-list-items">
                                <div class="list-items-title">
                                    <div class="items-title-ctn">
                                        <h5>C6</h4>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>ETD FOB:</b><br>2025-05-06</p>
                                        <p><b>ETA POA:</b><br>2025-06-23</p>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>No. of Pallets:</b><br>1234567890</p>
                                        <p><b>Balance:</b><br>1234567890</p>
                                    </div>
                                </div>
                                <div class="list-items-button">
                                    <div class="list-btn-ctn item-attached">
                                        <p>Packing List</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Invoice</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Bill of Landing</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Certificate of Origin</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Letter of Credit</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Airway Bill</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Custom.Decl.Form</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Insurance</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Export License</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>CMR</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="edit-container.php" class="container-link">
                            <div class="dashboard-container-list-items">
                                <div class="list-items-title">
                                    <div class="items-title-ctn">
                                        <h5>C7</h4>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>ETD FOB:</b><br>2025-05-06</p>
                                        <p><b>ETA POA:</b><br>2025-06-23</p>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>No. of Pallets:</b><br>1234567890</p>
                                        <p><b>Balance:</b><br>1234567890</p>
                                    </div>
                                </div>
                                <div class="list-items-button">
                                    <div class="list-btn-ctn item-attached">
                                        <p>Packing List</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Invoice</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Bill of Landing</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Certificate of Origin</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Letter of Credit</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Airway Bill</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Custom.Decl.Form</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Insurance</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Export License</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>CMR</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="edit-container.php" class="container-link">
                            <div class="dashboard-container-list-items">
                                <div class="list-items-title">
                                    <div class="items-title-ctn">
                                        <h5>C1</h4>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>ETD FOB:</b><br>2025-05-06</p>
                                        <p><b>ETA POA:</b><br>2025-06-23</p>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>No. of Pallets:</b><br>1234567890</p>
                                        <p><b>Balance:</b><br>1234567890</p>
                                    </div>
                                </div>
                                <div class="list-items-button">
                                    <div class="list-btn-ctn item-attached">
                                        <p>Packing List</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Invoice</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Bill of Landing</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Certificate of Origin</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Letter of Credit</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Airway Bill</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Custom.Decl.Form</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Insurance</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Export License</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>CMR</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="edit-container.php" class="container-link">
                            <div class="dashboard-container-list-items">
                                <div class="list-items-title">
                                    <div class="items-title-ctn">
                                        <h5>C8</h4>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>ETD FOB:</b><br>2025-05-06</p>
                                        <p><b>ETA POA:</b><br>2025-06-23</p>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>No. of Pallets:</b><br>1234567890</p>
                                        <p><b>Balance:</b><br>1234567890</p>
                                    </div>
                                </div>
                                <div class="list-items-button">
                                    <div class="list-btn-ctn item-attached">
                                        <p>Packing List</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Invoice</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Bill of Landing</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Certificate of Origin</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Letter of Credit</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Airway Bill</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Custom.Decl.Form</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Insurance</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Export License</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>CMR</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="edit-container.php" class="container-link">
                            <div class="dashboard-container-list-items">
                                <div class="list-items-title">
                                    <div class="items-title-ctn">
                                        <h5>C9</h4>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>ETD FOB:</b><br>2025-05-06</p>
                                        <p><b>ETA POA:</b><br>2025-06-23</p>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>No. of Pallets:</b><br>1234567890</p>
                                        <p><b>Balance:</b><br>1234567890</p>
                                    </div>
                                </div>
                                <div class="list-items-button">
                                    <div class="list-btn-ctn item-attached">
                                        <p>Packing List</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Invoice</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Bill of Landing</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Certificate of Origin</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Letter of Credit</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Airway Bill</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Custom.Decl.Form</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Insurance</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Export License</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>CMR</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="edit-container.php" class="container-link">
                            <div class="dashboard-container-list-items">
                                <div class="list-items-title">
                                    <div class="items-title-ctn">
                                        <h5>C10</h4>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>ETD FOB:</b><br>2025-05-06</p>
                                        <p><b>ETA POA:</b><br>2025-06-23</p>
                                    </div>
                                    <div class="items-title-ctn">
                                        <p><b>No. of Pallets:</b><br>1234567890</p>
                                        <p><b>Balance:</b><br>1234567890</p>
                                    </div>
                                </div>
                                <div class="list-items-button">
                                    <div class="list-btn-ctn item-attached">
                                        <p>Packing List</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Invoice</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Bill of Landing</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Certificate of Origin</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Letter of Credit</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Airway Bill</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Custom.Decl.Form</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>Insurance</p>
                                    </div>
                                    <div class="list-btn-ctn">
                                        <p>Export License</p>
                                    </div>
                                    <div class="list-btn-ctn item-attached">
                                        <p>CMR</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include './partials/layouts/layoutBottom.php' ?>
