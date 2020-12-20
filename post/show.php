<?php

require_once   '../core/init.php';

$id = $_GET['id'] ?? '';

if(!trim($id)) {
    redirect(url('/post/index.php'));
}

$sql = "SELECT * FROM posts WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$post = mysqli_fetch_assoc($result);
?>

<?php include APP_PATH . '/layouts/header.php'; ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-body">

                    <h3><?php echo $post['title']; ?></h3>
                    <p><?php echo $post['body']; ?></p>

                </div>
                <div class="card-footer text-right">
                    <a 
                    href="<?php echo url('/post/index.php'); ?>" 
                    class="btn btn-outline-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include APP_PATH . '/layouts/footer.php'; ?>