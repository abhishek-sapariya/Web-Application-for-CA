<?php
session_start();
if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
$_SESSION['PAN']=$_POST['PAN'];
$PAN=$_SESSION['PAN'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Part B</title>
	<style>
input[type='text']{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
select{
		width: 50%;
  		padding: 12px 20px;
	  margin: 8px 0;
	  display: inline-block;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
}
div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

input:focus {
  border: 3px solid #555;
}

textarea {
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  resize: none;
}
</style>
</head>
<body>	
	<form action="insertsalary.php" method="Post">
		<fieldset>
			<legend>Part-B</legend>
				<fieldset>
					<legend>1.Gross salary</legend>
		<div class="input-group">
			<table>
				<tr>
					<td><label>Salary as per section 17(1) :</label></td>
					<td><input type="text" name="section_17_1"  id="section_17_1" value="0" required></td>
				</tr>
				<tr>
					<td><label>Value of perquisites as per section 17(2) :</label></td>
					<td><input type="text" name="section_17_2"  id="section_17_2" value="0" required></td>
				</tr>
				<tr>
					<td><label>Profits in lieu of salary  as per section 17(3) :</label></td>
					<td><input type="text" name="section_17_3"  id="section_17_3" value="0" required></td>
				</tr>
				<tr>
					<td><label>Gross Salary:</label></td>
					<td><input type="text" name="grosssalary"  id="grosssalary" value="total of 1,2,3" disabled></td>
				</tr>
				<tr>
					<td><label>Reported total amount of salary received from other employer(s):</label></td>
					<td><input type="text" name="oth_emp"  id="oth_emp" value="0" ></td>
				</tr>
				<tr>
					<td><label>Less Allowance:</label></td>
				</tr>
				<tr>
					<td><label>Travel concession or assistance under section 10(5):</label></td>
					<td><input type="hidden" name="nature_10_5" id="nature_10_5" value="section_10_5" ><input type="text" name="travel_concession" id="travel_concession" value="0"></td>
				</tr>
				<tr>
					<td><label>Death-cum-retirement gratuity under section 10(10):</label></td>
					<td><input type="hidden" name="nature_10_10" id="nature_10_10" value="section_10_10" ><input type="text" name="death_cum_retirement" id="death_cum_retirement" value="0"></td>
				</tr>
				<tr>
					<td><label>Commuted value of pension under section 10(10A)</label></td>
					<td><input type="hidden" name="nature_10_10A" id="nature_10_10A" value="section_10_10A" ><input type="text" name="pension" id="pension" value="0"></td>
				</tr>
				<tr>
					<td><label>Cash equivalent of leave salary encashment under section 10(10AA)</label></td>
					<td><input type="hidden" name="nature_10_10AA" id="nature_10_10AA" value="section_10_10AA" ><input type="text" name="cash" id="cash" value="0"></td>
				</tr>
				<tr>
					<td><label>House rent allowance under section 10(13A)</label></td>
					<td><input type="hidden" name="nature_10_13A" id="nature_10_13A" value="section_10_13A" ><input type="text" name="house_rent" id="house_rent" value="0"></td>
				</tr>
				<tr>
					<td><label>Amount of any other Exemption under section 10:</label></td>
					<td><input type="hidden" name="nature_10_other" id="nature_10_other" value="section_10_other" ><input type="text" name="other_exemption" id="other_exemption" value="0"></td>
				</tr>
				
				<tr>
					<td><label>Standard deduction u/s 16(i):</label></td>
					<td><input type="text" name="deduction_1"  id="deduction_1" value="0" required></td>
				</tr>
				<tr>
					<td><label>Entertainment allowance u/s 16(ii):</label></td>
					<td><input type="text" name="deduction_2"  id="deduction_2" value="0" required></td>
				</tr>
				<tr>
					<td><label>Professional Tax u/s 16(iii):</label></td>
					<td><input type="text" name="deduction_3"  id="deduction_3" value="0" required></td>
				</tr>
				<tr>
					<td><label> Income chargeable under the Head ‘Salaries’ (iii-iv)</label></td>
					<td><input type="text" name="headsalary"  id="headsalary" value="difference of (iii-iv)" disabled></td>
				</tr>
				<tr>
     				 <td><label>Income (or admissible loss) from house property reported by employee offered for TDS</label></td>
					<td><input type="text" name="income_house"  id="income_house" value="0" ></td>
				</tr>
				<tr>
					<td><label> Income under the head Other Sources offeredfor TDS</label></td>
					<td><input type="text" name="income_other"  id="income_other" value="0" ></td>
				</tr>
			</table>
		</fieldset>
			<br>
				<fieldset>
					<legend>10.Deductions under chapter vi-A:</legend>
					<div class="input-group">
						<table>
				<tr>
					<td><label>(a)Deduction in respect of Life insurance premia,contributions to provident fund etc, under section 80C:</label></td>
					<td><input type="text" name="80C" id="80C" value="0" required></td>
				</tr>
				<tr>
					<td><label>(b)Deduction in respect of contribution to certain pension funds under section 80CCC:</label></td>
					<td><input type="text" name="80CCC" id="80CCC" value="0" required></td>
				</tr>
				<tr>
					<td><label>(c)Deduction in respect of Contribution by taxpayer to pension scheme under section 80CCD(1):</label></td>
					<td><input type="text" name="80CCD_1" id="80CCD_1" value="0" required></td>
				</tr>
				<tr>
					<td><label>(d)Total deduction under section 80C,80CCC,80CCD(1):</label></td>
					<td><input type="text" name="total" id="total" disabled></td>
				</tr>
				<tr>
					<td><label>(e)Deduction in respect of amount paid/deposited to notified pension scheme under section 80CCD(1B):</label></td>
					<td><input type="text" name="80CCD_1B" id="80CCD_1B" value="0" required></td>
				</tr>
				<tr>
					<td><label>(f)Deduction in respect of Contribution by employer to pension scheme under section 80CCD(2):</label></td>
					<td><input type="text" name="80CCD_2" id="80CCD_2" value="0" required></td>
				</tr>
				<tr>
					<td>
						<label>(g)Deduction in respect of health insurance premia under section 80D:</label>
						<select name="health_insurance" id="health_insurance" >
							<option value="0">Select</option>
							<option value="25000">Self and Family</option>
							<option value="50000">Self(Senior citizen) & family</option>
							<option value="25000">Parents</option>
							<option value="50000">Parents(Senior citizen)</option>
							<option value="50000">Self and Family includeing parents</option>
							<option value="75000">Self and Family including senior citizen parents</option>
							<option value="100000">Self(Senior citizen) & family including senior citizen parents</option>
						</select>
					</td>
					<td><input type="text" name="80D" id="80D" value="0" required></td>
				</tr>
				<tr>
					<td><label>(h)Deduction in respect of interest  on loan taken for higher education under section 80E:</label></td>
					<td><input type="text" name="80E" id="80E" value="0" required></td>
				</tr>
				<tr>
					<td><label>(i)Total Deduction in respect of donations to certain funds,charitable institutions,etc. under section 80G:</label><br></b><input type="radio" name="donation" id="donation_50" value="50" checked>50%<input type="radio" name="donation" id="donation_100" value="100" >100%</td>
					<td><input type="text" name="80G" id="80G" value="0" required></td>
				</tr>
				<tr>
					<td><label>(j)Deduction in respect of interest  on deposits in savings account under section 80TTA:</label></td>
					<td><input type="text" name="80TTA" id="80TTA" value="0" required></td>
				</tr>
				<tr>
					<td><label>(k)Amount deductible under any other provision of chapter vi-A:</label></td>
					<td><input type="text" name="other_provision" id="other_provision" value="0"></td>
				</tr>
				<tr>
					<td><label>(l)Total of amount deductible under any other provision of chapter vi-A:</label></td>
					<td><input type="text" name="total_provision" id="total_provision"  disabled></td>
				</tr>
			</table>
		</div>
			</fieldset>
			<br>
			<table>
				<tr>
					<td><label>11.Aggregate of deductible amount under chapter vi-A:</label></td>
					<td><input type="text" name="aggregate" id="aggregate" disabled></td>
				</tr>
				<tr>
					<td><label>12.Total taxable income(9-11):</label></td>
					<td><input type="text" name="total_income" id="total_income" disabled></td>
				</tr>
				<tr>
					<td><label>13.Tax on total income:</label></td>
					<td><input type="text" name="tax" id="tax" disabled></td>
				</tr>
				<tr>
					<td><label>14.Rebate under section 87A, if applicable:</label></td>
					<td><input type="text" name="rebate" id="rebate" disabled></td>
				</tr>
				<tr>
					<td><label>15.Surcharge, wherever applicable:</label></td>
					<td><input type="text" name="surcharge" id="surcharge" disabled></td>
				</tr>
				<tr>
					<td><label>16.Health and Education cess</label></td>
					<td><input type="text" name="cess" id="cess" disabled></td>
				</tr>
				<tr>
					<td><label>17.Tax Payable(13+15+16-14):</label></td>
					<td><input type="text" name="tax_payable" id="tax_payable" disabled></td>
				</tr>
				<tr>
					<td><label>18.Less: Relief under section 89:</label></td>
					<td><input type="text" name="relief" id="relief" value="0" required=""></td>
				</tr>
				<tr>
					<td><label>19.Net tax payable(17-18):</label></td>
					<td><input type="text" name="net_tax" id="net_tax" disabled></td>
				</tr>
			</table>
		</fieldset>
	
	<input type="submit" name="salary_fill" value="submit">
	</form>
	<a href="logout.php">Logout</a>
</body>
</html>