
<?php include_once ROOT.'/views/post/layouts.php' ?>
<!DOCTYPE html>

<body>

<section id="quote">

    <!-- Поехали -->
    <div class="container">
        <div class="row">
            <div class='col-md-offset-2 col-md-8 text-center'>
                <h2>Респонсивная карусель отзывов, цитат BS3</h2>
            </div>
        </div>
        <div class='row'>
            <div class='col-md-offset-2 col-md-8'>
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Bottom Carousel Indicators -->

                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#quote-carousel" data-slide-to="1"></li>
                        <li data-target="#quote-carousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner">
                        <!-- Quote 1 -->
                        <?php foreach ($com1 as $post):?>
                        <div class="item active">
                                <div class="row">

                                    <div class="col-sm-12 text-center">

                                    <div class="col-sm-11">


                                            <a href="post/<?php echo $post['id'];?>"><h2><?php echo $post['title'];?></h2></a>
                                            <?php $desc = explode("/n",wordwrap($post['description'],100));?>
                                            <p><?php echo implode ($desc);?></p>
                                            <p> <?php echo $post['author_name'];?></p>
                                            <p> <?php echo date('d-m-Y', strtotime($post['date']));?></p>
<p></p>



                                    </div>

                                </div>
                                </div>



                        </div>
                         <?php endforeach;?>
                        <!-- Quote 2 -->
                        <div class="item ">
                            <blockquote>
                                <div class="row">


                                    <div class="col-sm-9">


                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 3 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-3 text-center">

                                    <div class="col-sm-9">


                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>

                    <!-- Carousel Buttons Next/Prev -->
                    <a data-slide="prev" href="#quote-carousel" class="left carousel-control"> <i class="fa fa-chevron-left"></i>
                    </a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"> <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Latest compiled and minified JavaScript -->
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>




<!-- Example row of columns -->



    <?php foreach ($posts as $post):?>






    <div class="row">
        <div class="col-md-4">

            <a href="post/<?php echo $post['id'];?>"><h2><?php echo $post['title'];?></h2></a>
            <?php $desc = explode("/n",wordwrap($post['description'],100));?>
            <p><?php echo implode ($desc);?></p>
            <p> <?php echo $post['author_name'];?></p>
            <p> <?php echo date('d-m-Y', strtotime($post['date']));?></p>


        </div>

    </div>
    <?php endforeach;?>


    <hr>

    <footer>
        <p>&copy; 2018 Company, Inc.</p>
    </footer>
</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>


