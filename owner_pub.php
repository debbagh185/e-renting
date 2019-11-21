 <?php

                    require("config.php");

                    $id=$_GET['id'];
                    $v_dup='';
                    $v_app='';
                    $sql="SELECT h.id_house as id_h, MAX(h.category) as c, MAX(h.title) as t
                          , MAX(h.time) as tim , MAX(h.describe) as d , MAX(h.price) as p , MAX(h.id_owner) as id_o
                          , MAX(i.nom_image) as img1 FROM House h , image i 
                          WHERE i.id_house = h.id_house 
                          AND h.id_owner='$id'
                          AND h.flag = 1
                          GROUP BY h.id_house" ;

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
                                            href="<?php echo 'ads-details.php?id='.$h->id_house; ?>"><img class="thumbnail no-margin" src="images/<?php echo( $h->img1); ?>" alt="img"></a>
                                    </div>
                                </div>
                                <!--/.photobox-->
                                <div class="col-sm-5 add-desc-box">
                                    <div class="ads-details">
                                        <h5 class="add-title"><a href="<?php echo 'ads-details.php?id='.$h->id_house; ?>"><?php echo($h->title); ?></a></h5>
                                        <span class="info-row">  <span class="date"><i
                                                class=" icon-clock"> </i> <?php echo($h->time); ?> </span> - <span class="category"><?php echo($h->category); ?> </span> </span></div>
                                </div>
                                <!--/.add-desc-box-->
                                <div class="col-md-3 text-right  price-box">
                                    <h2 class="item-price"><?php echo($h->price); ?> Dh</h2>
                                    </div>
                                <div class="col-md-2 text-right  price-box">
                                   <button type="button" data-toggle="modal" data-target="#formulaire" class="btn btn-success"><i class="fas fa-edit"></i> </button>
                                
                                   <button  type="button" data-toggle="modal" data-target="#SUPP" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                </div>
                                <!--/.add-desc-box-->
                            </div>
                            </div>

                            <div class="modal fade" id="SUPP" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Delete Publication</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <p>Are you sure that you want to delete this publication.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <input onclick="deletePub(<?php echo $h->id_house;?>)" data-dismiss="modal" type="submit"  class="btn btn-primary" value="Delete">
                                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="modal fade" id="formulaire" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLongTitle"> <i class="icon-docs"></i>Modify your publication</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

            <form class="form-horizontal" method="POST" action="owner-post.php" enctype="multipart/form-data"> 
                <div class="modal-body">
                  <div class="inner-box category-content">
                   

                        <div class="row">
                            <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label  class="col-sm-3 col-form-label">Category</label>
                                        <div class="col-sm-8">
                                            <select name="category-app" id="category-group" class="form-control">
                                                      <?php if($h->category == "Duplex") $v_dup='selected';
                                                            else $v_app='selected';
                                                       ?>
                                                <option value="Duplex" <?php echo $v_dup; ?> > Duplex</option>
                                                <option value="Appartment" <?php echo $v_app; ?> > Appartment</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label  class="col-sm-3 col-form-label">Ad title</label>
                                        <div class="col-sm-8">
                                            <input name="title" type="text" class="form-control" id="Adtitle" placeholder="Ad title" required value="<?php echo($h->title); ?>">
                                            
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label  class="col-sm-3 col-form-label">Describe ad</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="Addescribe" rows="3" id="describe"><?php echo $h->describe; ?></textarea>

                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label  class="col-sm-3 col-form-label">Price</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <span class="input-group-addon">dh</span>
                                                <input id="prix" name="price" type="tel" class="form-control" required="" value="<?php echo($h->price); ?>">
                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                  
                  </div>
                  <div class="modal-footer"> 
                  <input onclick="updatePub(<?php echo $h->id_house;?>)" type="button" id="save" class="btn btn-primary" value="Modify" data-dismiss="modal">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 
                </div>
              </form>
            </div>
           </div>
          </div>

                            <?php

                                         }
                                     }
                                             
                                      
                                 oci_close($con);
                                


                          ?>