<?php
	include '../config/constants.php';


	function sendAccountVerfication($token, $selector, $business_name, $to_name, $to_email){
		// allow for demo mode testing of emails
		define("DEMO", false); // setting to TRUE will stop the email from sending.

		// set the location of the template file to be loaded
		// $template_file = "../emails/templates/activate_account.php";

		// set the email 'from' information
		$email_from = SITE_NAME . " <" . SITE_EMAIL . ">";

		// create a list of the variables to be swapped in the html template
		$swap_var = array(
			"{SITE_ADDR}" => SITE_URL,
			"{EMAIL_LOGO_ICON}" => LOGO_ICON,
			"{EMAIL_LOGO_TEXT}" => LOGO_TEXT,
			"{EMAIL_TITLE}" => "Activate your Start Invoice Account | Start Invoice",
			"{CUSTOM_URL}" => SITE_URL . "/activate.php?selector=".$selector."&validate=" . $token,
			"{BUSINESS_NAME}" => $business_name,
			"{TO_NAME}" => $to_name,
			"{TO_EMAIL}" => $to_email,
		);

		// create the email headers to being the email
		$email_headers = "From: " . $email_from . "\r\nReply-To: " . $email_from . "\r\n";
		$email_headers .= "MIME-Version: 1.0\r\n";
		$email_headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		// load the email to and subject from the $swap_var
		$email_to = $swap_var['{TO_EMAIL}'];
		$email_subject = $swap_var['{EMAIL_TITLE}']; // you can add time() to get unique subjects for testing: time();

		// load in the template file for processing (after we make sure it exists)
		// if (file_exists($template_file)) {
		// 	$email_message = file_get_contents($template_file);
		// } else {
		// 	die("Unable to locate your template file");
		// }

		$email_message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
						<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
						
						<body style="margin:0px; background: #f8f8f8; ">
							<div width="100%" style="background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #514d6a;">
								<div style="max-width: 700px; padding:50px 0;  margin: 0px auto; font-size: 14px">
									<table border="0" cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 20px">
										<tbody>
											<tr>
												<td style="vertical-align: top; padding-bottom:30px;" align="center"><a href="{SITE_ADDR}" target="_blank"><img src="{EMAIL_LOGO_ICON}" alt="Start Invoice Icon" style="border:none; height:70px;"><br/>
									<img src="{EMAIL_LOGO_TEXT}" alt="Start Invoice Text" style="border:none; width: 200px;"></a> </td>
											</tr>
										</tbody>
									</table>
									<div style="padding: 40px; background: #fff;">
										<table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
											<tbody>
												<tr>
													<td style="border-bottom:1px solid #f6f6f6;">
														<h1 style="font-size:16px; font-family:arial; margin:0px; font-weight:bold;">Hello {TO_NAME},</h1><br>
														<h3 style="margin-top:0px; color:#1E88E5; text-align: center;">We are excited you registered </h3>
														<h1 style="margin-top:-10px; color:#1E88E5; text-align: center;">{BUSINESS_NAME}</h1>
														<h3 style="margin-top:-10px; color:#1E88E5; text-align: center;"> on Start Invoice.</h3>
													</td>
												</tr>
												<tr>
													<td style="padding:10px 0 30px 0;">
														<p style="text-align: center;">You\'re just one step away from activating your business account. Once your account is activated, you will be able to manage your staff, inventory and ultimately produce and manage invoices.</p>
														<center>
															<a href="{CUSTOM_URL}" target="_blank" style="display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #1E88E5; border-radius: 60px; text-decoration:none;">Activate Your Account</a>
														</center>
														<b>- Thanks (Start Invoice Team)</b> </td>
												</tr>
												<tr>
													<td style="border-top:1px solid #f6f6f6; padding-top:20px; color:#777; text-align: justify;">If the button above does not work, try copying and pasting the URL into your browser. If you continue to have problems, please feel free to contact us at info@startinvoice.tk</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div style="text-align: center; font-size: 12px; color: #b2b2b5; margin-top: 20px">
										<p> Powered by Start Invoice
											<br>
											<!-- <a href="javascript: void(0);" style="color: #b2b2b5; text-decoration: underline;">Unsubscribe</a>  --></p>
									</div>
								</div>
							</div>
						</body>
						
						</html>';

		// search and replace for predefined variables, like SITE_ADDR, {NAME}, {lOGO}, {CUSTOM_URL} etc
		foreach (array_keys($swap_var) as $key) {
			if (strlen($key) > 2 && trim($swap_var[$key]) != '') {
				$email_message = str_replace($key, $swap_var[$key], $email_message);
			}
		}

		// display the email template back to the user for final approval
		// echo $email_message;

		// check if the email script is in demo mode, if it is then dont actually send an email
		if (DEMO) {
			die("<hr /><center>This is a demo of the HTML email to be sent. No email was sent. </center>");
		}

		// send the email out to the user
		mail($email_to, $email_subject, $email_message, $email_headers);
	}