<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order confirmation</title>
</head>
<style> 	body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }	table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }	img { -ms-interpolation-mode: bicubic; }	img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }	table { border-collapse: collapse !important; }	body  height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }	a[x-apple-data-detectors]  color: inherit !important; text-decoration: none !important; font-size: inherit !important; font-family: inherit !important; font-weight: inherit !important; line-height: inherit !important; }	div[style*="margin: 16px 0;"]  margin: 0 !important; } 	</style>	
<body>
    
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
<tr>
            <td bgcolor="#E7F9FF" align="center">					<table border="0" cellpadding="0" cellspacing="0" width="480">
                    <tbody>
<tr>
                        <td align="center" valign="top" style="padding: 40px 10px 40px 10px;">								<div style="display: block; font-family: Helvetica, Arial, sans-serif; color: #ffffff; font-size: 18px;" border="0"><img src="https://i.postimg.cc/h4mZndjZ/logo.png"></div>
                        </td>
                    </tr>
                </tbody>
</table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#E7F9FF" align="center" style="padding: 0px 10px 0px 10px;">					<table border="0" cellpadding="0" cellspacing="0" width="600">
                    <tbody>
<tr>
                        <td bgcolor="#ffffff" align="left" valign="top" style="padding: 30px 30px 20px 30px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; line-height: 48px;">								<h1 style="font-size: 32px; font-weight: 400; margin: 0;">Order Confirmation</h1>
                        </td>
                    </tr>
                </tbody>
</table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">					<table border="0" cellpadding="0" cellspacing="0" width="600">
                    <tbody>
<tr>
                        <td bgcolor="#ffffff" align="left">								<table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tbody>
<tr>
                <td colspan="2" style="padding-left:30px;padding-right:15px;padding-bottom:10px; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">                      <p>You have successfully submitted your Order. Here's the copy of your order details:&nbsp;</p>
                </td>
              </tr>
                                <tr>
                                    <th align="left" valign="top" style="padding-left:30px;padding-right:15px;padding-bottom:10px; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">Name</th>
                                    <td align="left" valign="top" style="padding-left:15px;padding-right:30px;padding-bottom:10px;font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">{{ $data->fname }} {{ $data->lname }}</td>
                                </tr>
              <tr>
                                    <th align="left" valign="top" style="padding-left:30px;padding-right:15px;padding-bottom:10px; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">Email</th>
                                    <td align="left" valign="top" style="padding-left:15px;padding-right:30px;padding-bottom:10px;font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">{{ $data->email }}</td>
                                </tr>
                <tr>
                                    <th align="left" valign="top" style="padding-left:30px;padding-right:15px;padding-bottom:10px; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">Service Type</th>
                                    <td align="left" valign="top" style="padding-left:15px;padding-right:30px;padding-bottom:10px;font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">{{ $data->translate_type }}</td>
                                </tr>
              <tr>
                                    <th align="left" valign="top" style="padding-left:30px;padding-right:15px;padding-bottom:30px; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">Translation Lang.</th>
                                    <td align="left" valign="top" style="padding-left:15px;padding-right:30px;padding-bottom:30px;font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">{{ $data->translate_from }} To {{ $data->translate_to }}</td>

                                </tr>
                                
                                
                                @if($data->extra_service)
                                <tr>
                                        <th align="left" valign="top" style="padding-left:30px;padding-right:15px;padding-bottom:30px; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">Aditional Service.</th>
                                    <td align="left" valign="top" style="padding-left:15px;padding-right:30px;padding-bottom:30px;font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">{{ $data->extra_service }}</td>    
                                    </tr>
                                    @endif

                                    <tr>
                                         <th align="left" valign="top" style="padding-left:30px;padding-right:15px;padding-bottom:30px; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">Total</th>
                                         <td align="left" valign="top" style="padding-left:15px;padding-right:30px;padding-bottom:30px;font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">{{ $data->grand_total }}$</td>
     
                                     </tr>

                            </tbody>
</table>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#ffffff" align="center">								<table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tbody>
<tr>
                                    <td bgcolor="#ffffff" align="center" style="padding: 30px 30px 30px 30px; border-top:1px solid #dddddd;">											<table border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
<tr>
                                                <td align="left" style="border-radius: 3px;" bgcolor="#289EFE">														<a href="https://queliztranslations.com/" target="_blank" style="font-size: 20px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 11px 22px; border-radius: 2px; border: 1px solid #289EFE; display: inline-block;">Visit Website</a>													</td>
                                            </tr>
                                        </tbody>
</table>
                                    </td>
                                </tr>
                            </tbody>
</table>
                        </td>
                    </tr>
                </tbody>
</table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;"> <table border="0" cellpadding="0" cellspacing="0" width="480">
                <tbody>
<tr>
                    <td bgcolor="#f4f4f4" align="left" style="padding: 30px 30px 30px 30px; color: #666666; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 18px;">							<p style="margin: 0;">This email was sent from Queliz Translations <a href="https://queliztranslations.com/contact/" target="_blank" style="color: #111111; font-weight: 700;">Contact Us Form</a><a>.</a></p>
<a>						</a></td>
                </tr>
                                </tbody>
</table>
    </td>
</tr>
</tbody>
</table>
</body>
</html>