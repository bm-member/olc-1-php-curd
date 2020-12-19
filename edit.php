<?php 

require_once './init.php';

$id = $_GET['id'] ?? '';
if($id === '') {
    redirect('index.php');
}
$sql = "SELECT * FROM posts WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$post = mysqli_fetch_assoc($result);

?>
<?php include './header.php'; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-header">
                    Edit Post
                </div>
                <div class="card-body">
                    <form action="update.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $post['id']; ?>" >
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" 
                                value="<?php echo $post['title']; ?>"
                            >
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <textarea class="form-control" name="body" rows="5">
                                <?php echo $post['body']; ?>
                            </textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                        <a href="index.php" class="btn btn-outline-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include './footer.php'; ?>