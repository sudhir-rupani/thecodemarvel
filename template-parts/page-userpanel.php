<?php
/**
  Template Name: User Account
 * @package thecodemarvel
 */
get_header('useraccount');
$post_args = array(
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'post_type' => 'page',
    'meta_key' => 'is-service-page',
    'meta_value' => 'Yes'
);

$post_query = new WP_Query($post_args);
$loginUser = wp_get_current_user()->data;

$formIds =array();
if(!is_user_logged_in())
{
	wp_redirect(get_site_url());
exit;
header('Location: get_site_url()');
}

$post_args1 = array(
    'post_type' => 'orderlist',
    'author__in'=> array($loginUser->ID),
    'post_status' => array('publish', 'pending', 'draft') ,
     'orderby' => 'date',
    'order' => 'DESC',
);

 $theQuery = new WP_Query($post_args1);  


?>

<!-- Main sidebar -->
<div class="container-fluid">
	<div class="row">
		<div class="col-3">
<div id="sidebar-main" class="sidebar sidebar-default sidebar-separate sidebar-fixed">
	<div class="sidebar-content">
		<div class="sidebar-category sidebar-default">
			<div class="sidebar-user">
				<div class="category-content">
					<h6><?php echo $loginUser->display_name ?></h6>
					<small>User</small>
				</div>
			</div>
		</div>
		<!-- /Sidebar Category -->
		<div class="sidebar-category sidebar-default">
			<div class="category-content">
				<ul id="fruits-nav" class="nav flex-column">
					<li class="nav-item">
						<a href="#services-list" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="services-list">
							<i class="bx bx-receipt" aria-hidden="true"></i>
							Service
						</a>
						<ul aria-expanded="false" id="services-list" class="flex-column collapse">

						 <?php
				            if ($post_query->have_posts()):
				                while ($post_query->have_posts()) : $post_query->the_post();
				                	$formId = get_post_meta($post->ID,'enter-form-id',true);
				                	if($formId){
				                		array_push($formIds,$formId);	
				                    ?>
				                    <li class="nav-item">
										<a href="#graphicsForm" class="nav-link  sub-menu"  idOfContent="form-id-<?php echo $formId ;?>" role="button" onclick="showStuff(this)"  >
											<i class="bx bx-chevron-left" aria-hidden="true"></i>
											<?php echo $post->post_title; ?>
										</a>
									</li>
								 
			                    <?php
			                }
			                endwhile;
			            endif;
			             wp_reset_postdata();
		            ?>
						</ul>
					</li>
						<li class="nav-item">
						<a href="#" idOfContent="history" onclick="showStuff(this)" class="nav-link">
							<i class="bx bx-fingerprint" aria-hidden="true"></i>
							History
						</a>
					</li>
					</li>
					<li class="nav-item">
						<a href="#"  class="nav-link  sub-menu"  role="button" idOfContent="pricing" onclick="showStuff(this)"  >
							<i class="bx bx-cube-alt" aria-hidden="true"></i>
							Packeges
						</a>
					</li>
				</ul>
				<!-- /Nav -->
			</div>
			<!-- /Category Content -->
		</div>
		<!-- /Sidebar Category -->
	</div>
</div>
</div>
<!-- /main sidebar -->
<div class="col-9 mb-3">
	<div class="row clearfix">
		<div class="col-md-12 justify-content-center" >	
<?php 
// if ($theQuery->have_posts()):
//     while ($theQuery->have_posts()) : $theQuery->the_post();
	foreach ($formIds as $formId) {
$postData = get_post($formId);
?>
<section  id="<?php echo 'form-id-'.$postData->ID ?>" class=" form tabContent ">
      <div class="container">
      <div class="section-title">
          <h2  class=""><?php echo $postData->post_title; ?></h2>          
      </div>
	<?php
	$post_name = $postData->post_name;
	echo do_shortcode("[fep form_name=$post_name]");
	?>
 	</div>
</section>
<?php   
	}
  	?>
