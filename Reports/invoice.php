<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 

session_start();

$client_name = $_SESSION['client_name'];

$client_address = $_SESSION['client_address'];

$client_county = $_SESSION['client_county'];

$client_charge = $_SESSION['client_charge'];

$client_rate_ID = $_SESSION['client_rate_ID'];

$client_miles_travelled = $_SESSION['client_miles_travelled'];

$client_days_rented = $_SESSION['client_days_rented'];

$client_mile_rate = $_SESSION['client_mile_rate'];

$client_days_rate = $_SESSION['client_days_rate'];


?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    .auto-style1 {
		font-size: x-large;
	}
    .auto-style2 {
		text-align: center;
	}
    .auto-style3 {
		text-align: left;
	}
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="4">
                    <table>
                        <tr>
                            <td class="title" style="width: 880px">
                                <img alt="" height="158" src="../../../ST3001/society/ec2.jpg" width="296" />
                            </td>
                            
                            <td class="auto-style3">
                                <strong><span class="auto-style1">Invoice</span></strong>&nbsp;
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr>
                <td colspan="4">
                    <table>
                        <tr>
                            <td style="width: 817px">
                                Executive Cars Ltd.<br>
                                1 Stephen's 
								Green<br>
                                Dublin, D2WF9L
                            </td>
                            
                            <td class="auto-style2">
                               <?php echo $client_name.","; ?><br>
                                <?php echo $client_address."," ; ?><br>
                                <?php echo $client_county; ?>
                               
                                                           </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td style="width: 277px; height: 33px;">
                    Car Class Rented</td>
                
                <td style="width: 277px; height: 33px;">
                    </td>
                
                <td style="width: 277px; height: 33px;">
                    </td>
                
                <td style="width: 282px; height: 33px">
                    </td>
            </tr>
            
            <tr class="details">
                <td style="width: 277px">
                     <?php  echo $client_rate_ID;  ?>    
                     </td>
                
                <td style="width: 277px">
                    &nbsp;</td>
                
                <td style="width: 277px">
                    &nbsp;</td>
                
                <td style="width: 282px">
                    &nbsp;</td>
            </tr>
            
            <tr class="heading">
                <td style="width: 277px">
                    &nbsp;</td>
                
                <td style="width: 277px" class="auto-style2">
                    Actual</td>
                
                <td style="width: 277px" class="auto-style2">
                    Rate</td>
                
                <td class="auto-style2" style="width: 282px">
                    Total
                </td>
            </tr>
            
            <tr class="item">
                <td style="width: 277px">
                    Miles</td>
                
                <td style="width: 277px" class="auto-style2">
                    <?php echo $client_miles_travelled; ?></td>
                
                <td style="width: 277px" class="auto-style2">
                    <?php echo $client_mile_rate; ?></td>
                
                <td class="auto-style2" style="width: 282px">
                     <?php echo ($client_mile_rate*$client_miles_travelled); ?>
                </td>
            </tr>
            
            <tr class="item">
                <td style="width: 277px">
                    Days</td>
                
                <td style="width: 277px" class="auto-style2">
                    <?php echo $client_days_rented; ?> </td>
                
                <td style="width: 277px" class="auto-style2">
                    <?php echo $client_days_rate; ?></td>
                
                <td class="auto-style2" style="width: 282px">
                    <?php echo ($client_days_rented*$client_days_rate); ?></td>
            </tr>
            
            <tr class="item last">
                <td style="width: 277px">
                    &nbsp;</td>
                
                <td style="width: 277px">
                    &nbsp;</td>
                
                <td style="width: 277px">
                    &nbsp;</td>
                
                <td class="auto-style2" style="width: 282px">
                    <?php echo $client_charge; ?>
                </td>
            </tr>
            
            </table>
    </div>
</body>
</html>