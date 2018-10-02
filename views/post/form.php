<?php include_once ROOT.'/views/post/layouts.php'?>


<form action="form" method="post">
    <div class="form-group">
    <p>Title <input type="text" required name="title"class = "form-control" /></p>

    <p>Author<input type="" name="author_name" required class = "form-control" /></p>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea type="text" class="form-control" id="description" required name = "description"></textarea>

        </div>


        <p><a href="/"><input type="submit" name = "submit" /></p></a></div>

</form>