<?php

require_once   '../core/init.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
            <h1>Users List</h1>
        </div>
        <div class="col-6 mb-3 text-right">
            <a href="create.php" class="btn btn-primary">Create</a>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Date</td>
                <td>Actions</td>
            </tr>
            <?php foreach($users as $user): ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo date('d-m-Y', strtotime($user['date'])); ?></td>
                <td>
                    <a 
                        href="<?php echo url('/user/show.php?id=' . $user['id']) ?>" 
                        class="btn btn-info">
                        View
                    </a>
                    <a 
                        href="/php_crud/user/edit.php?id=<?php echo $user['id'] ?>" 
                        class="btn btn-success">
                        Edit
                    </a>
                    <a 
                        href="/php_crud/user/delete.php?id=<?php echo $user['id'] ?>" 
                        class="btn btn-danger">
                        Delete
                    </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<?php include APP_PATH . '/layouts/footer.php'; ?>