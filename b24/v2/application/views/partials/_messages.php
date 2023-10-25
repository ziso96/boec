<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!--print error messages-->
<?php if ($this->session->flashdata('errors')): ?>
    <div class="demo-spacing-0">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <div class="alert-body d-flex align-items-center">
                <i data-feather='x'></i> <?php echo $this->session->flashdata('errors'); ?>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
<?php endif; ?>

<!--print custom error message-->
<?php if ($this->session->flashdata('error')): ?>
    <div class="demo-spacing-0">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <div class="alert-body d-flex align-items-center">
                <i data-feather='alert-triangle'></i> <?php echo $this->session->flashdata('error'); ?>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
<?php endif; ?>

<!--print custom success message-->
<?php if ($this->session->flashdata('success')): ?>
    <div class="demo-spacing-0">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <div class="alert-body d-flex align-items-center">
                <i data-feather='check'></i> <?php echo $this->session->flashdata('success'); ?>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
<?php endif; ?>
