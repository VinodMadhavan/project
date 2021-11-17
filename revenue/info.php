<?php 
include('class/Revenue.php');
$revenue = new Revenue();
$revenue->adminLoginStatus();
include('inc/header.php');
?>
<title>Tamil Nadu Govt : Revenue and Disaster Management Department</title>
<?php include('include_files.php');?>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/info.js"></script>
<?php include('inc/container.php');?>
<div class="container">	
	<?php include('side-menu.php');	?>
	<div class="content">
		<div class="container-fluid">
			<div>   
				<a href="#"><strong><span class="ti-crown"></span>Beneficiary Details</strong></a>
				<hr>		
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-10">
							<h3 class="panel-title"></h3>
						</div>
						<div class="col-md-2" align="right">
							<button type="button" name="add" id="addBeneficiery" class="btn btn-success btn-xs">Add Beneficiary Info </button>
						</div>
					</div>
				</div>
				<table id="studentList" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>SR No</th>
							<th>File No</th>
							<th>FIR No</th>
							<th>Name</th>
							<th>Date of Accident</th>	
							<th>Accident Status</th>
							<th>Date of Occurance</th>
							<th></th>
							<th></th>							
						</tr>
					</thead>
				</table>
			</div>			
		</div>		
	</div>	
</div>	
<div id="beneficiaryModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="beneficiaryForm" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><i class="fa fa-plus"></i> Edit Beneficiary Info</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="sr" class="control-label">SR Number</label>							
						<input type="sr" class="form-control" id="sr" name="sr" placeholder="SR Number..">							
					</div>	
					<div class="form-group">
						<label for="mname" class="control-label">Year*</label>	
						<select name="sryear" id="sryear" class="form-control" required>
							<option value="">Select Year</option>
							<option value="">Select Year</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
							<option value="2020">2020</option>
							<option value="2021">2021</option>
							<option value="2022">2022</option>
							<option value="2023">2023</option>
							<option value="2024">2024</option>
							<option value="2025">2025</option>
							<option value="2026">2026</option>
							<option value="2027">2027</option>
							<option value="2028">2028</option>
							<option value="2029">2029</option>
							<option value="2030">2030</option>
							<option value="2031">2031</option>
							<option value="2032">2032</option>
							<option value="2033">2033</option>
							<option value="2034">2034</option>
							<option value="2035">2035</option>
							<option value="2036">2036</option>
							<option value="2037">2037</option>
							<option value="2038">2038</option>
							<option value="2039">2039</option>
							<option value="2040">2040</option>
						</select>
					</div>
					<div class="form-group">
						<label for="fileno" class="control-label">File Number</label>							
						<input type="fileno" class="form-control" id="fileno" name="fileno" placeholder="File Number..">							
					</div>	
					<div class="form-group">
						<label for="mname" class="control-label">Year*</label>	
						<select name="fileyear" id="fileyear" class="form-control" required>
						<option value="">Select Year</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
							<option value="2020">2020</option>
							<option value="2021">2021</option>
							<option value="2022">2022</option>
							<option value="2023">2023</option>
							<option value="2024">2024</option>
							<option value="2025">2025</option>
							<option value="2026">2026</option>
							<option value="2027">2027</option>
							<option value="2028">2028</option>
							<option value="2029">2029</option>
							<option value="2030">2030</option>
							<option value="2031">2031</option>
							<option value="2032">2032</option>
							<option value="2033">2033</option>
							<option value="2034">2034</option>
							<option value="2035">2035</option>
							<option value="2036">2036</option>
							<option value="2037">2037</option>
							<option value="2038">2038</option>
							<option value="2039">2039</option>
							<option value="2040">2040</option>
						</select>
					</div>
					<div class="form-group">
						<label for="pname" class="control-label">Police Station*</label>	
						<select name="police" id="police" class="form-control" required>
							<option value="">Select Police Station</option>
							<option value="Kottar">Kottar</option>
							<option value="Vadaseri">Vadaseri</option>
							<option value="Nesamony Nagar">Nesamony Nagar</option>
							<option value="Asaripallam">Asaripallam</option>
							<option value="Aralvoimozhi">Aralvoimozhi</option>
							<option value="Ccs-nagercoil">Ccs-nagercoil</option>
							<option value="Boothapandy">Boothapandy</option>
							<option value="Kanyakumari">Kanyakumari</option>
							<option value="St Kulam">St Kulam</option>
							<option value="Suchindram">Suchindram</option>
							<option value="Anjugramam">Anjugramam</option>
							<option value="Rajakkamangalam">Rajakkamangalam</option>
							<option value="Ethamozhi">Ethamozhi</option>
							<option value="Thuckaly">Thuckaly</option>
							<option value="mardhadam">Kotticode</option>
							<option value="Thiruvattar">Thiruvattar</option>
							<option value="Arumanai">Arumanai</option>
							<option value="Arugani">Arugani</option>
							<option value="Kadaiyalumoodu">Kadaiyalumoodu</option>
							<option value="Kaliyakkavilai">Kaliyakkavilai</option>
							<option value="Pazhugal">Pazhugal</option>
							<option value="Kulasekaram">Kulasekaram</option>
							<option value="Pechiparai">Pechiparai</option>
							<option value="Keeriparai">Keeriparai</option>
							<option value="Marthandam">Marthandam</option>
							<option value="Colachel">Colachel</option>
							<option value="Kollencode">Kollencode</option>
							<option value="Puthukadai">Puthukadai</option>
							<option value="Nithiravilai">Nithiravilai</option>
							<option value="Karungal">Karungal</option>
							<option value="Eraniel">Eraniel</option>
							<option value="Manavalakurichi">Manavalakurichi</option>
							<option value="Vellichanthai">Vellichanthai</option>
							<option value="Mandaikadu">Mandaikadu</option>
				 	    </select>
					</div>
					<div class="form-group">
						<label for="fir" class="control-label">FIR Number</label>							
						<input type="fir" class="form-control" id="fir" name="fir" placeholder="FIR Number..">							
					</div>	
					<div class="form-group">
						<label for="firyear" class="control-label">Year*</label>	
						<select name="firyear" id="firyear" class="form-control" required>
							<option value="">Select Year</option>
							<option value="2018">2018</option>
							<option value="2019">2019</option>
							<option value="2020">2020</option>
							<option value="2021">2021</option>
							<option value="2022">2022</option>
							<option value="2023">2023</option>
							<option value="2024">2024</option>
							<option value="2025">2025</option>
							<option value="2026">2026</option>
							<option value="2027">2027</option>
							<option value="2028">2028</option>
							<option value="2029">2029</option>
							<option value="2030">2030</option>
							<option value="2031">2031</option>
							<option value="2032">2032</option>
							<option value="2033">2033</option>
							<option value="2034">2034</option>
							<option value="2035">2035</option>
							<option value="2036">2036</option>
							<option value="2037">2037</option>
							<option value="2038">2038</option>
							<option value="2039">2039</option>
							<option value="2040">2040</option>
						</select>
					</div>
					<div class="form-group">
						<label for="accidentdate" class="control-label">Date of Accident</label>							
						<input type="text" class="form-control"  id="accidentdate" name="accidentdate" placeholder="mm/dd/yyyy">							
					</div>	
					<div class="form-group">
						<label for="status" class="control-label">Accident Status*</label>	
						<select name="status" id="status" class="form-control" required>
							<option value="">Select Accident Status</option>
							<option value="death">Death</option>
							<option value="major Injury">Major Injury</option>
							<option value="loss limb">Loss of Limb</option>
							<option value="minor injury">Minor Injury</option>
						</select>
					</div>	
					<div class="form-group">
						<label for="deathdate" class="control-label">Date of Death</label>							
						<input type="text" class="form-control"  id="deathdate" name="deathdate" placeholder="mm/dd/yyyy">							
					</div>	
					<div class="form-group">
						<label for="name" class="control-label">Name of Victim*</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Student Name" required>				
					</div>	
					<div class="form-group">
						<label for="firstname" class="control-label">Id Proof*</label>
						<input type="file" class="form-control" id="idproof" name="idproof" placeholder="Student photo" required>				
					</div>						
					<div class="form-group">
						<label for="gender" class="control-label">Gender*</label><br>							
						<label class="radio-inline">
							<input type="radio" name="gender" id="male" value="male" required>Male
						</label>
						<label class="radio-inline">
							<input type="radio" name="gender" id="female" value="female" required>Female
						</label>							
					</div>	
					<div class="form-group">
						<label for="claim" class="control-label">Accident Claim*</label>	
						<select name="cliam" id="claim" class="form-control" required>
							<option value="">Select Amount</option>
							<option value="100000">100000</option>
							<option value="50000">50000</option>
							<option value="30000">30000</option>
							<option value="10000">10000</option>
						</select>
					</div>
					<div class="form-group">
						<label for="bname" class="control-label">Name of Beneficiary*</label>
						<input type="text" class="form-control" id="bname" name="bname" placeholder=" Name of Beneficiary" required>				
					</div>	
					<div class="form-group">
						<label for="fname" class="control-label">Father/Husband Name</label>							
						<input type="text" class="form-control" id="fname" name="fname" placeholder="Father/Husband Name...">							
					</div>	
					<div class="form-group">
						<label for="mobile" class="control-label">Mobile</label>							
						<input type="number" class="form-control" id="mobile" name="mobile" placeholder="Mobile">							
					</div>		
					<div class="form-group">
						<label for="address" class="control-label">Address</label>							
						<textarea class="form-control" rows="2" id="address" name="address" placeholder="Address"></textarea>							
					</div>
					<div class="form-group">
						<label for="bankname" class="control-label">Bank Name*</label>
						<input type="text" class="form-control" id="bankname" name="bankname" placeholder="Bank Name" required>				
					</div>	
					<div class="form-group">
						<label for="accountnumer" class="control-label">Account Number*</label>
						<input type="number" class="form-control" id="accountnumer" name="accountnumer" placeholder="Account Number" required>				
					</div>	
					<div class="form-group">
						<label for="ifsc" class="control-label">IFSC Code*</label>
						<input type="text" class="form-control" id="ifsc" name="ifsc" placeholder="IDFC Code" required>				
					</div>	
					<div class="form-group">
						<label for="payment" class="control-label">Payment Status*</label><br>							
						<label class="radio-inline">
							<input type="radio" name="payment" id="yes" value="Yes" required>Yes
						</label>
						<label class="radio-inline">
							<input type="radio" name="payment" id="no" value="No" required>No
						</label>							
					</div>	
					<div class="form-group">
						<label for="pay_date" class="control-label">Payment Date</label>							
						<input type="text" class="form-control"  id="pay_date" name="pay_date" placeholder="mm/dd/yyyy">							
					</div>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="studentid" id="studentid" />
					<input type="hidden" name="action" id="action" value="updateStudent" />
					<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
</div>
<?php include('inc/footer.php');?>