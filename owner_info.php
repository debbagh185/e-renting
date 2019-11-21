 <?php

                    require("config.php");

                    $id=$_GET['id'];

                    $sqll="SELECT nom as n, prenom as p, bio as b, phone as ph, email as em FROM owner 
                            WHERE id_owner = $id " ;

                    $result1=oci_parse($con,$sqll);

                    oci_execute($result1);


                           
                            while(( $roww=oci_fetch_assoc($result1)) != false ){

                              

                              if(!empty($roww['N'])){

                            
                               $nom=$roww['N'];
                               $prenom=$roww['P'];
                               $bio=$roww['B'];
                               $phone=$roww['PH'];
                               $email=$roww['EM'];
                              
                              ?>

                            <div  class="col-sm-6">
                            <div class="seller-info seller-profile">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="seller-profile-img">
                                             
                                        </div>
                                    </div>
                                        <div class="col-md-9">
                                            <h3 class="no-margin no-padding link-color uppercase "> <?php echo $nom.' '.$prenom; ?></h3>

                                            <div class="text-muted">
                                                99.8% positive Feedback
                                            </div>
                                            <div class="user-ads-action">
                                                                                            </div>

                                          
                                    </div>
                                </div>

                            </div>


                        </div>
                        <div class="col-sm-5">

                            <div class="seller-contact-info">

                                <h3 class="no-margin uppercase color-danger"> Contact Information </h3>

                                <dl class="dl-horizontal">

                                    <dt>About:</dt>
                                    <dd class="contact-sensitive"> <?php echo $bio; ?>
                                    </dd>
                                    <dt>Telephone:</dt>
                                    <dd class="contact-sensitive"><?php echo '0'.$phone; ?></dd>

                                    <dt>Email:</dt>
                                    <dd class="contact-sensitive"> <?php echo $email; ?></dd>

                                </dl>


                            </div>
                            
                        </div>
                        <div class="col-sm-1">
                        <button  type="button" data-toggle="modal"
                                  data-target="#profile" class="btn btn-success"><i class="fas fa-edit"></i> </button>
                     </div>

                     <div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                 <form id="f" class="form-horizontal"> 
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLongTitle"><i class="icon-user-add"></i> Edit your account</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <div style="box-shadow: 0 1px 3px 0 #ffffff;" class="inner-box category-content">
                        <div class="row">
                            <div class="col-sm-12">
                                        <!-- Text input-->
                                        <div class="form-group  row ">
                                            <label class="col-md-4 control-label">First Name</label>

                                            <div class="col-md-6">
                                                <input id="f_name" placeholder="First Name" value = <?php echo $prenom; ?> class="form-control input-md"
                                                       required type="text">
                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group  row">
                                            <label class="col-md-4 control-label">Last Name</label>

                                            <div class="col-md-6">
                                                <input id="l_name" placeholder="Last Name" value = <?php echo $nom; ?>
                                                required class="form-control input-md" type="text">
                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group  row">
                                            <label class="col-md-4 control-label">Phone</label>

                                            <div class="col-md-6">
                                                <input id="phone" placeholder="0*********" value = <?php echo $phone; ?>
                                                required class="form-control input-md" type="tel" maxlength="10" pattern="[0-9]{10}">
                                            </div>
                                        </div>

                                        <!-- Textarea -->
                                        <div class="form-group row">
                                            <label class="col-md-4 control-label" for="textarea">About you</label>

                                            <div class="col-md-6">
                                                <textarea class="form-control" id="textarea" name="about"><?php echo $bio; ?> </textarea>
                                            </div>
                                        </div>
                                                                    
                         </div>
                        </div>
                    </div>
                  </div>
                  <div class="modal-footer"> 
                  <input onclick="updateOwner()" type="button" id="save" class="btn btn-primary" data-dismiss="modal" value="Modify">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 
                </div>
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