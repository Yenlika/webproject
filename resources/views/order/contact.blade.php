<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<style>
		body {
			margin: 0;
			padding: 0;
			background: #b4d2cb;
		}

		table,
		td,
		tr {
			vertical-align: top;
			border-collapse: collapse;
		}
		.contact{
	display: flex;
	justify-content: center;
	    margin-top: 30px;
}
.belifon{
	display: flex;
	justify-content: space-around;
	background: #F8F8FF;
	width: 600px;
	border-radius: 5px;
}
.oformlenie input{
	display: block;
	margin:15px;
	border-radius: 10px;
	width: 250px;
	background-color:#DCDCDC;
	 color: #2F4F4F;
	 outline: none;
	 box-sizing: border-box;
	border: 3px solid #ccc;
	height: 35px;
}
.oformlenie p{
	   
    line-height: 2;
  
}
textarea{
	border-radius: 15px;
    border: 3px solid #ccc;
	background-color:#DCDCDC;
	 outline: none;
	 color: #2F4F4F;
}
input[type=submit] {
	font-size: 20px;
	background-color: #A9A9A9;
	font-weight: bold;
}
input[type=submit]:hover {
	font-size: 20px;
	background-color: #DCDCDC;
	font-weight: bold;
}
input[type=text]:hover {
	
	background-color: #778899;
	
}
textarea:hover {
	
	background-color: #778899;
	
}
.oformlenie{
	text-align: center;
}
.oformlenie form{
	display: table-caption;
}

#navbarToggler{
	margin-top: 10px;
}
	</style>

</head>
<body>
	@extends('order.languages')
	@section('content')
	<tbody>
			<tr style="vertical-align: top;" valign="top">
				<td style="word-break: break-word; vertical-align: top;" valign="top">
					<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color:#b4d2cb"><![endif]-->
					<div style="background-color:transparent;">
						<div class="block-grid " style="min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #ffffff;">
							<div style="border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;">
								<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px"><tr class="layout-full-width" style="background-color:#ffffff"><![endif]-->
								<!--[if (mso)|(IE)]><td align="center" width="600" style="background-color:#ffffff;width:600px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->
								<div class="col num12" style="min-width: 320px; max-width: 600px; display: table-cell; vertical-align: top; width: 600px;">
									<div class="col_cont" style="width:100% !important;">
										<!--[if (!mso)&(!IE)]><!-->
										<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
											<!--<![endif]-->
											<table class="divider" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" role="presentation" valign="top">
												<tbody>
													<tr style="vertical-align: top;" valign="top">
														<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;" valign="top">
															<table class="divider_content" border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 10px; width: 100%;" align="center" role="presentation" height="10" valign="top">
																<tbody>
																	<tr style="vertical-align: top;" valign="top">
																		<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" height="10" valign="top"><span></span></td>
																	</tr>
																</tbody>
															</table>
														</td>
													</tr>
												</tbody>
											</table>
											<!--[if (!mso)&(!IE)]><!-->
										</div>
										<!--<![endif]-->
									</div>
								</div>
								<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
								<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
							</div>
						</div>
					</div>
					<div style="background-color:transparent;">
						<div class="block-grid two-up" style="min-width: 320px; max-width: 600px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #ffffff;">
							<div style="border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;">
								<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px"><tr class="layout-full-width" style="background-color:#ffffff"><![endif]-->
								<!--[if (mso)|(IE)]><td align="center" width="300" style="background-color:#ffffff;width:300px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 30px; padding-left: 30px; padding-top:15px; padding-bottom:15px;"><![endif]-->
								<div class="col num6" style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 300px; width: 300px;">
									<div class="col_cont" style="width:100% !important;">
										<!--[if (!mso)&(!IE)]><!-->
										<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:15px; padding-bottom:15px; padding-right: 30px; padding-left: 30px;">
											<!--<![endif]-->
											<div class="img-container center fixedwidth" align="center" style="padding-right: 0px;padding-left: 0px;">
												<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 0px;padding-left: 0px;" align="center"><![endif]--><a href="http://www.example.com/" target="_blank" style="outline:none" tabindex="-1"><img class="center fixedwidth" align="center" border="0" src="https://d1oco4z2z1fhwp.cloudfront.net/templates/default/3241/logofs.png" alt="Store Logo" title="Store Logo" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 204px; display: block;" width="204"></a>
												<!--[if mso]></td></tr></table><![endif]-->
											</div>
											<!--[if (!mso)&(!IE)]><!-->
										</div>
										<!--<![endif]-->
									</div>
								</div>
								<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
								<!--[if (mso)|(IE)]></td><td align="center" width="300" style="background-color:#ffffff;width:300px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 30px; padding-left: 30px; padding-top:15px; padding-bottom:15px;"><![endif]-->
								<div class="col num6" style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 300px; width: 300px;">
									<div class="col_cont" style="width:100% !important;">
										<!--[if (!mso)&(!IE)]><!-->
										<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:15px; padding-bottom:15px; padding-right: 30px; padding-left: 30px;">
											<!--<![endif]-->
											<table width="100%" cellpadding="0" cellspacing="0" border="0" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" valign="top">
												<tr style="vertical-align: top;" valign="top">
													<td style="word-break: break-word; vertical-align: top; padding-top: 5px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px; text-align: center; font-size: 0px;" align="center" valign="top">
														<div class="menu-links">
															<!--[if mso]>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" align="center">
