<?
// Template Page

// page vars
$page_meta = array(
	"title" => "Template",
	"keywords" => "",
	"description" => ""
);
$body_class = array(
	"page" => "pg_template",
	"site_section" => "sct_template",
	"layout" => ""
);
?>	
<? include("includes/header.php"); ?>
	<!-- Main -->
	<main id="content-main" class="clearfix" role="main">
		<div class="wrap clearfix">
			<h2 class="line-header"><span class="midline"></span><span class="midtxt">Headers</span></h2>
			<h1 class="hdr1 btm-margin">Header 1</h1>
			<h2 class="hdr2 btm-margin">Header 2</h2>
			<h2 class="hdr3 btm-margin">Header 3</h2>
			<h2 class="hdr4 btm-margin">Header 4</h2>

			<br><br>

			<h2 class="line-header"><span class="midline"></span><span class="midtxt">Buttons</span></h2>
			<div class="template-btns">
				<a class="btn" href="#" title="Button">Button</a>
			</div>

			<br><br><br>

			<h2 class="line-header"><span class="midline"></span><span class="midtxt">Entry Content</span></h2>
			<div class="entry-content">
				<h2>Header 2</h2>
				<p>Nullam quis risus eget urna mollis ornare vel eu leo. Aenean lacinia bibendum nulla sed consectetur. Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				<h3>Header 3</h3>	
				<p>Nullam quis risus eget urna mollis ornare vel eu leo. Aenean lacinia bibendum nulla sed consectetur. Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			</div>

			<br><br>

			<h2 class="line-header"><span class="midline"></span><span class="midtxt">Icons</span></h2>
			<ul class="demo-icons">
				<li><span class="icon icon-twitter"></span> <span class="txt">twitter</span></li>
			</ul>

			<br><br><br>

			<h2 class="line-header"><span class="midline"></span><span class="midtxt">Form Fields</span></h2>
			<form id="demo_form" class="col-wrap" action="#" method="post">
				<ul>
					<li class="lbl-hint lbl-mini">
						<label for="form_ex1" class="">Example</label>
						<input type="text" id="form_ex1" name="form_ex1" placeholder="Example">
					</li>
					<li class="lbl-hint lbl-mini col1-2 field-col">
						<label for="form_ex2" class="">1/2</label>
						<input type="text" id="form_ex2" name="form_ex2" placeholder="1/2">
					</li>
					<li class="lbl-hint lbl-mini col1-2 field-col">
						<label for="form_ex3" class="">1/2</label>
						<input type="text" id="form_ex3" name="form_ex3" placeholder="1/2">
					</li>
					<li class="lbl-hint lbl-mini col1-3 field-col">
						<label for="form_ex4" class="">1/3</label>
						<input type="text" id="form_ex4" name="form_ex4" placeholder="1/3">
					</li>
					<li class="lbl-hint lbl-mini col2-3 field-col">
						<label for="form_ex5" class="">2/3</label>
						<input type="text" id="form_ex5" name="form_ex5" placeholder="2/3">
					</li>
					<li class="lbl-hint lbl-mini col1-4 field-col">
						<label for="form_ex6" class="">1/4</label>
						<input type="text" id="form_ex6" name="form_ex6" placeholder="1/4">
					</li>
					<li class="lbl-hint lbl-mini col1-4 field-col">
						<label for="form_ex7" class="">1/4</label>
						<input type="text" id="form_ex7" name="form_ex7" placeholder="1/4">
					</li>
					<li class="lbl-hint lbl-mini col1-2 field-col">
						<label for="form_ex8" class="">Select</label>
						<select class="chzn-select" id="form_ex8" name="form_ex8">
							<option value="">SELECT</option>
							<option value="1">Value 1</option>
							<option value="2">Value 2</option>
							<option value="3">Value 3</option>
						</select>
					</li>
					<li>
						<br>
					</li>
					<li class="col1-2 field-col">
						<label for="">Radio</label>
						<div class="chbx-wrap">
							<label class="chbx" for="form_yes2"><input type="checkbox" id="form_yes2" name="form_yn2"> Yes</label>
							<label class="chbx" for="form_no2"><input type="checkbox" id="form_no2" name="form_yn2"> No</label>
						</div>
					</li>
					<li class="col1-2 field-col">
						<label for="">Checkboxes</label>
						<div class="chbx-wrap">
							<label class="chbx" for="form_chbx3"><input type="checkbox" id="form_chbx3" name="form_chbx3"> Tennis</label>
							<label class="chbx" for="form_chbx4"><input type="checkbox" id="form_chbx4" name="form_chbx4"> Golf</label>
						</div>
					</li>
					<li class="inline">
						<label for="">Radio</label>
						<div class="radio-wrap lbl-block">
							<label class="radio" for="yes"><input type="radio" id="form_yes" name="form_yn"> Yes</label>
							<label class="radio" for="form_no"><input type="radio" id="form_no" name="form_yn"> No</label>
						</div>
					</li>
					<li class="inline">
						<label for="form_">Checkboxes</label>
						<div class="chbx-wrap lbl-block">
							<label class="chbx" for="form_chbx1"><input type="checkbox" id="form_chbx1" name="form_chbx1"> Tennis</label>
							<label class="chbx" for="form_chbx2"><input type="checkbox" id="form_chbx2" name="form_chbx2"> Golf</label>
						</div>
					</li>
					<li class="lbl-hint lbl-mini col3-4 field-col">
						<label for="form_ex8" class="">3/4</label>
						<input type="text" id="form_ex8" name="form_ex8" placeholder="3/4">
					</li>
					<li class="lbl-hint lbl-mini col1-4 field-col">
						<label for="form_ex9" class="">1/4</label>
						<input type="text" id="form_ex9" name="form_ex9" placeholder="1/4">
					</li>
					<li>
						<br>
						<button type="submit" class="submit" id="form_submit" name="form_submit">Submit</button>
					</li>
				</ul>
			</form>

			<br><br>

			<h2 class="line-header"><span class="midline"></span><span class="midtxt">Columns</span></h2>
			<div class="col-wrap clearfix">
				<div class="col1-2"><span class="demo-block">Col 1/2</span></div>
				<div class="col1-2"><span class="demo-block">Col 1/2</span></div>
				<div class="col1-3"><span class="demo-block">Col 1/3</span></div>
				<div class="col1-3"><span class="demo-block">Col 1/3</span></div>
				<div class="col1-3"><span class="demo-block">Col 1/3</span></div>
				<div class="col1-4"><span class="demo-block">Col 1/4</span></div>
				<div class="col1-4"><span class="demo-block">Col 1/4</span></div>
				<div class="col1-4"><span class="demo-block">Col 1/4</span></div>
				<div class="col1-4"><span class="demo-block">Col 1/4</span></div>
				<div class="col1-3"><span class="demo-block">Col 1/3</span></div>
				<div class="col2-3"><span class="demo-block">Col 2/3</span></div>
				<div class="col3-4"><span class="demo-block">Col 3/4</span></div>
				<div class="col1-4"><span class="demo-block">Col 1/4</span></div>
			</div>
			<div class="def-col-wrap col-wrap-lg clearfix">
				<div class="demo-block col1-2-lg">Col 1/2 (large)</div>
				<div class="demo-block col1-2-lg">Col 1/2 (large)</div>
				<div class="demo-block col1-3-lg">Col 1/3 (large)</div>
				<div class="demo-block col1-3-lg">Col 1/3 (large)</div>
				<div class="demo-block col1-3-lg">Col 1/3 (large)</div>
			</div>
		</div>
	</main>
<? 
include("includes/footer.php");
?>