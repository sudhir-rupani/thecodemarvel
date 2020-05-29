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
    'post_status' => array('ready','review','inprogress','pending','publish') ,
    'orderby' => 'date',
    'order' => 'DESC',
	'posts_per_page'=>-1
);

 $theQuery = new WP_Query($post_args1);  



//echo"<pre>";
//print_r($theQuery);

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
									<a href="#"  class="nav-link  sub-menu"  role="button" idOfContent="user_dashbord" onclick="showStuff(this)"  >
										<i class="bx bx-cube-alt" aria-hidden="true"></i>
										User Dashboard
 									</a>
								</li>
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
		<section id="<?php echo 'form-id-'.$postData->ID ?>" class="form tabContent ">
						<div class="container">
							<div class="section-title">
								<h2  class=""><?php echo $postData->post_title; ?></h2>          
							</div>
							<?php
				$post_name = $postData->post_name;
				// echo do_shortcode("[wpuf_form id=$postData->ID]");
				echo do_shortcode("[wpuf_form id=240]");
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

				<?php  
					$args = array(
						'post_type'      => 'product',
						'posts_per_page' => 10,
						'product_cat'    => 'subscription'
					);

					$productQuery = new WP_Query( $args );
					while ( $productQuery->have_posts() ) : $productQuery->the_post();
						global $product;

				$subscription_price = get_post_meta( get_the_ID(), '_subscription_sign_up_fee', true );
				?>
							<div class="col-lg-3 col-md-6" data-aos="flip-left">
								<div class="box">
									<h3><?php echo get_the_title() ?></h3>
									<h4><sup>$</sup><?php echo $subscription_price;?></h4>
									<?php print(htmlspecialchars_decode(get_the_excerpt()));  ?>
									<div class="btn-wrap">                       
										<?php if(!$loginUser){ ?>
										<a href="#" class="xoo-el-action-sc xoo-el-login-tgr btn-buy">Buy Now</a>			
										<?php }else{?>
										<a href="<?php echo"?add-to-cart=".get_the_id() ?>" class="btn-buy">Buy Now</a>
										<?php }?>
									</div>
								</div>
							</div>
				<?php 
					endwhile;

					wp_reset_query();
				?>
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
						  <th>Completed Work</th>
						</tr>
					  </thead>
					  <tbody>
						 <?php
						if ($theQuery->have_posts()):
							while ($theQuery->have_posts()) : $theQuery->the_post();
								$statusP= $post->post_status;
								if($statusP =='draft'){
								$statusP= 'Todo';	}
								
								$postStatus= $post->post_status;
								if($postStatus =='draft'){
								$postStatus= 'pending';	}
								if($postStatus =='publish'){
								$postStatus= 'done';  }
								  
								$itemData['id'] = $post->ID; 
								$itemData['title'] = $post->post_title;
								$itemData['date']  = get_the_date( 'j - F - Y' ) ;
								$itemData['status']  = $postStatus; 
							
								?>
								 <tr>						   
								  <td><?php echo $post->ID; ?></td>
								  <td><?php echo $post->post_title; ?></td>
								  <td><?php echo $statusP; ?></td>
								  <td><?php echo get_the_date( 'j - F - Y' ) ?></td>
								 <td>
								 
								 <?php 
								$result1 = get_post_meta( $post->ID, 'completed-work', true );
								//print_r($result1);
								if($result1){
									$url = wp_get_attachment_url($result1);
									?>
									<button class="btn btn-success" ><a  class="text-white" href="<?php echo $url;?>" target="_blank" download>Download</a></button>
									<?php 
								$itemData['url']  = $url; 
								}
								 ?>
								 
								 </td>
								 </tr>                

							<?php
								$boardItemData[$postStatus][] = $itemData ;
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

		<section id="user_dashbord" class="pricing tabContent" >
			<div class="container">

				<div class="section-title">
					<h2>UserDashboard</h2>
					<h5>Track Your Job</h5>
				</div>

				<div class="row justify-content-center">
				<div id="myActivity"></div>
				</div>

			</div>
		</section>


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
<?php //print_r($boardItemData) ;?>
<script type="text/javascript" >

 var itemdataphp = <?php echo json_encode($boardItemData); ?>  ; 
