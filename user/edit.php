<?php 

require_once '../core/init.php';

$id = $_GET['id'] ?? '';

if($id === '') {
    redirect(url('/user/index.php'));
}

$sql = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

?>
<?php include APP_PATH . '/layouts/header.php'; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-header">
                    Edit User
                </div>
                <div class="card-body">
                    <form action="<?php echo url('/user/update.php') ?>" method="POST">
                        <input type="hidden" name="id" value="<?php echo $user['id']; ?>" >
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" 
                                value="<?php echo $user['name']; ?>"
                            >
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                        <a href="<?php echo url('/user/index.php'); ?>" class="btn btn-outline-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include  APP_PATH . '/layouts/footer.php'; ?>