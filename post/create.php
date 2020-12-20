<?php require_once '../core/init.php'; ?>

<?php include  APP_PATH . '/layouts/header.php';?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 mb-3">
        <?php if (session_has('error_message')): ?>
        <div class="col-12 mb-3">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php session_get('error_message');?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <?php endif;?>
            <div class="card">
                <div class="card-header">
                    Create A Post
                </div>
                <div class="card-body">
                    <form action="store.php" method="POST">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <textarea class="form-control" name="body" rows="5">
                            </textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="index.php" class="btn btn-outline-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include  APP_PATH . '/layouts/footer.php';?>