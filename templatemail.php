<?php
session_start();
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  $year=$_SESSION['year'];

$_SESSION['PAN']=$_POST['PAN'];
$PAN=$_SESSION['PAN'];

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<?php
include("maildata.php");
?>
<body>
    <h3><center>Part B (Annexure)</center></h3>
  <table border="1" style="border-collapse: collapse;">
    <tr>
      <td colspan="5">Details of Salary Paid and any other income and tax deducted</td>
    </tr>
    <tr>
      <td>1.</td>
      <td colspan="4">Gross Salary</td>
    </tr>
    <tr>
      <td>(a)</td>
      <td>Salary as per provisions contained in section 17(1)</td>
      <td></td>
      <td><?php echo $row1['salary_17_1'] ?></td>
      <td></td>
    </tr>
    <tr>
      <td>(b)</td>
      <td>Value of perquisites under section 17(2) (as per Form No. 12BA, wherever applicable) </td>
      <td></td>
      <td><?php echo $row1['salary_17_2'] ?></td>
      <td></td>
    </tr>
        <tr>
      <td>(c)</td>
      <td>Profits in lieu of salary under section 17(3) (as per Form No. 12BA, wherever applicable) </td>
      <td></td>
      <td><?php echo $row1['salary_17_3'] ?></td>
      <td></td>
    </tr>
        <tr>
      <td>(d)</td>
      <td>Total </td>
      <td></td>
      <td></td>
      <td><?php echo $row1['total_sal']; ?></td>
    </tr>
    <tr>
      <td>(e)</td>
      <td>Reported total amount of salary received from other employer(s)</td>
      <td></td>
      <td></td>
      <td><?php echo $row1['sal_other_emp']; ?></td>
    </tr>
    
    <tr>
      <td>2.</td>
      <td colspan="4">Less: Allowances to the extent exempt under section 10</td>
    </tr>
    <tr>
      <td>(a)</td>
      <td>Travel concession or assistance under section 10(5)</td>
      <td></td>
      <td><?php echo $row2['amount']; ?></td>
      <td></td>
    </tr>
    <tr>
      <td>(b)</td>
      <td>Death-cum-retirement gratuity under section 10(10)</td>
      <td></td>
      <td><?php echo $row3['amount']; ?></td>
      <td></td>
    </tr>
    <tr>
      <td>(c)</td>
      <td>Commuted value of pension under section 10(10A)</td>
      <td></td>
      <td><?php echo $row4['amount']; ?></td>
      <td></td>
    </tr>
    <tr>
      <td>(d)</td>
      <td>Cash equivalent of leave salary encashment under section 10(10AA) </td>
      <td></td>
      <td><?php echo $row5['amount']; ?></td>
      <td></td>
    </tr>
    <tr>
      <td>(e)</td>
      <td>House rent allowance under section 10(13A)</td>
      <td></td>
      <td><?php echo $row6['amount']; ?></td>
      <td></td>
    </tr>
   
        <tr>
      <td>(g)</td>
      <td>Amount of any other exemption under section 10</td>
      <td></td>
      <td><?php echo $row7['amount'] ;?></td>
      <td></td>
    </tr>
    <?php 
      $total_us_10=$row2['amount']+$row3['amount']+$row4['amount']+$row5['amount']+$row6['amount']+$row7['amount'];
    ?>
    <tr>
      <td>(h)</td>
      <td>Total amount of exemption claimed under section 10[2(a)+2(b)+2(c)+2(d)+2(e)+2(g)]</td>
      <td></td>
      <td></td>
      <td><?php echo $total_us_10; ?></td>
    </tr>
    <tr>
      <?php
      $total_sal_emp='';
      if($row1['total_sal']<$total_us_10)
          $total_sal_emp=0;
        else
       $total_sal_emp = $row1['total_sal']-$total_us_10;

      ?>
      <td>3.</td>
      <td>Total amount of salary received from current employer[1(d)-2(h)] </td>
      <td></td>
      <td></td>
      <td><?php echo $total_sal_emp; ?></td>
    </tr>
    <tr>
      <td>4.</td>
      <td colspan="4">Less: Deductions under section 16</td>
    </tr>
    <tr>
      <td>(a)</td>
      <td>Standard deduction under section 16(ia)</td>
      <td></td>
      <td><?php echo $row1['deduction_1'] ?></td>
      <td></td>
    </tr>
     <tr>
      <td>(b)</td>
      <td>Entertainment allowance under section 16(ii)</td>
      <td></td>
      <td><?php echo $row1['deduction_2'] ?></td>
      <td></td>
    </tr>
     <tr>
      <td>(c)</td>
      <td>Tax on employment under section 16(iii)</td>
      <td></td>
      <td><?php echo $row1['deduction_3'] ?></td>
      <td></td>
    </tr>
    <tr>
      <td>5.</td>
      <td>Total amount of deductions under section 16[4(a)+4(b)+4(c)] </td>
      <td></td>
      <td></td>
      <td><?php echo $row1['total_ded'] ?></td>
    </tr>
    <?php 
    $head_sal='';
        if(($total_sal_emp+$row1['sal_other_emp'])<$row1['total_ded'])
            $head_sal=0;
          else
          $head_sal=$total_sal_emp+$row1['sal_other_emp']-$row1['total_ded']; 
    ?>
    <tr>
      <td>6.</td>
      <td>Income chargeable under the head "Salaries"[(3+1(e)-5]  </td>
      <td></td>
      <td></td>
      <td><?php echo $head_sal; ?></td>
    </tr>
    <tr>
      <td>7.</td>
      <td colspan="4">Add: Any other income reported by the employee under as per section 192(2B) </td>
    </tr>
    <tr>
      <td>(a)</td>
      <td>Income (or admissible loss) from house property reported by employee offered for TDS</td>
      <td></td>
      <td><?php echo $row1['income_house']; ?></td>
      <td></td>
    </tr>
    <tr>
      <td>(b)</td>
      <td>Income under the head Other Sources offeredfor TDS </td>
      <td></td>
      <td><?php echo $row1['income_other']; ?></td>
      <td></td>
    </tr>
    <?php $oth_income= $row1['income_house']+$row1['income_other']; ?>
    <tr>
      <td>8.</td>
      <td>Total amount of other income reported by the employee [7(a)+7(b)]</td>
      <td></td>
      <td></td>
      <td><?php echo $oth_income; ?></td>
    </tr>  
    <?php $gross_total_income=$head_sal+$oth_income; ?> 
    <tr>
      <td>9.</td>
      <td>Gross total income(6+8) </td>
      <td></td>
      <td></td>
      <td><?php echo $gross_total_income; ?></td>
    </tr>
    <tr>
      <td>10.</td>
      <td colspan="4">Deduction under Chapter VI-A </td>      
    </tr>
  </table>
  <br><br>
  <table border="1" style="border-collapse: collapse;">
  <tr>
      <td colspan="3"></td>
      <th>Gross<br/> Amount</th>
      <th>Deductible <br/>Amount</th>
    </tr>
    <tr>
      <td>(a)</td>
      <td>Deduction in respect of life insurance premia,contribution to provide fund    <br/>etc. under section 80C  </td>
      <td>     </td>
      <td><?php echo $row8['80C']; ?></td>
     
    </tr>
    <tr>
      <td>(b)</td>
      <td>Deduction in respect of contribution of certain pension funds under<br/> section 80CCC  </td>
      <td></td>
      <td><?php echo $row8['80CCC']; ?></td>
      
    </tr>
        <tr>
      <td>(c)</td>
      <td>Deduction in respect of contribution by taxpayer to pension scheme under<br/>section 80CCD(1)(upto 20% of salary)</td>
      <td></td>
      <?php
      $ccd1=$row8['80CCD1'];
          if($ccd1>0.2*$gross_total_income)
            $ccd1=0.2*$gross_total_income;
      ?>
      <td><?php echo $row8['80CCD1']; ?></td>
     
    </tr>
    <?php
      $total_80C=$row8['80C']+$row8['80CCC']+$ccd1;
       if($total_80C>='150000')
           $total_80C='150000';
    
    ?>
        <tr>
      <td>(d)</td>
      <td>Total deduction under section 80C,80CCC and 80CCD(1)  </td>
      <td></td>
      <td><?php echo $row8['total_80C']; ?></td>
      <td><?php echo $total_80C; ?></td>
    </tr>
    <tr>
      <?php
      $ccd1b=$row8['80CCD1B'];
      if($ccd1b>50000)
        $ccd1b=50000;
      ?>
      <td>(e)</td>
      <td>Deduction in respect of amount paid/deposite to notified pension<br/> scheme under section 80CCD(1B)</td>
      <td></td>
      <td><?php echo $row8['80CCD1B']; ?></td>
      <td><?php echo $ccd1b; ?></td>
    </tr>
    <?php
    $ccd2=$row8['80CCD2'];
    if($ccd2>0.1*$gross_total_income)
      $ccd2=0.1*$gross_total_income;
    ?>
    <tr>
      <td>(f)</td>
      <td>Deduction in respect of contribution by Employer to pension <br/>scheme under section 80CCD(2) </td>
      <td></td>
      <td><?php echo $row8['80CCD2']; ?></td>
      <td><?php echo $ccd2; ?></td>
    </tr>
    <tr>
      <?php
      $h80d=$row9['amount'];
         if($h80d>$row9['max'])
          $h80d=$row9['max'];
      ?>
      <td>(g)</td>
      <td>Deduction in respect of health insurance premia<br/> under section 80D </td>
      <td></td>
      <td><?php echo $row9['amount']; ?></td>
      <td><?php echo $h80d; ?></td>
    </tr>
    <?php
      $h80e=$row8['80E'];
         if($h80e>40000)
          $h80e=40000;
      ?>
    <tr>
      <td>(h)</td>
      <td>Deduction in respect of interest on loan taken<br/> for higher education under section 80E </td>
      <td></td>
      <td><?php echo $row8['80E']; ?></td>
      <td><?php echo $h80e; ?></td>
    </tr>
    <tr>
      <th colspan="2"></th>
      <th>Gross <br/> Amount
      <th>Qualifying<br/> Amount</th>
      <th>Deductible <br/>  Amount</th>
    </tr>
    <?php
    $h80g=$row8['80G'];
    $qamount=$row8['80G'];
    if($row8=='50')
      $qamount=0.5*$row8['80G'];
    
    if($h80g>$qamount)
      $h80g=$qamount;
    ?>
    <tr>
      <td>(i)</td>
      <td>Total Deduction in respect of donation to certain<br/> funds, charitable institutions, etc. under section 80G </td>
      <td><?php echo $row8['80G']; ?></td>
      <td><?php echo $qamount ?></td>
      <td><?php echo $h80g; ?></td>
    </tr>
    <?php
      $tta=$row8['80TTA'];
      $qtta='0';
      if($tta>50000&&$row10['age']=='60-80'&&$row10['age']=='80-more')
        $qtta=50000;
      if($tta>10000&&$row10['age']=='0-60')
        $qtta=10000;
      if($tta>$qtta)
        $tta=$qtta;
      ?>
    <tr>
      <td>(j)</td>
      <td>Deduction in respect of interest on deposite in savings account<br/> under section 80TTA </td>
      <td><?php echo $row8['80TTA']; ?></td>
      <td><?php echo $qtta; ?></td>
      <td><?php echo $tta; ?></td>
    </tr>
 
    <?php
    $total_deduction=$total_80C+$ccd1b+$ccd2+$h80d+$h80e+$h80g+$tta;
    ?>
    <tr>
      <td>11.</td>
      <td>Aggregate of deductible amount under chapter VI-A<br/>[10(a)+10(b)+10(c)+10(d)+10(e)+10(f)+10(g)+10(h)+10(i)+10(j)]</td>
      <td></td>
      <td></td>
      <td><?php echo $total_deduction; ?></td>
    </tr>
    <?php
    $total_taxable_income='';
    if($gross_total_income<$total_deduction)
      $total_taxable_income=0;
    else
       $total_taxable_income=$gross_total_income-$total_deduction;
    ?>
    <tr>
      <td>12.</td>
      <td>Total taxable income (9-11) </td>
      <td></td>
      <td></td>
      <td><?php echo $total_taxable_income; ?></td>
    </tr>

      <?php
      $qt='';
      $t_age=$row10['age'];
      if($total_taxable_income>10000000)
          $qt="SELECT * FROM `tax_cal` where `age`='$t_age' and `min`< $total_taxable_income and `year`='$year';";
        else
        {
          $qt="SELECT * FROM `tax_cal` where `age`='$t_age' and `min`< $total_taxable_income and `max`>=$total_taxable_income and `year`='$year'";
        }
        
      $runt=mysqli_query($con,$qt);
    $rowt=mysqli_fetch_assoc($runt);
      $taxper=$rowt['tax%'];

     
        $total_tax=($taxper*$total_taxable_income)/100;
      ?>

    <tr>
      <td>13.</td>
      <td>Tax on total income </td>
      <td></td>
      <td></td>
      <td><?php echo $total_tax; ?></td>
    </tr>
    <?php
    $rebate=0;
    if($total_taxable_income<350000)
      $rebate=2500;
    ?>
    <tr>
      <td>14.</td>
      <td>Rebate under section 87A,if applicable </td>
      <td></td>
      <td></td>
      <td><?php echo $rebate; ?></td>
    </tr>
    <?php
    if($rebate!=0)
    {
      if($total_tax<=$rebate)
        $total_tax=0;

      else
      {
        $total_tax=$total_tax-$rebate;
      }
    }
    $surper='0';
    $cessper='4';
    $surcharge=$surper*$total_tax;
    $hecess=$cessper*$total_tax/100;
    ?>
    <tr>
      <td>15.</td>
      <td>Surcharge, wherever applicable </td>
      <td></td>
      <td></td>
      <td><?php echo $surcharge; ?></td>
    </tr>
    <tr>
      <td>16.</td>
      <td>Health and education cess </td>
      <td></td>
      <td></td>
      <td><?php echo $hecess; ?></td>
    </tr>
    <?php 
      $payable_tax=$total_tax+$surcharge+$hecess;
    ?>
    <tr>
      <td>17.</td>
      <td>Tax payable (13+15+16-14) </td>
      <td></td>
      <td></td>
      <td><?php echo $payable_tax; ?></td>
    </tr>
    <tr>
      <td>18.</td>
      <td>Less: Relief under section 89 (attach details)  </td>
      <td></td>
      <td></td>
      <td><?php echo $row1['relief']; ?></td>
    </tr>
    <?php
    $net_tax='';
    if($payable_tax<$row1['relief'])
      $net_tax=0;
    $net_tax=$payable_tax-$row1['relief'];
    ?>
    <tr>
      <td>19.</td>
      <td>Net tax payable (17-18) </td>
      <td></td>
      <td></td>
      <td><?php echo $net_tax ?></td>
    </tr>
    <tr>
      <td colspan="5"> <center><b>Verification</b></center></td>
    </tr>
    <tr>
      <td colspan="5">I,&nbsp &nbsp <u><b><?php echo $row10['firstname'] ?></b></u>, son/daughter of <u><b><?php echo $row10['middlename'] ?></b></u> .working in the 
            capacity of .………………………......... (designation) do hereby certify<br/> that the information given
            above is true, complete and correct and is based on the books of account, documents, TDS<br/>
            statements, and other available records.</td>
    </tr>
    <tr>
      <td colspan="2"><b>Place...................</b></td>
      <td colspan="3">(Signature of person responcible<br/> for deduction of tax)</td>
    </tr>
    <tr>
      <td colspan="2"><b>Date...................</b></td>
      <td colspan="3"><b>Full Name: ............</b></td>
    </tr>





  
  </table>
  
</body>
</html>