<tr>
<td style="padding-top:0px;padding-right:15px;padding-bottom:0px;padding-left:15px">
<![endif]--><a href="{{ route('store', ['lang' => App::getLocale()]) }}" id ="menua" style="padding-top:0px;padding-bottom:0px;padding-left:15px;padding-right:15px;display:inline;color:#212021;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;font-size:14px;text-decoration:none;letter-spacing:undefined;">{{__('Women')}}</a>
															<!--[if mso]></td><td style="padding-top:0px;padding-right:15px;padding-bottom:0px;padding-left:15px"><![endif]--><a href="{{ route('store', ['lang' => App::getLocale()]) }}"   id ="menua" style="padding-top:0px;padding-bottom:0px;padding-left:15px;padding-right:15px;display:inline;color:#212021;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;font-size:14px;text-decoration:none;letter-spacing:undefined;">{{__('Men')}}</a>
															<!--[if mso]></td><td style="padding-top:0px;padding-right:15px;padding-bottom:0px;padding-left:15px"><![endif]--><a href="{{ route('contact', ['lang' => App::getLocale()]) }}"   id ="menua" style="padding-top:0px;padding-bottom:0px;padding-left:15px;padding-right:15px;display:inline;color:#212021;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;font-size:14px;text-decoration:none;letter-spacing:undefined;">{{__('Contact')}} </a>
															<!--[if mso]></td></tr></table><![endif]-->
														</div>
													</td>
												</tr>
											</table>
											<!--[if (!mso)&(!IE)]><!-->
										</div>
										<!--<![endif]-->
									</div>
								</div>
								<!--[if (mso)|(IE)]></td></tr></table><![endif]-->
								<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->
							</div>
						</div>
					</div>
						<div class="contact" id = "3">
		<div class="belifon">
		<div><img src="https://www.modlr.co/images/solutions/key-features/notification-support-01.png" alt="" width="200" style = "margin-top:80px;"></div>
		<div class="oformlenie">
			<h3 style="font-weight: bold;">{{__("Get in touch")}}</h3>
			<form action="{{ route('mycontact') }}" method="POST" enctype="multipart/form-data">
				@csrf
			<input type="text" name="FirstName" placeholder="{{__('First Name')}}">
			<input type="text"  name="LastName" placeholder="{{__('Last Name')}}">
			<input type="text"  name="Email" placeholder="{{__('Email')}}">
			<textarea name="mess" name="MyMessage" id="" cols="32" rows="7"  placeholder="{{__('Message')}}"></textarea>
			<p>{{__("or")}} <br>{{__("you have idea for look then upload file(image)")}}</p>
			<input type="file" name = "Photo"  accept=".png, .jpeg, .pdf,.docx">
           <input type="submit"  href="{{ route('mail') }}" value="{{__('Send')}}">
		</form>
		</div>
	</div>
</div>
				</td>
			</tr>
		</tbody>
		@endsection
</body>
</html>