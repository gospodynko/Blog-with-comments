
<?php include_once ROOT.'/views/post/layouts.php' ?>

<div class="container">
    <!-- Example row of columns -->






    <div class="row">
        <div class="col-md-4">
            <h2><?php echo $post['title'];?></h2>
            <p><?php echo $post['description'];?></p>
            <p> <?php echo $post['author_name'];?></p>
            <p> <?php echo date('d-m-Y', strtotime($post['date']));?></p>

        </div>

    </div>
    <head>
        <title>View</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    </head>

<h1>Comments</h1>
    <form action=" " method="post">
        <div class="form-group">


            <p>Author<input type="" name="author_name1" required class = "form-control" /></p>

            <div class="form-group">
                <label for="comment">Comment</label>
                <textarea type="text" class="form-control" required id="comment" name = "comment"></textarea>

            </div>


            <p><input type="submit"  name = "submit" /></p>

    </form>

<?php foreach ($com as $comment) :?>

    <p><?php echo $comment['comments'];?></p>
    <p> <?php echo $comment['author_name'];?></p>
    <p> <?php echo date('d-m-Y', strtotime($comment['date']));?></p>
    <? endforeach;?>



