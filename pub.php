<?php

                    require("config.php");

                    $sort = $_GET['sort'];
                

                    $sql="SELECT h.id_house as id_h, MAX(h.category) as c, MAX(h.title) as t
                          , MAX(h.time) as tim , MAX(h.describe) as d , MAX(h.price) as p , MAX(h.id_owner) as id_o
                          , MAX(i.nom_image) as img1 FROM House h , image i 
                          WHERE i.id_house = h.id_house 
                          AND h.flag = 1
                          GROUP BY h.id_house
                          $sort

                          " ;

                    $result=oci_parse($con,$sql);

                    oci_execute($result);

                    
                            $h=new House;
                           
                            while(( $row=oci_fetch_assoc($result)) != false ){

                              

                              if(!empty($row['ID_H'])){

                            
                               $h->id_house=$row['ID_H'];
                               $h->id_owner=$row['ID_O'];
                               $h->category=$row['C'];
                               $h->title=$row['T'];
                               $h->time=$row['TIM'];
                               $h->price=$row['P'];
                               $h->describe=$row['D'];
                               $h->img1=$row['IMG1'];

                              
                              ?>

                              <div id="item" class="item-list"><div class="row">
                    <div class="col-md-2 no-padding photobox">
                        <div class="add-image"><span class="photo-count"><i class="fa fa-camera"></i> 5 </span> <a
                                href="<?php echo 'ads-details.php?id='.$h->id_house; ?>"><img class="thumbnail no-margin" src="images/<?php echo $h->img1;?>" alt="img"></a>
                        </div>
                    </div>
                    <!--/.photobox-->
                    <div class="col-sm-7 add-desc-box">
                        <div class="ads-details">
                            <h5 class="add-title"><a href="<?php echo 'ads-details.php?id='.$h->id_house; ?>"><?php echo($h->title); ?></a></h5>
                            <span class="info-row">  <span class="date"><i
                                    class=" icon-clock"> </i> <?php echo($h->time); ?> </span> - <span class="category"><?php echo($h->category); ?> </span> </span></div>
                    </div>
                    <!--/.add-desc-box-->
                    <div class="col-md-3 text-right  price-box">
                        <h2 class="item-price"><?php echo($h->price); ?> Dh</h2>
                        </div>
                    <!--/.add-desc-box-->
                </div>
                </div>

                <?php

                            
                             }    
                        }     
                    

                    oci_close($con);
                    


              ?>
