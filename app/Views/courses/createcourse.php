<?= $this->extend('templates/main') ?>
<?= $this->Section('content') ?>

	<div class="row">
		<div class="col-12 cols-sm8 offset-sm2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white ">
			<div class="container">
				<h3> Create Course </h3>
				<hr>
				<form class="" action="/createcourse" method="post" enctype="multipart/form-data">
					<div class="row">


						 <div class="form-group">
						     <input type="text" class="form-control" placeholder="Enter Course Name" id="csname" name="csname" value="<?= set_value('csname');?>">
						 </div>
						 <div class="form-group">
						   <label for="entryqulification">Entry Qulification</label>
						   <select class="form-control" id="entryqulification" name="entryqly"  value="<?= set_value('entryqly');?>" >
						     <option>Not Found</option>
						     <option>None</option>
						     <option>Upto Grade 8</option>
						     <option>Upto Grade 9</option>
						     <option>Upto GCE OL</option>
						     <option>Pass GCE OL</option>
						     <option>Upto GCE AL</option>
						      <option>Pass GCE AL</option>
						   </select>
						 </div>
						 <div class="form-group">
						     <input type="text" class="form-control" placeholder="Enter Course Theory hours " id="thhrs" name="thhrs" value="<?= set_value('thhrs');?>" >
						 </div>
						 <div class="form-group">
						     <input type="text" class="form-control" placeholder="Enter Course Practical hours " id="prcthrs"  name="prcthrs" value="<?= set_value('prcthrs');?>" >
						 </div>
						 <div class="form-group">
						     <input type="text" class="form-control" placeholder="Enter Course  Assingment hours " id="asinghrs" name="asinghrs" value="<?= set_value('asinghrs');?>" >
						 </div>
						 <div class="form-group">
						     <input type="text" class="form-control" placeholder="Enter Course Project hours " id="prjhrs"  name="prjhrs" value="<?= set_value('prjhrs');?>" >
						 </div>
						 <div class="form-group">
						     <input type="text" class="form-control" placeholder="Enter Course Fees" id="csfees" name="csfees" value="<?= set_value('csfees');?>" >
						 </div>
						 <div class="form-group">
						     <input type="text" class="form-control" placeholder="Enter Course Badge per year" id="bdgpyear" name="bdgpyear" value="<?= set_value('bdgpyear');?>" >
						 </div>

						 <div class="form-group">
						     <input type="text" class="form-control" placeholder="Enter Course Duration in Months" id="csdmonths" name="csdmonths" value="<?= set_value('csdmonths');?>" >
						 </div>
						 <div class="form-group">
						   <label for="entryqulification">Course Type</label>
						   <select class="form-control" id="entryqulification" name="cstype" value="<?= set_value('cstype');?>" >
						     <option>School Student</option>
						     <option>None</option>
						     <option>School Leavers</option>
						     <option>Common</option>

						   </select>
						 </div>
						 <div class="form-group">
						      <label>Avatar</label>
						       <input type="file" class="file-path validate" type="text" placeholder="Upload your Course Image File " name="csimage" value="<?= set_value('csimage');?>" >
						       </div>
						     </div>
						 </div>
						 <?php if (isset($validation)): ?>
						       <div class="col-sm-4">
						           <div class="alert alert-danger" role="alert">
						             <?= $validation->listErrors(); ?>
						           </div>
						       </div>

						 <?php endif; ?>
						<div class="form-group">
						 <input type="submit" class="btn btn-info" value="Submit Button">
						</div>



				</form>
			</div>
		</div>
<?= $this->endSection() ?>
