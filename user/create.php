<?php require_once '../core/init.php';?>
<?php include APP_PATH . '/layouts/header.php'; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-header">
                    Create User
                </div>
                <div class="card-body">
                    <form action="<?php echo url('/user/store.php') ?>" method="POST">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" >
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="<?php echo url('/user/index.php'); ?>" 
                        class="btn btn-outline-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include  APP_PATH . '/layouts/footer.php'; ?>