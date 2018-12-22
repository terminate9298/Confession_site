<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!-- SITE TITLE -->
	<title>IIITM Confessions</title>
<!--

Blaster Template

http://www.templatemo.com/tm-472-blaster

-->
	<link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
	
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- STYLESHEET CSS FILES -->
	<link rel="stylesheet" href="<?=THEME?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=THEME?>css/patterns.css">
	<link rel="stylesheet" href="<?=THEME?>css/animate.min.css">
	<link rel="stylesheet" href="<?=THEME?>css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?=THEME?>css/nivo-lightbox.css">
	<link rel="stylesheet" href="<?=THEME?>css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="<?=THEME?>css/style.css">
	<link rel="stylesheet" href="<?=THEME?>css/kaus.css">
	<link rel="stylesheet" href="<?=THEME?>css/main.css">
	<!-- <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"> 
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> -->
  <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display|Roboto|Thasadith" rel="stylesheet">  
	 <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Pacifico|Satisfy" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Gamja+Flower|Indie+Flower" rel="stylesheet"> 
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- navigation section -->
<section class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand"><span class="bold pacifico" >Confessor	</span></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="smoothScroll pacifico" style="letter-spacing: .5px;"   data-toggle="modal" data-target="#sample01" id="id_03">Submit Confession</a></li>
				<li><a href="#" class="smoothScroll pacifico" style="letter-spacing: .5px;">Chat page</a></li>
			</ul>
		</div>
		<!-- <div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#home" class="smoothScroll">HOME</a></li>
				<li><a href="#about" class="smoothScroll">ABOUT</a></li>
				<li><a href="#portfolio" class="smoothScroll">PORTFOLIO</a></li>
				<li><a href="#team" class="smoothScroll">TEAM</a></li>
				<li><a href="#contact" class="smoothScroll">CONTACT</a></li>
			</ul>
		</div> -->
	</div>
</section>


<div class="modal modal-danger fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="sample01">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<!-- <div class="modal-header">
				 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				 <h4 class="modal-title" id="myModalLabel">Modal title</h4>
		  	</div> -->
		  <div class="modal-body" style="padding:0px;">
				 <div class="row" id="id_02">
				 </div>
				 
		  </div>
		  <!-- <div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      <button type="button" class="btn btn-primary">Save changes</button>
 	      </div> -->
	   </div>
	</div>
</div>
<!-- <div id="portfolio" class="header-kaus"> -->
  <div class="header-kaus">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
						<h1 class="heading bold pacifico">Confessions</h1>
						<h3 class="subheading pacifico" style="font-size: 25px;">Official Page for Submitting your Confessions for ABV-IIITM Gwalior</h3>
					
				
				<div class="iso-section">
					<ul class="filter-wrapper clearfix">
                   		 <li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
                   		 <li><a href="#" class="opc-main-bg" data-filter=".year1">&#8544; Year</a></li>
                   		 <li><a href="#" class="opc-main-bg" data-filter=".year2">	&#8545; Year</a></li>
                    	 <li><a href="#" class="opc-main-bg" data-filter=".year3">&#8546; Year</a></li>
                    	 <li><a href="#" class="opc-main-bg" data-filter=".year4">	&#8547; Year</a></li>
                       <li><a href="#" class="opc-main-bg" data-filter=".year5">&#8548; Year</a></li>
                       <li><a href="#" class="opc-main-bg" data-filter=".year6">M.Tech/MBA</a></li>
                       <li><a href="#" class="opc-main-bg" data-filter=".year7">Other</a></li>
               		</ul>
               		<div class="iso-box-section wow fadeIn side-padding" data-wow-delay="0.9s">
               			<div class="iso-box-wrapper col4-iso-box">
                      
                      <?php $var=count($confessions);foreach ($confessions as $conn){ ?>
               				 <div class="iso-box <?php echo "year".$conn['year']; ?> col-xs-4 click_function" style="padding-left: 0px;" id="<?php echo $conn['conn_id']; ?>" data-toggle="modal" data-target="#sample01">
               				 	<div class="sample<?php echo $conn['feeling'];?> outer-photo" style="border-radius: 5px;">
               				 		
                          <div class="sample outer-photo" >
                          <div class="inner-div">
               				 			<h2 class="confession-heading-number">#<?php echo $var--;?></h2>
               				 			<h5 class="confession-heading-body"><?php echo $conn['confession'];?></h5>
               				 		</div>
               				 	</div>
                       </div>
               				 </div>
                      <?php } ?>
               			</div>
               		</div>

				</div>
			</div>
		</div>
	</div>
