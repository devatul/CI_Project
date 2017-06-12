<?php include('header.php');?>
<?php
	$paper		=	$array['paper'];
	$questions = $array['questions'];
?>
<script>
$(document).ready(function(){
	$(".passage").hide();
	$("#showPassageInput").click(function(e){
		e.target.checked ?
			$(".passage").show()
		:
			$(".passage").hide()
	});
});
</script>
<div class="content" style="background-color:gray;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
				<div class="card">
          <div class="content">
						<h4 class="title">Paper : <?php echo $paper['paper_name'];?></h4>
          </div>
	      </div>
				<?php //include('addquestionform.php'); ?>
					<div class="card">
						<div class="header">
							<div class="row">
								<div class="col-md-9">
									<h5>List Of Questions<h5>
								</div>
								<div class="col-md-3">
									<a href="<?php echo site_url('admin/addquestion/').$paper['paper_id']; ?>" class="btn btn-info btn-block add-question-button">Add Question</a>
								</div>
							</div>
							<hr/>
							<?php if($this->session->flashdata('delmsg'))
			        {
			          echo $this->session->flashdata('delmsg');
			        }
							?>
						</div>
	          <div class="content">
							<?php
								if (!$questions) {
									echo '<h4 class="m-0">No question added</h4>';
								} else {
									foreach ($questions as $key => &$que):
										include('questioninlist.php');
								 	endforeach;
								}
							 ?>
	          </div>
		      </div>
	      </div>
	    </div>
	  </div>
	</div>
<?php include('footer.php');?>
