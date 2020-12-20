<?php

require_once   '../core/init.php';

$id = $_GET['id'] ?? '';

if(!trim($id)) {
    redirect(url('/user/index.php'));
}

$sql = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
?>

<?php include APP_PATH . '/layouts/header.php'; ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <p>Name: <?php echo $user['name']; ?></p>
                    <p>Date: <?php echo $user['date']; ?></p>
                </div>
                <div class="card-footer text-right">
                    <a 
                    href="<?php echo url('/user/index.php'); ?>" 
                    class="btn btn-outline-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include APP_PATH . '/layouts/footer.php'; ?>