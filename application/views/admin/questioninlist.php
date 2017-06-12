<div class="row">
  <div class="col-md-10">
    <div style="font-weight:bold">Question : <?php echo $que->q_index; ?></div>
    <div><span class="opt-index">Q. </span><?php echo $que->q_name; ?></div>
    <div class="option-block">
      <div class="opt"><span class="opt-index">a).</span> <?php echo $que->q_optiona; ?></div>
      <div class="opt"><span class="opt-index">b).</span> <?php echo $que->q_optionb; ?></div>
      <div class="opt"><span class="opt-index">c).</span> <?php echo $que->q_optionb; ?></div>
      <div class="opt"><span class="opt-index">d).</span> <?php echo $que->q_optiond; ?></div>
      <div class="opt"><span class="opt-index">e).</span> <?php echo $que->q_optione; ?></div>
    </div>
    <div class="pull-right"><span class="opt-index">Ans.</span> <?php echo $que->q_answer; ?></div>
  </div>
  <div class="col-md-2">
    <a href="<?php echo site_url('admin/deletequestion/').$paper['paper_id'].'/'.$que->q_id; ?>" class="btn btn-danger btn-block">Delete</a><br>
    <a href="<?php echo site_url('admin/addquestion/').$paper['paper_id'].'/'.$que->q_id; ?>" class="btn btn-info btn-block">Edit</a><br>
  </div>
</div>
<hr/>
