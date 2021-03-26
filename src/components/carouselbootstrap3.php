<section>
        <!--header starts-->
<div class="container">
 <?php include 'sistem/menupc.php'; ?>
</div>
<div class="container-fluid" style="padding:0;margin:0;">
    <div class="row">
        <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <?php
                        $i = 1;
                        $sql = $db->query("SELECT * FROM slider ORDER BY sira ASC", PDO::FETCH_ASSOC);
                        foreach ($sql as $a) {
                            $baslik = $a["baslik$dil2"];
                            $aciklama = $a["aciklama$dil2"];
                            $link = $a["mini"];
                            $resim = $a["manset"];
                        ?>

                            <div class="item <?php if($i==1){ echo "active";} ?>">
                                <img src="upload/manset/<?php echo $resim; ?>" class="res-img" style="width:100%" />
                            </div>

                        <?php
                            $i++;
                        }
                        ?>
                  

                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"><i class="fa fa-chevron-left" aria-hidden="true"></i>
</span></a><a class="right carousel-control"
                        href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
</span></a>
            </div>

        </div>
    </div>
</div>
<div id="push">
</div>

</section>