//console.log(itemdataphp.pending);
 
 var boardData =[
          {
            id: "pending",
            title: "Pending",
            class: "theme-background",
            dragTo: ["_inprogress"],
                item: []
          
          },
           {
            id: "inprogress",
            title: "Inprogress",
            class: "theme-background",
            dragTo: ["_working"],
            item: []
          },
          {
            id: "review",
            title: "In Review",
            class: "theme-background",
            item: [],
            dragTo: ["ready"],
          },
          {
            id: "ready",
            title: "In Ready",
            class: "theme-background",
            dragTo: ["done","review"],
             item: [""],
          },
          {
            id: "done",
            title: "Done",
            class: "success",
            dragTo: [],
            item: []
          }
        ];

for (let item of boardData) {
    item.item = itemdataphp[item.id];
}
 console.log(boardData);
 var KanbanTest = new jKanban(
	  {
        element: "#myActivity",
        gutter: "1px",
        widthBoard: "200px",
        responsivePercentage: false,
        itemHandleOptions:{
          enabled: true,
          customHandler: function(result){
			  
			  let rt = "<div class='item_handle drag_handler'><i class='item_handle drag_handler_icon'></i></div>"+
            "<div>"+( (result.title)?result.title:'')+"</div>"+
            "<div>" +( (result.date)?result.date:'') + "</div>";
            //"<div>"+( (result.status)?result.status:'') +"</div>";
			if(result.url){
            rt += "<div><button class='btn btn-success' ><a  class='text-white' href="+( (result.url)?result.url:'') +" target='_blank' download>Download</a></button> </div>";				
			}
	return rt;
		  }

        },
      buttonContent :'',
      addItemButton: false,
	    dragBoards: false,
        click: function(el) {
          console.log("Trigger on all items click!");
        },
		drag: function(el, target, source, sibling) {
	  console.log("START DRAG: "+el);
		},
		dragend: function(el, target, source, sibling) {
		  console.log("END DRAG: " + el);
		},
    dropEl: function(el, target, source, sibling){
      
//       console.log(source);
       console.log(source.parentElement.getAttribute('data-id'));

        if((target.parentElement.getAttribute('data-id') =='review'||target.parentElement.getAttribute('data-id') =='done') && source.parentElement.getAttribute('data-id') =='ready' ){
       console.log(el.getAttribute('data-eid'));
           var data = {
      'action': 'update_job_status',
      'job_id': el.getAttribute('data-eid'),
      'status' : target.parentElement.getAttribute('data-id')
    };

    jQuery.post(ajax_object.ajaxurl, data, function(response) {

      alert('Got this from the server: ' + response);
    });
        }
        
        },
        buttonClick: function(el, boardId) {
          console.log(el);
          console.log(boardId);
          // create a form to enter element
          var formItem = document.createElement("form");
          formItem.setAttribute("class", "itemform");
          formItem.innerHTML =
            '<div class="form-group"><textarea class="form-control" rows="2" autofocus></textarea></div><div class="form-group"><button type="submit" class="btn btn-primary btn-xs pull-right">Submit</button><button type="button" id="CancelBtn" class="btn btn-default btn-xs pull-right">Cancel</button></div>';

          KanbanTest.addForm(boardId, formItem);
          formItem.addEventListener("submit", function(e) {
            e.preventDefault();
            var text = e.target[0].value;
            KanbanTest.addElement(boardId, {
              title: text
            });
            formItem.parentNode.removeChild(formItem);
          });
          document.getElementById("CancelBtn").onclick = function() {
            formItem.parentNode.removeChild(formItem);
          };
        },
        addItemButton: true,
        boards: boardData
      });

      var toDoButton = document.getElementById("addToDo");
      toDoButton.addEventListener("click", function() {
        KanbanTest.addElement("_pending", {
          title: "Test Add"
        });
      });

      var addBoardDefault = document.getElementById("addDefault");
      addBoardDefault.addEventListener("click", function() {
        KanbanTest.addBoards([
          {
            id: "_default",
            title: "Kanban Default",
            item: [
              {
                title: "Default Item"
              },
              {
                title: "Default Item 2"
              },
              {
                title: "Default Item 3"
              }
            ]
          }
        ]);
      });

      var removeBoard = document.getElementById("removeBoard");
      removeBoard.addEventListener("click", function() {
        KanbanTest.removeBoard("_done");
      });

      var removeElement = document.getElementById("removeElement");
      removeElement.addEventListener("click", function() {
        KanbanTest.removeElement("_test_delete");
      });

      var allEle = KanbanTest.getBoardElements("_pending");
      allEle.forEach(function(item, index) {
        //console.log(item);
      });
    </script>
<?php
get_footer();


