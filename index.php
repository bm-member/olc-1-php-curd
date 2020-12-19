<?php

require_once  './init.php';

$sql = "SELECT * FROM posts";
$result = mysqli_query($conn, $sql);
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
// while($post = mysqli_fetch_assoc($result)):
//     echo 'Post title: ' . $post['title']  . '<br>';
// endwhile;
?>

<?php include 'header.php'; ?>
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
        <div class="col-12 mb-3 text-right">
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
                <div class="card-footer text-right">
                    <a href="edit.php?id=<?php echo $post['id']; ?>" class="btn btn-success">Edit</a>
                    <a href="delete.php?id=<?php echo $post['id']; ?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>

<?php include 'footer.php'; ?>