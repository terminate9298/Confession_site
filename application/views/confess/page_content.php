
<div class="col-md-8 col-xs-8 modal-main">
  <div class="feel5 modal-pattern" style="">
    <div class="text-center">
      <h2 style="" class="modal-heading" id="id_14"><?php echo $confession[0]['username'];?>
      </h2>
      <h5 style="" class="modal-heading-body"><?php echo $confession[0]['confession']?>
      </h5>
    </div>     
  </div>
</div>  
<div class="col-md-4 col-xs-4 modal-comments">
  <div class="modal-comm-inner" style="">
     <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
          </button>
         
               <img src="https://img.icons8.com/color/22/000000/heart-with-arrow.png">
               <h4 class="modal-title modal-comments-title"><? echo $confession[0]['feeling'];?></h4>
          
          
     </div>
     <span style="">
        <?php foreach ($comments as $comm){?>
          <div class="modal-comments-body">
           <h5 class="modal-comments-body-heading"> <?php echo $comm['username'];?>
           </h5>
           <span class="modal-comments-body-other"> <?php echo $comm['comments']?>
           </span>
         </div>
       <?php } ?>
     </span>
      
  </div>
</div>
<div class="col-xs-12">
     <div class="form-content comments-main">
      <form method="post" action="<?=CTRL?>Confess/new_comment" id="theForm"> 
        <!-- <form id="theForm" method="POST"> -->
          <div class="row comments-main-body">
               <div class="col-xs-10">
                    <div class="form-group comments-input-text" >
                         <input type="text" class="form-control comments-input-text-in" placeholder="Name / Hint / Anything" name="username" maxlength="15" id="id_10" />
                    </div>
                    <div class="form-group comments-input-text">
                         <input type="text" class="form-control comments-input-text-in" placeholder="Comments" name="comment" maxlength="100" id="id_11" />
                    </div>
                    <input type="hidden" name="conn_id" value="<?php echo $confession[0]['conn_id'] ?>" id="id_12"/>
               </div>
               <div class="col-xs-2 comments-button">
                    <button type="submit" value="submit" name="submit" class="btnSubmit comments-button-in">
                      <img src="https://img.icons8.com/color/40/000000/paper-plane.png">
                    </button>
               </div>
          </div>
          </form>
     </div>
</div>