</div>		  
<!-- JAVASCRIPT JS FILES -->	
<script src="<?=THEME?>js/jquery.js"></script>
<script src="<?=THEME?>js/bootstrap.min.js"></script>
<script src="<?=THEME?>js/smoothscroll.js"></script>
<script src="<?=THEME?>js/isotope.js"></script>
<script src="<?=THEME?>js/imagesloaded.min.js"></script>
<script src="<?=THEME?>js/nivo-lightbox.min.js"></script>
<script src="<?=THEME?>js/wow.min.js"></script>
<script src="<?=THEME?>js/custom.js"></script>
<script>
	$(function(){
	// $('#id_01').on('click', function(e){
 //        e.preventDefault();
 //        var page_url='<?=CTRL?>Confess/page_content';
 //        $('#id_02').load(page_url);
 //    });
 // $('#<?php echo $testfy;?>').trigger('click');
 //  $('#<?php echo $testfy;?>').function(){
 //  var page_url = '<?=CTRL?>Confess/page_content/'.concat(<?php echo $testfy;?>);
 //         console.log(page_url);
 //         $('#id_02').load(page_url);
 // }

    	$('#id_03').on('click', function(e){
            e.preventDefault();
            var page_url='<?=CTRL?>Confess/page_submit';
            $('#id_02').load(page_url);
        });
  
     $('.click_function').click(function(){
         var id = $(this).attr('id');
         var page_url = '<?=CTRL?>Confess/page_content/'.concat(id);
         
         $('#id_02').load(page_url);
   });
     
      // var id = <?php echo $testfy;?>;
      //    var page_url = '<?=CTRL?>Confess/page_content/'.concat(id);
         
      //    $('#id_02').load(page_url);
     

	})
    
</script>
<script>
  $(document).ready(function(){
    $("#<?php echo $testfy;?>").click(); 
});
</script>
<script>
  // function submitComment(){
    // var username1   =  $("#id_10").val();
    // var comment1   =  $("#id_11").val();
    // var conn_id1   =  $("#id_12").val();
    // console.log('working here');
    // $.post('<?=CTRL?>Confess/new_comment">',{
    //   'username': username1,
    //   'comment' : comment1,
    //   'conn_id' : conn_id1
    // },function(data){
    //   console.log(data);
    // });
    // $(document).ready(function(){
    // $('#theForm').submit(function(e){

    //  e.preventDefault();  
    //  var formData = $(this).serialize();
    // alert(formData);
    //  var username   =  $("#id_10").val();
    //  var comment   =  $("#id_11").val();
    //  var conn_id   =  $("#id_12").val();
    //  console.log(formData);
    //  var data = "{'username':'"+username+"','comment':'"+comment+"','conn_id':'"+conn_id+"'}";
    // console.log('console is working');
    
    // console.log(data);
    // $.ajax({
    //   type  :   'POST',
    //   url   :   '<?=CTRL?>Confess/new_comment">',
    //   data  :  formData,
    //   // dataType:"json",
    //   // cache : false,
    //   success: function(data){
    //     console.log('working success');
    //   }
    //  })
    // .done(function(data){
      
    //   console.log('working');
    //   console.log(data);
    // })
    // .fail(function(data){
      
    //   console.log('not working');
    //   console.log(data);
    //   $("#id_14").html(data);
    // });
    //  e.preventDefault();  
    // });
    // })
      // success:function(result){
      //   console.log('working here');
      // },
      // error: function(result){
      //   console.log(result);

      //   console.log('not working here');
       
    
    // .done(function(data){
    //   // console.log(data);
    //  console.log('thsi is not working ');
    // });
 //}
</script>
</body>
</html>