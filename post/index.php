<?php

require_once   '../core/init.php';

$sql = "SELECT posts.*, users.name as author FROM posts join users on posts.user_id = users.id";


$result = mysqli_query($conn, $sql);
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<?php include APP_PATH . '/layouts/header.php'; ?>
<div class="container mt-5">
    <div class="row">
        <?php if(session_has('success_message')): ?>
        <div class="col-12 mb-3">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php session_get('success_message'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <?php endif; ?>
        <?php if(session_has('error_message')): ?>
        <div class="col-12 mb-3">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php session_get('error_message'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <?php endif; ?>
        <div class="col-6 mb-3">
            <h1>Posts List</h1>
        </div>
        <div class="col-6 mb-3 text-right">
            <a href="create.php" class="btn btn-primary">Create</a>
        </div>
    </div>
    <div class="row">
        <?php foreach ($posts as $post): ?>
        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-body">

                    <h3><?php echo $post['title']; ?></h3>
                    <p><?php echo $post['body']; ?></p>

                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-6">
                            <a href="<?php echo url('/user/show.php?id=' . $post['user_id']); ?>">
                                <strong><?php echo $post['author'] ?> </strong>
                            </a>
                        <span class="text-muted">post on </span>
                        <small><i><?php echo date('d-m-Y', strtotime($post['date'])); ?></i></small>
                        </div>
                        <div class="col-6 text-right">
                            <a href="<?php echo url('/post/show.php?id=' . $post['id']); ?>" class="btn btn-info">View</a>
                            <a href="edit.php?id=<?php echo $post['id']; ?>" class="btn btn-success">Edit</a>
                            <a href="delete.php?id=<?php echo $post['id']; ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>

<?php include APP_PATH . '/layouts/footer.php'; ?>