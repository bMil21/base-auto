<?php
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
<?php include("includes/header.php"); ?>
	<!-- Main -->
	<main id="content-main" class="clearfix" role="main">
		<div class="wrap clearfix">

			<!-- Headers -->
			<section class="content-block vert-pad">
				<h2 class="line-header"><span class="midline"></span><span class="midtxt">Headers</span></h2>
				<h1 class="hdr1 btm-margin">Header 1</h1>
				<h2 class="hdr2 btm-margin">Header 2</h2>
				<h2 class="hdr3 btm-margin">Header 3</h2>
				<h2 class="hdr4 btm-margin">Header 4</h2>
			</section>

			<!-- Buttons -->
			<section class="content-block vert-pad">
				<h2 class="line-header"><span class="midline"></span><span class="midtxt">Buttons</span></h2>
				<div class="template-btns">
					<a class="btn" href="#" title="Button">Button</a>
					<p class="inline-submit">
						<input type="text" placeholder="Enter Address">
						<button type="submit" class="submit" id="inline_submit" name="inline_submit">GO</button>
					</p>
				</div>
			</section>

			<!-- User Entered Content -->
			<section class="content-block vert-pad">
				<h2 class="line-header"><span class="midline"></span><span class="midtxt">Entry Content</span></h2>
				<div class="entry-content">
					<h2>Header 2</h2>
					<p>Nullam quis risus eget urna mollis ornare vel eu leo. Aenean lacinia bibendum nulla sed consectetur. Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
					<h3>Header 3</h3>	
					<p>Nullam quis risus eget urna mollis ornare vel eu leo. Aenean lacinia bibendum nulla sed consectetur. Maecenas sed diam eget risus varius blandit sit amet non magna. Maecenas sed diam eget risus varius blandit sit amet non magna. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
			</section>

			<!-- Icons -->
			<section class="content-block vert-pad">
				<h2 class="line-header"><span class="midline"></span><span class="midtxt">Icons</span></h2>
				<ul class="demo-icons">
					<li><span class="icon icon-twitter"></span> <span class="txt">twitter</span></li>
					<li><span class="icon icon-facebook"></span> <span class="txt">facebook</span></li>
					<li><span class="icon icon-google_plus"></span> <span class="txt">google_plus</span></li>
					<li><span class="icon icon-pinterest"></span> <span class="txt">pinterest</span></li>
					<li><span class="icon icon-linkedin"></span> <span class="txt">linkedin</span></li>
					<li><span class="icon icon-youtube"></span> <span class="txt">youtube</span></li>
					<li><span class="icon icon-youtube_play"></span> <span class="txt">youtube_play</span></li>
					<li><span class="icon icon-instagram_solid"></span> <span class="txt">instagram_solid</span></li>
					<li><span class="icon icon-up_arrow"></span> <span class="txt">up_arrow</span></li>
					<li><span class="icon icon-right_arrow"></span> <span class="txt">right_arrow</span></li>
					<li><span class="icon icon-down_arrow"></span> <span class="txt">down_arrow</span></li>
					<li><span class="icon icon-left_arrow"></span> <span class="txt">left_arrow</span></li>
					<li><span class="icon icon-phone"></span> <span class="txt">phone</span></li>
					<li><span class="icon icon-email_solid"></span> <span class="txt">email_solid</span></li>
					<li><span class="icon icon-magnify"></span> <span class="txt">magnify</span></li>
					<li><span class="icon icon-location"></span> <span class="txt">location</span></li>
					<li><span class="icon icon-close"></span> <span class="txt">close</span></li>
				</ul>
			</section>

			<!-- Backgrounds -->
			<section class="content-block vert-pad">
				<h2 class="line-header"><span class="midline"></span><span class="midtxt">Backgrounds</span></h2>
				<div class="def-col-wrap col-wrap gutter1 clearfix">
					<div class="col1-2 col">
						<div class="bg-colortxt btm-margin-sm" style="height:100px;"></div>
					</div>
					<div class="col1-2 col">
						<div class="bg-colortxt btm-margin-sm" style="height:100px;"></div>
					</div>
				</div>
			</section>

			<!-- Form Fields -->
			<section class="content-block vert-pad">
				<h2 class="line-header"><span class="midline"></span><span class="midtxt">Form Fields</span></h2>
				<?php // NOTE: Remove NOVALIDATE when done ?>
				<form id="demo_form" class="col-wrap gutter1" action="#" method="post" NOVALIDATE>
					<ul>
						<li class="lbl-hint lbl-mini">
							<label for="form_fname">Name</label>
							<input type="text" id="form_fname" name="form_fname" placeholder="Name">
						</li>
						<li class="lbl-hint lbl-mini field-col col1-2">
							<label for="form_email">Email</label>
							<input type="email" id="form_email" name="form_email" placeholder="Email">
						</li>
						<li class="lbl-hint lbl-mini field-col col1-2">
							<label for="form_phone">Phone</label>
							<input type="tel" id="form_phone" name="form_phone" placeholder="Phone">
						</li>
						<li class="lbl-hint lbl-mini">
							<label for="form_generic">Generic</label>
							<input type="text" id="form_generic" name="form_generic" placeholder="Generic">
						</li>
						<li class="lbl-hint lbl-mini">
							<label for="form_state" class="">State</label>
							<select class="chzn-select" id="form_state" name="form_state">
								<option value="">STATE</option>
								<option value="AL">Alabama</option>
								<option value="AK">Alaska</option>
								<option value="AZ">Arizona</option>
								<option value="AR">Arkansas</option>
								<option value="CA">California</option>
								<option value="CO">Colorado</option>
								<option value="CT">Connecticut</option>
								<option value="DE">Delaware</option>
								<option value="DC">District Of Columbia</option>
								<option value="FL">Florida</option>
								<option value="GA">Georgia</option>
								<option value="HI">Hawaii</option>
								<option value="ID">Idaho</option>
								<option value="IL">Illinois</option>
								<option value="IN">Indiana</option>
								<option value="IA">Iowa</option>
								<option value="KS">Kansas</option>
								<option value="KY">Kentucky</option>
								<option value="LA">Louisiana</option>
								<option value="ME">Maine</option>
								<option value="MD">Maryland</option>
								<option value="MA">Massachusetts</option>
								<option value="MI">Michigan</option>
								<option value="MN">Minnesota</option>
								<option value="MS">Mississippi</option>
								<option value="MO">Missouri</option>
								<option value="MT">Montana</option>
								<option value="NE">Nebraska</option>
								<option value="NV">Nevada</option>
								<option value="NH">New Hampshire</option>
								<option value="NJ">New Jersey</option>
								<option value="NM">New Mexico</option>
								<option value="NY">New York</option>
								<option value="NC">North Carolina</option>
								<option value="ND">North Dakota</option>
								<option value="OH">Ohio</option>
								<option value="OK">Oklahoma</option>
								<option value="OR">Oregon</option>
								<option value="PA">Pennsylvania</option>
								<option value="RI">Rhode Island</option>
								<option value="SC">South Carolina</option>
								<option value="SD">South Dakota</option>
								<option value="TN">Tennessee</option>
								<option value="TX">Texas</option>
								<option value="UT">Utah</option>
								<option value="VT">Vermont</option>
								<option value="VA">Virginia</option>
								<option value="WA">Washington</option>
								<option value="WV">West Virginia</option>
								<option value="WI">Wisconsin</option>
								<option value="WY">Wyoming</option>
							</select>
						</li>
						<li>
							<br>
							<label for="form_bday_mm">Date of Birth</label>
						</li>
						<li class="col1-3 field-col">
							<select class="chzn-select" id="form_bday_mm" name="form_bday_mm">
								<option value="">MM</option>
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
							</select>
						</li>
						<li class="col1-3 field-col">
							<select class="chzn-select" id="form_bday_dd" name="form_bday_dd">
								<option value="">DD</option>
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>
						</li>
						<li class="col1-3 field-col">
							<input type="tel" id="form_year" name="form_year" placeholder="YYYY" maxlength="4">
						</li>
						<li class="">
							<label for="form_upload">Upload PDF</label>
							<input class="fileinput" type="file" id="form_upload" name="form_upload" data-fi-btn="Browse" data-fi-txtph="Upload PDF" />
							<br>
						</li>
						<li class="col1-2 field-col">
							<label for="">Inline Radios</label>
							<div class="radio-wrap inline-radio">
								<label class="radio" for="form_yes3"><input type="radio" id="form_yes3" name="form_yn3"> Yes</label>
								<label class="radio" for="form_no3"><input type="radio" id="form_no3" name="form_yn3"> No</label>
							</div>
						</li>
						<li class="col1-2 field-col">
							<label for="">Inline Checkboxes</label>
							<div class="chbx-wrap inline-chbx">
								<label class="chbx" for="form_chbx5"><input type="checkbox" id="form_chbx5" name="form_chbx5"> Tennis</label>
								<label class="chbx" for="form_chbx6"><input type="checkbox" id="form_chbx6" name="form_chbx6"> Golf</label>
							</div>
						</li>
						<li class="col1-2 field-col">
							<label for="">Radios</label>
							<div class="chbx-wrap">
								<label class="radio" for="form_yes2"><input type="radio" id="form_yes2" name="form_yn2"> Yes</label>
								<label class="radio" for="form_no2"><input type="radio" id="form_no2" name="form_yn2"> No</label>
							</div>
						</li>
						<li class="col1-2 field-col">
							<label for="">Checkboxes</label>
							<div class="chbx-wrap">
								<label class="chbx" for="form_chbx3"><input type="checkbox" id="form_chbx3" name="form_chbx3"> Tennis</label>
								<label class="chbx" for="form_chbx4"><input type="checkbox" id="form_chbx4" name="form_chbx4"> Golf</label>
							</div>
						</li>
						<li class="lbl-hint lbl-mini">
							<label for="form_comments">Comments</label>
							<textarea id="form_comments" name="form_comments" placeholder="Comments..."></textarea>
						</li>
						<li>
							<br>
							<button type="submit" class="submit" id="form_submit" name="form_submit">Submit</button>
						</li>
					</ul>
				</form>
			</section>

			<!-- Columns -->
			<section class="content-block vert-pad">
				<h2 class="line-header"><span class="midline"></span><span class="midtxt">Columns</span></h2>
				<div class="center btm-margin">
					<p>(gutter1)</p>
				</div>
				<div class="col-wrap gutter1 clearfix">
					<div class="col1-2 btm-margin"><span class="demo-block">Col 1/2</span></div>
					<div class="col1-2 btm-margin"><span class="demo-block">Col 1/2</span></div>
					<div class="col1-3 btm-margin"><span class="demo-block">Col 1/3</span></div>
					<div class="col1-3 btm-margin"><span class="demo-block">Col 1/3</span></div>
					<div class="col1-3 btm-margin"><span class="demo-block">Col 1/3</span></div>
					<div class="col1-4 btm-margin"><span class="demo-block">Col 1/4</span></div>
					<div class="col1-4 btm-margin"><span class="demo-block">Col 1/4</span></div>
					<div class="col1-4 btm-margin"><span class="demo-block">Col 1/4</span></div>
					<div class="col1-4 btm-margin"><span class="demo-block">Col 1/4</span></div>
					<div class="col1-3 btm-margin"><span class="demo-block">Col 1/3</span></div>
					<div class="col2-3 btm-margin"><span class="demo-block">Col 2/3</span></div>
					<div class="col3-4 btm-margin"><span class="demo-block">Col 3/4</span></div>
					<div class="col1-4 btm-margin"><span class="demo-block">Col 1/4</span></div>
				</div>
			</section>
		</div>
	</main>
<?php 
include("includes/footer.php");
?>