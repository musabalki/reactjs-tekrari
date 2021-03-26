<link rel="stylesheet" href="style/slideshow.css">    
<section id="content">
                    <!-- Section -->
                    <section class="section full-width-bg full-width-slider-section red-bg">
                        
                        <div class="row">
                        
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                
                                <!-- Revolution Slider -->
                                <div class="tp-banner-container main-revolution">
                                
                                <div class="owl-carousel" data-max-items="1" data-nav="true">
                                <?php 
                                $i = 1; 
                                $sql = $db->query("SELECT * FROM slider ORDER BY sira ASC", PDO::FETCH_ASSOC);
                                foreach ($sql as $a) {	
                                $baslik = $a["baslik$dil2"];
                                $aciklama = $a["aciklama$dil2"];
                                $link = $a["mini"];			
                                $resim = $a["manset"];
                                ?>
 
                                <div class="item">
                                    <img src="upload/manset/<?php echo $resim; ?>" class="res-img" />
                                </div>

                                <?php
$i++;
}
?>     
    
                                        </div>
                                    </div>
                                
                                </div>
                                <!-- /Revolution Slider -->
        
                            </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                
                                <div class="banners-inline">
                                
                                <div class="banner-wrapper">
                                    <a class="banner animate-offscroll" href="kadromuz.html">
                                        <i class="icons icon-users"></i>
                                        <h4>KOMÄ°SYON</h4>
                                        <p>Komisyon Kadorusu Listesi</p>
                                    </a>
                                </div>
                                
                                <div class="banner-wrapper">
                                    <a class="banner animate-offscroll" href="dokumanlar.html">
                                        <i class="icons icon-download"></i>
                                        <h4>DÃ–KÃœMANLAR</h4>
                                        <p>Belgelerimiz ve DÃ¶kÃ¼manlar</p>
                                    </a>
                                </div>
                                
                                <div class="banner-wrapper">
                                    <a class="banner animate-offscroll" href="bilgiler-1.html">
                                        <i class="icons icon-help"></i>
                                        <h4>S.S.S.</h4>
                                        <p>SÄ±kÃ§a Sorulan Sorular</p>
                                    </a>
                                </div>
        
                                    
                                <div class="banner-wrapper">
                                    <a class="banner animate-offscroll" href="yorumlar-1.html">
                                        <i class="icons icon-book"></i>
                                        <h4>MÄ°safÄ°r DefterÄ°</h4>
                                        <p>YÃ¶netim hakkÄ±nda yorumlar</p>
                                    </a>
                                </div>
                        
                        
                                                
                                </div>
                                
                            </div>
                        
                        </div>
                        
                    </section>
                    <!-- /Section -->			   
    <?php
    $sql = $db->query("SELECT * FROM bloklar WHERE durum = '1' AND Id ='2' ORDER BY sira ASC");
    foreach ($sql as $b) {
    $blokbaslik = $b["baslik"];     
    echo '<section class="section full-width-bg gray-bg">
                    
                    <div class="row no-margin-bottom">
                    
                        
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            
                                                    
                            <!-- Owl Carousel -->
                            <div class="owl-carousel-container no-margin-bottom">
                                
                                <div class="owl-header">
                                    
                                    <h3 class="no-margin-top animate-offscroll">'.$blokbaslik.'</h3>
                                    
                                    <div class="carousel-arrows animate-offscroll">
                                        <span class="left-arrow"><i class="icons icon-left-dir"></i></span>
                                        <span class="right-arrow"><i class="icons icon-right-dir"></i></span>
                                    </div>
                                    
                                </div>
                            
                                <div class="owl-carousel" data-max-items="4">
    ';
    $sql = $db->query("SELECT * FROM haberler ORDER BY haberId DESC LIMIT 8", PDO::FETCH_ASSOC);
    foreach ($sql as $a) {					
                                    $icerik = html_entity_decode($a["icerik"]);
                                    $icerik = strip_tags($icerik);
                                    $icerik = substr($icerik, 0, 150); 
                                    $baslik = $a["baslik"];
                                    $tarih = $a["tarih"];
                                    $ay = $a["ay"];
                                    $yil = $a["yil"];
                                    $hit = $a["hit"];
                                    $seolu = "haber-" . seo($a["baslik"]) . "-" . $a["haberId"] . ".html";			
    echo ' <!-- Owl Item -->
                                    <div>
                                        
                                        <!-- Blog Post -->
                                        <div class="blog-post animate-noscroll">
                                            
                                            <div class="post-image">
                                                <img src="upload/blog/' . $a["resim"] . '" style="min-width:270px; max-height:150px;" height="150" alt="'.$baslik.'">
                                            </div>
                                            
                                            <h4 class="post-title"><a href="'.$seolu.'">'.$baslik.' </a></h4>
                                            
                                            <div class="post-meta">
                                                <span>'.$tarih.' '.$ay.' '.$yil.'</span>
                                            </div>
                                            
                                            <p>'.$icerik.' [...]</p>
                                            
                                            <a href="'.$seolu.'" class="button read-more-button big button-arrow">DevamÄ±nÄ± oku..</a>
                                            
                                        </div>
                                        <!-- /Blog Post -->
                                        
                                    </div>
                                    <!-- /Owl Item -->
    ';
    } 
    echo '	
                                </div>
                            
                            </div>
                            <!-- /Owl Carousel -->						
                        </div>
                    
                    </div>
                    
                </section>

    ';	 
    } 
    ?>        
    <?php
    $sql = $db->query("SELECT * FROM bloklar WHERE durum = '1' AND Id ='6' ORDER BY sira ASC");
    foreach ($sql as $b) {
    $blokbaslik = $b["baslik"];
    echo '<section class="section full-width-bg gray-bg background_section_1">
                        
                        <div class="row">
                            
                            <div class="col-sm-12">
                                
                                <!-- Owl Carousel -->
                                <div class="owl-carousel-container pet-adopt">
                                    
                                    <div class="owl-header">
                                        
                                        <h3 class="animate-offscroll">'.$blokbaslik.'</h3>
                                        
                                        <div class="carousel-arrows animate-offscroll">
                                            <span class="left-arrow"><i class="icons icon-left-dir"></i></span>
                                            <span class="right-arrow"><i class="icons icon-right-dir"></i></span>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="owl-carousel" data-max-items="4">
    ';
                    
    $sql = $db->query("SELECT * FROM videolar ORDER BY Id DESC LIMIT 8");
    foreach ($sql as $a){
    $baslik = $a["baslik"];
    $ayir = explode("https://www.youtube.com/watch?v=",$a['url']);
    $linki = $ayir[0];
    $kodu = $ayir[1];
    echo ' <!-- Owl Item -->
                                        <div>
                                            
                                            <!-- Blog Post -->
                                            <div class="pet-adopt-item media-item animate-offscroll">
                                                
                                <div class="pet-image gallery-item">
                                    <img class="img-thumbnail img-responsive" src="upload/galeri/' . $a["resim"] . '" width="250" height="153" alt="' . $baslik . '">
                                        <div class="media-hover">
                                            <div class="media-icons">
                                                <a href="https://www.youtube.com/watch?v=' . $kodu . '" data-group="jackbox-youtube" class="jackbox media-icon"><i class="icons icon-play"></i></a>
                                            </div>
                                        </div>
                                                </div>
                                                
                                                <div class="pet-desc">
                                                    
                                                    <h4 class="pet-name">		' . $baslik . '</h4>

                                                </div>
                                                
                                            </div>
                                            <!-- /Blog Post -->
                                            
                                        </div>
                                        <!-- /Owl Item -->
    ';	
    }
    echo '
                
                                    </div>
                                
                                </div>
                                <!-- /Owl Carousel -->

                                <div class="align-center">
                                    <a href="videolar-1.html" class="button big btn-style-2 button-arrow">TÃœM VÄ°DEOLARI GÃ–STER</a>
                                </div>

                            </div>

                        </div>

                    </section>
            <!-- /vÄ±deo bÄ±tÄ±s --> ';	
    }
    ?> 






            <div class="container">
                
                <!-- Section -->
                <section class="section full-width-bg gray-bg var2">
                    
                    <div class="row">
                    
    <?php
    $sql = $db->query("SELECT * FROM bloklar WHERE durum = '1' AND Id = '3' ORDER BY sira ASC");
    foreach ($sql as $b) {
    $blokbaslik = $b["baslik"];
    $sql2 = $db->query("SELECT * FROM bloklar WHERE Id = '4'");
    foreach ($sql2 as $b2);
    echo ' 
                <!-- /ETKINLIK BASLANGIC -->  
                <div class="col-lg-4 col-md-4">      
                    <!-- Upcoming Events -->
                            <div class="sidebar-box white animate-noscroll">
                                <h3>'.$blokbaslik.'</h3>
                                <ul class="upcoming-events">';							
    $sql = $db->query("SELECT * FROM etkinlikler ORDER BY Id DESC LIMIT 3", PDO::FETCH_ASSOC);
    foreach ($sql as $a) {
                                    $baslik = html_entity_decode($a["bilgibasligi"]);
                                    $baslik = strip_tags($baslik);
                                    $baslik = substr($baslik, 0, 55);
                                    $icerik = html_entity_decode($a["icerik"]);
                                    $icerik = strip_tags($icerik);
                                    $icerik = substr($icerik, 0, 100);                                
                                    $gun =  $a["gun"];
                                    $ay =  $a["ay"];
                                    $yil =  $a["yil"];
                                    $seolu = "etkinlikdetay-".seo($a["bilgibasligi"])."-$a[Id].html";
    echo ' <!-- Event -->
                                    <li>
                                        <div class="date">
                                            <span>
                                                <span class="day">'.$gun.' </span>
                                                <span class="month">'.$ay.' </span>
                                            </span>
                                        </div>
                                        
                                        <div class="event-content">
                                            <h6><a href="'.$seolu.'">'.$baslik.'</a></h6>
                                            <ul class="event-meta">
                                        <li><i class="icons icon-clock"></i> '.$icerik.'</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- /Event -->
    ';
    }
    echo '		
                                </ul>
                                <a href="etkinlikler-1.html" class="button transparent button-arrow">TÃœM DUYURULAR</a>
                            </div>
                            </div>    
                            <!-- /ETKINLIK BITIS -->  
    ';
    }
    ?> 
                            
    <?php                
    $sql = $db->query("SELECT * FROM bloklar WHERE durum = '1' AND Id = '4' ORDER BY sira ASC");
    foreach ($sql as $b) {
    $blokbaslik = $b["baslik"];
    $sql2 = $db->query("SELECT * FROM bloklar WHERE Id = '3'");
    foreach ($sql2 as $b2); 
    echo ' <!-- /S.S.S BASLANGIC -->        
                    <div class="col-lg-4 col-md-4 hidden-xs">      
                    <!-- Upcoming Events -->
                            <div class="sidebar-box white animate-noscroll">
                                <h3>'.$blokbaslik.'</h3>
                                
                                        <!-- Accordions -->
                            <ul class="accordions toggles">
    ';  
    $sql = $db->query("SELECT * FROM bilgiler ORDER BY sira ASC LIMIT 5", PDO::FETCH_ASSOC);
    foreach ($sql as $a) { 
    $icerik = html_entity_decode($a["icerik"]);
    $icerik = strip_tags($icerik);
    $icerik = substr($icerik, 0, 140);
    $baslik = html_entity_decode($a["bilgibasligi"]);
    $baslik = strip_tags($baslik);
    $baslik = substr($baslik, 0, 55);
    $seolu = "bilgi-".seo($a["bilgibasligi"])."-$a[Id].html";
    $soruid = "$a[Id]";			
    echo '<!-- Accordion -->
                                <li class="accordion">
                                    
                                    <div class="accordion-header">
                                        <div class="accordion-icon"></div>
                                        <h6>'.$baslik.'</h6>
                                        
                                    </div>
                                    
                                    <div class="accordion-content">
                                        <p> '.$icerik.'  <a href="'.$seolu.'">DevamÄ±nÄ± oku..</a></p>
                                    </div>
                                    
                                </li>
                                <!-- /Accordion -->
    ';
    }          
    echo '		
                            </ul>
                            <!-- /Accordions -->						
                    <a href="bilgiler-1.html" class="button transparent button-arrow">TÃœMÃœNÃœ GÃ–STER</a>

                                
                            </div>
                            </div>     
                    <!-- /S.S.S BITIS -->          
    ';
    } 
    ?>
                    
        <!-- /Anket BaslangÄ±c -->    
    <?php
    $sql = $db->query("SELECT * FROM bloklar WHERE durum = '1' AND Id ='12' ORDER BY sira ASC");
    foreach ($sql as $b) {
    $blokbaslik = $b["baslik"]; 
    ?>                   
    <div class="col-lg-4 col-md-4 hidden-xs">
        <div class="sidebar-box white animate-noscroll">
    <h3><?php echo $blokbaslik; ?></h3>
                                
    <?php  
    function getRealIpAddr()  
    {  
        if (!empty($_SERVER['HTTP_CLIENT_IP']))  
        {  
            $ip=$_SERVER['HTTP_CLIENT_IP'];  
        }  
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) //Proxy den baÄŸlanÄ±yorsa gerÃ§ek IP yi alÄ±r.
        
        {  
            $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];  
        }  
        else  
        {  
            $ip=$_SERVER['REMOTE_ADDR'];  
        }  
        return $ip;  
    }            
    $sql = $db->query("SELECT * FROM anketsoru WHERE durum = '1' ORDER BY Id DESC LIMIT 1");
    $a = $sql->fetch(PDO::FETCH_ASSOC);
    $anketsoru = html_entity_decode($a["soru"]); 
    $anketid = html_entity_decode($a["Id"]); 
    echo ' <b>' . $anketsoru . ' </b><hr />
    <form action="" method="post">
    <div class="right-content-box section-index-box">
    <ul class="list-group text-left">';
    $i = 1; 
    $sqlcvp = $db->prepare("SELECT * FROM anketcevap WHERE anketid = ? ORDER BY Id ASC");
    $sqlcvp->execute(array(
    $a["Id"]
    ));
    foreach ($sqlcvp->fetchALL(PDO::FETCH_ASSOC) as $cvp) {
    $cevap = $cvp["cevap"];
    $cevapid = $cvp["Id"];
    echo '
                                <div class="radio">
                                
                                        <input type="radio" name="cevapid" id="radio-'.$i.'" value="'.$cevapid.'">
                                            <label for="radio-'.$i.'">'.$cevap.' 
                                        </label>
                                </div>
                        
    ';
    $i++;
    }
    echo '</ul>
                        <div class="poll-result">
                        <input type="hidden" name="soruid" value="'.$anketid.'">
                        <input type="hidden" name="puan" value="1">
                        <input type="hidden" name="ipkontrol" value="'.getRealIpAddr().'">
                            <input type="submit" class="button btn-success btn-sm" name="ara" value="Oy ver">
                            <button type="button" class="button btn-primary"  data-toggle="modal" data-target="#'.$anketid.'">
                                SonuÃ§lar</button>
                                    <a href="anketarsiv.html" class="button donate btn-sm">
                                Anket ArÅŸivi iÃ§in tÄ±klayÄ±n</a>
                        </div>						
                    </div>
                    <div class=" "></div>
                    </form>
                    
                
                
                </div>
                <!-- calendar end -->
    ';
    ?>   
    </div></div>
    <?php
    }
    ?>
        <!-- /Anket bÄ±tÄ±s -->
                    
                    </div>

                </section>
                    
    <?php
    $sql = $db->query("SELECT * FROM bloklar WHERE durum = '1' AND Id ='5' ORDER BY sira ASC");
    foreach ($sql as $b) {
    $blokbaslik = $b["baslik"];
    echo '          	

        <!-- /RESÄ°M BASLANGIC -->
    <section class="section full-width-bg">	                  
    <div class="row">
                        
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            
                            <!-- Owl Carousel -->
                            <div class="owl-carousel-container margin-bottom">
                                
                                <div class="owl-header">
                                    
                                    <h3 class="animate-NOscroll">'.$blokbaslik.'</h3>
                                    
                                    <div class="carousel-arrows animate-noscroll">
                                        <span class="left-arrow"><i class="icons icon-left-dir"></i></span>
                                        <span class="right-arrow"><i class="icons icon-right-dir"></i></span>
                                    </div>
                                    
                                </div>
                                
                                <div class="owl-carousel" data-max-items="4">
    ';
                        $sql = $db->query("SELECT * FROM galeri  ORDER BY Id DESC LIMIT 12", PDO::FETCH_ASSOC);
                        foreach ($sql as $a){
                        if (empty($a["resimadi"])) {
                        $resim = "upload/galeri/resimyok.png";
                            } else {
                            $resim = $a["resimadi"];
                        }
                        $sql2 = $db->prepare("SELECT * FROM album WHERE Id = ?");
                        $sql2->execute(array(
                        $a["album"]
                        ));
                        $b = $sql2->fetch(PDO::FETCH_ASSOC);
                        $album = $b["albumadi"];
                        echo '<!-- Owl Item -->
                                    <div>
                        
                                <div class="media-item gallery-item no-margin-bottom">
                                        <img src="upload/galeri/' . $a["resimadi"] . '" width="200" height="150" alt="'.$album.'">
                                        <div class="media-hover">
                                            <div class="media-icons">
                                                <a href="upload/galeri/' . $a["resimadi"] . '" data-group="media-jackbox" class="jackbox media-icon"><i class="icons icon-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
            
                                    </div>
                                    <!-- /Owl Item -->
        ';	
    } 
    echo '</div>
                            
                            </div>
                            <!-- /Owl Carousel -->						
                        </div>

                    </div>

                </section>
        <!-- /Resim Bitis -->
    ';	
    }
    ?> 

    <?php
    $sql = $db->query("SELECT * FROM bloklar WHERE durum = '1' AND Id ='8' ORDER BY sira ASC");
    foreach ($sql as $b) {
    $blokbaslik = $b["baslik"];
    echo '<!-- Section -->
            <section class="section gray-bg var2 space-bottom-none">

                <div class="container">

                    <div class="row">
                    
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 animate-offscroll">
                            <h3>' . $blokbaslik. '</h3>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-12 animate-offscroll">
    ';
    $sql = $db->query("SELECT * FROM yorumlar WHERE onay = '1' ORDER BY yId DESC LIMIT 1", PDO::FETCH_ASSOC);
    foreach ($sql as $a) {
            $mesaj = html_entity_decode($a["mesaj"]);
            $tarih =  $a["tarih"];
            $adsoyad =  $a["adsoyad"];
    echo ' 
                            <div class="testimonial style-2 animate-offscroll">

                                <div class="testimonial-img">
                                    <img src="style/img/yok.png" alt="'.$adsoyad.'">
                                </div>
                                
                                <div class="testimonail-desc">
                                    
                                    <div class="testimonial-content">
        <p>"'.$mesaj.'"</p>
                                    </div>
                                    
                                    <div class="testimonial-author">
                                        <div class="author-meta">
                                            <span class="name">'.$adsoyad.'</span>
                                                        <span class="location">'.$tarih.'</span>
                                        </div>
                                    </div>

                                </div>
                                
                            </div>
    ';	
    }
    echo '

                        </div>
                        
                        
                        <div class="col-lg-6 col-md-6 col-sm-12 animate-offscroll">
                            
                            <!-- Owl Carousel -->
                            <div class="owl-carousel-container testimonial-carousel style-2 animate-offscroll">

                                <div class="owl-header">
                                    
                                    <div class="carousel-arrows">
                                        <span class="left-arrow"><i class="icons icon-left-dir"></i></span>
                                        <span class="right-arrow"><i class="icons icon-right-dir"></i></span>
                                    </div>
                                    
                                </div>
                                
                                <div class="owl-carousel" data-max-items="1">
    ';
    $sql = $db->query("SELECT * FROM yorumlar WHERE onay = '1' ORDER BY yId DESC LIMIT 5 OFFSET 1", PDO::FETCH_ASSOC);
    foreach ($sql as $a) {
            $mesaj = html_entity_decode($a["mesaj"]);
            $tarih =  $a["tarih"];
            $adsoyad =  $a["adsoyad"];
    echo '<!-- Owl Item -->
                                    <div>
                                        
                                        <div class="testimonial style-2 animate-offscroll">

                                            <div class="testimonial-img">
                                                <img src="style/img/yok.png" alt="'.$adsoyad.'">
                                            </div>
                                            
                                            <div class="testimonail-desc">
                                                
                                                <div class="testimonial-content">
                                                    <p>"'.$mesaj.'"</p>
                                                </div>
                                                
                                                <div class="testimonial-author">
                                                    <div class="author-meta">
                                                        <span class="name">'.$adsoyad.'</span>
                                                        <span class="location">'.$tarih.'</span>
                                                    </div>
                                                </div>

                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    <!-- /Owl Item -->
    ';	
    }
    echo '
                                </div>
                                
                            </div>
                            <!-- /Owl Carousel -->						
                        </div>
                        
                        
                        
                        </div>
                    </div>
        
            </section>  ';	
    }
    ?>        
                    
    <?php
    $sql = $db->query("SELECT * FROM bloklar WHERE durum = '1' AND Id ='7' ORDER BY sira ASC");
    foreach ($sql as $b) {
    $blokbaslik = $b["baslik"];
    echo ' <section class="section2 full-width-bg">
                    
                    <div class="row">
                        
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            
                            <!-- Owl Carousel -->
                            <div class="owl-carousel-container no-margin-bottom">
                                
                                <div class="owl-header">
                                    
                                    <h3 class="animate-offscroll">' . $blokbaslik. '</h3>
                                    
                                    <div class="carousel-arrows animate-offscroll">
                                        <span class="left-arrow"><i class="icons icon-left-dir"></i></span>
                                        <span class="right-arrow"><i class="icons icon-right-dir"></i></span>
                                    </div>
                                    
                                </div>
                                
                                <div class="owl-carousel" data-max-items="6">
    ';
    $sql = $db->query("SELECT * FROM referanslar ORDER BY id DESC", PDO::FETCH_ASSOC);
    foreach ($sql as $a) {	
    $baslik = $a["baslik"];
    $link = $a["link"];				
    $resim = $a["manset"];
    echo '<!-- Owl Item -->
                                    <div>
                                        
                                        <!-- Brand -->
                                        <div class="animate-offscroll">
                                            
                                            <div class="post-image">
                                    <a href="' . $link . '"><img src="upload/galeri/' . $resim . '" alt="' . $baslik . '"></a>
                                            </div>
                                        
                                        </div>
                                        <!-- /Blog Post -->
                                        
                                    </div>
                                    <!-- /Owl Item -->
    ';	
    }
    echo '</div>
                            
                            </div>
                            <!-- /Owl Carousel -->						
                        </div>

                    </div>

                </section>';	
    }
    ?>

                


            <div class="container">
                
                <!-- Section -->
                <section class="section full-width-bg blue-bg">
                    
                    <div class="row">
                        
                        <div class="col-sm-9">
                            
                            <form action="sistem/posta.php" method="get" id="newsletter2">
                                    
                                <div class="newsletter-form">

                                    <div class="newsletter-title">
                                        <h5><strong>E-BÃœLTEN </strong> <br> KayÄ±t Formu</h5>
                                    </div>
                                
                                    <div class="newsletter-email">
                                    <font color="#dbc507"><b><div id="sonuc"></div></b></font>
                            <font color="#db0720"><b><div id="sonuc2"></div></b></font>
                                        <input type="text"  name="isim" placeholder="AdÄ±nÄ±z SoyadÄ±nÄ±z">
                                    </div>
                                    
                                    <div class="newsletter-zip">

                                        <input type="text" name="eposta" placeholder="E-Posta Adresiniz">
                                    </div>
                                        <input  type="hidden" name="sonuc" id="sonuc" value="TeÅŸekkÃ¼rler KaydÄ±nÄ±z AlÄ±nmÄ±ÅŸtÄ±r.">
                                        <input  type="hidden" name="sonuc2" id="sonuc2" value="Daha Ã–nce KayÄ±t OlmuÅŸsunuz">
                                    <div class="newsletter-submit">
                                        <input type="submit" value="KAYIT OL">
                                    </div>
                                    </div>								

                                </div>
                                
                            </form>

                        </div> 
                        
                    </div>

                </section>

            </div>