<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing tabContent" >
    <div class="container">

        <div class="section-title">
            <h2>Pricing</h2>
            <h5>Choose the hours you need. Access all services. Pay one flat rate.</h5>
        </div>

        <div class="row justify-content-center">

            <div class="col-lg-3 col-md-6">
                <div class="box">
                    <h3>Starter</h3>
                    <h4><sup>$</sup>99</h4>
                    <ul>
                        <li><h5>5 Hours</h5></li>
                        <li>Virtual Support</li>
                        <li>Graphic Design</li>
                        <li class="">Staffing </li>
                        <li class="na">Website and Mobile App Development</li>
                    </ul>
                    <div class="btn-wrap">                        
                        <a href="#" class="<?php echo (!$loginUser)?'xoo-el-action-sc xoo-el-login-tgr':'aaaa'?> btn-buy">Buy Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-4 mt-md-0" >
                <div class="box ">
                    <span class="advanced">Popular</span>
                    <h3>Premium</h3>
                    <h4><sup>$</sup>199<span></span></h4>
                    <ul>
                        <li><h5>15 Hours</h5></li>
                        <li>Virtual Support</li>
                        <li>Graphic Design</li>
                        <li class="">Staffing </li>
                        <li class="">Website and Mobile App Development</li>
                    </ul>
                    <div class="btn-wrap">                        
                        <a href="#" class="<?php echo (!$loginUser)?'xoo-el-action-sc xoo-el-login-tgr':'aaaa'?> btn-buy">Buy Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" >
                <div class="box">
                    <h3>Super Premium</h3>
                    <h4><sup>$</sup>290<span></span></h4>
                    <ul>
                        <li><h5>35 Hours</h5></li>
                        <li>Virtual Support</li>
                        <li>Graphic Design</li>
                        <li class="">Staffing </li>
                        <li class="">Website and Mobile App Development</li>
                    </ul>
                    <div class="btn-wrap">                        
                        <a href="#" class="<?php echo (!$loginUser)?'xoo-el-action-sc xoo-el-login-tgr':'aaaa'?> btn-buy">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section id="history" class="pricing tabContent" >
    <div class="container">

        <div class="section-title">
            <h2>Your History</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-9">
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th>Form Number</th>
			      <th> Title </th>
			      <th>Status</th>
			      <th>Submited Date</th>
			      <th>Completed Date</th>
			    </tr>
			  </thead>
			  <tbody>
            	 <?php
	            if ($theQuery->have_posts()):
	                while ($theQuery->have_posts()) : $theQuery->the_post();
	                	$statusP= $post->post_status;
	                	if($statusP =='draft'){
	                	$statusP= 'Todo';	}
	                    ?>
	                     <tr>						   
					      <td><?php echo $post->ID; ?></td>
					      <td><?php echo $post->post_title; ?></td>
					      <td><?php echo $statusP; ?></td>
					      <td><?php echo get_the_date( 'j - F - Y' ) ?></td>
					   	 <td></td>
					   	 </tr>                

                    <?php
	                
	                endwhile;
	            endif;
	             wp_reset_postdata();
	        ?>
	        </tbody>
		</table>
   			</div>
		</div>
	</div>
</section>
<!-- End Pricing Section -->


		</div> <!-- end col -->
	</div> <!-- end row -->
</div> <!-- end content-wrapper -->
</div><!-- end row- -->
</div><!-- end fluid-wrapper -->
<script type="text/javascript">
	function showStuff(element)  {
    var tabContents = document.getElementsByClassName('tabContent');
    for (var i = 0; i < tabContents.length; i++) { 
        tabContents[i].style.display = 'none';
    }
    console.log(element)
    var tabContentIdToShow = element.getAttribute('idOfContent');
    console.log(tabContentIdToShow)

    document.getElementById(tabContentIdToShow).style.display = 'block';
}
</script>
<?php
get_footer();


