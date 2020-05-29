<?php
/**
  Template Name: User Activity
 * @package thecodemarvel
 */
get_header('useractivity');

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
    'post_type' => 'post',
    'author__in'=> array($loginUser->ID),
    'post_status' => array('all') ,
     'orderby' => 'date',
    'order' => 'DESC',
);

 $theQuery = new WP_Query($post_args1);  



//echo"<pre>";

?>
    <style>
      body {
        font-family: "Lato";
        margin: 0;
        padding: 0;
      }

      #myKanban {
        overflow-x: auto;
        padding: 20px 0;
      }

      .success {
        background: #00b961;
      }

      .info {
        background: #2a92bf;
      }

      .warning {
        background: #f4ce46;
      }

      .error {
        background: #fb7d44;
      }
    </style>
<!-- Main sidebar -->
<div class="container-fluid">
	<div class="row">
<!-- /main sidebar -->
<div class="col-12 mb-3">

            	 <?php
               $boardItemData = array();
	            if ($theQuery->have_posts()):
	                while ($theQuery->have_posts()) : $theQuery->the_post();
	                	$statusP= $post->post_status;
	                	if($statusP =='draft'){
	                	$statusP= 'pending';	}
                    if($statusP =='publish'){
                    $statusP= 'done';  }
	                  
                    $itemData['id'] = $post->ID; 
                    $itemData['title'] = $post->post_title;
                    $itemData['date']  = get_the_date( 'j - F - Y' ) ;
                    $itemData['status']  = $statusP; 
                    $boardItemData[$statusP][] = $itemData ;
 	                endwhile;
	            endif;
	             wp_reset_postdata();
          
//echo"<pre>";
//print_r($boardItemData);
//echo "</pre>";

          ?>

<section id="activity" class=" " >
    <div class="container"> 
      <div id="myActivity"></div>
 
  </div>
</section>
<!-- End Pricing Section -->


</div> <!-- end col -->
</div><!-- end row- -->
</div><!-- end fluid-wrapper -->
 
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
			  return "<div class='item_handle drag_handler'><i class='item_handle drag_handler_icon'></i></div>"+
            "<div>"+( (result.title)?result.title:'')+"</div>"+
            "<div>" +( (result.date)?result.date:'') + "</div>"+
            "<div>"+( (result.status)?result.status:'') +"</div>";;
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


