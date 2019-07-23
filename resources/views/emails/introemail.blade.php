<!doctype html>
<html ⚡4email>
<head>
  <meta charset="utf-8">
	<style amp4email-boilerplate>body{visibility:hidden}</style>
	<style amp-custom>
	body { padding:0 ; margin:0 ; display:block ; min-width:100% ; width:100% ; background: #fff; -webkit-text-size-adjust:none }
	a { color:#66c7ff; text-decoration:none }
	p { padding:0 ; margin:0  }
	img { -ms-interpolation-mode: bicubic; /* Allow smoother rendering of resized image in Internet Explorer */ }
	.mcnPreviewText { display: none ; }
	input:focus {
	  outline: -webkit-focus-ring-color auto 0px
	}


	/* Mobile styles */
	@media  only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
		.mobile-shell { width: 100% ; min-width: 100% ; }
		.bg { background-size: 100% auto ;}

		.text-header,
		.m-center { text-align: center ; }

		.center { margin: 0 auto ; }
		.container { padding: 20px 10px  }

		.td { width: 100% ; min-width: 100% ; }

		.m-br-15 { height: 15px ; }
		.p30-15 { padding: 30px 15px ; }
		.p30-10 { padding: 30px 10px ; }
		.pl10 { padding-left: 10px ; }

		.m-td,
		.m-hide { display: none ; width: 0 ; height: 0 ; font-size: 0 ; line-height: 0 ; min-height: 0 ; }

		.m-block { display: block ; }

		.fluid-img img { width: 100% ; max-width: 100% ; height: auto ; }

		.column,
		.column-top,
		.column-empty,
		.column-empty2,
		.column-dir-top { float: left ; width: 50% ; display: block ; }

		.column-empty { padding-bottom: 10px ; }
		.column-empty2 { padding-bottom: 30px ; }

		.content-spacing { width: 15px ; }


	}
			.block { width: 70%; border-radius: 3px;}
	.rating {
			--star-size: 3;  /* use CSS variables to calculate dependent dimensions later */
			padding: 0;  /* to prevent flicker when mousing over padding */
			border: none;  /* to prevent flicker when mousing over border */
			unicode-bidi: bidi-override; direction: rtl;  /* for CSS-only style change on hover */
			text-align: center;  /* revert the RTL direction */
			user-select: none;  /* disable mouse/touch selection */
			font-size: 3em;  /* fallback - IE doesn't support CSS variables */
			font-size: calc(var(--star-size) * 1em);  /* because `var(--star-size)em` would be too good to be true */
			cursor: pointer;
			/* disable touch feedback on cursor: pointer - http://stackoverflow.com/q/25704650/1269037 */
			-webkit-tap-highlight-color: rgba(0,0,0,0);
			-webkit-tap-highlight-color: transparent;
			margin-bottom: 1em;
		}
		/* the stars */
		.rating > label {
			display: inline-block;
			position: relative;
			width: 1.1em;  /* magic number to overlap the radio buttons on top of the stars */
			width: calc(var(--star-size) / 3 * 1.1em);
		}
		.rating > *:hover,
		.rating > *:hover ~ label,
		.rating:not(:hover) > input:checked ~ label {
			color: transparent;  /* reveal the contour/white star from the HTML markup */
			cursor: inherit;  /* avoid a cursor transition from arrow/pointer to text selection */
		}
		.rating > *:hover:before,
		.rating > *:hover ~ label:before,
		.rating:not(:hover) > input:checked ~ label:before {
			content: "★";
			position: absolute;
			left: 0;
			color: gold;
		}
		.rating > input {
			position: relative;
			transform: scale(3);  /* make the radio buttons big; they don't inherit font-size */
			transform: scale(var(--star-size));
			/* the magic numbers below correlate with the font-size */
			top: -0.5em;  /* margin-top doesn't work */
			top: calc(var(--star-size) / 6 * -1em);
			margin-left: -2.5em;  /* overlap the radio buttons exactly under the stars */
			margin-left: calc(var(--star-size) / 6 * -5em);
			z-index: 2;  /* bring the button above the stars so it captures touches/clicks */
			opacity: 0;  /* comment to see where the radio buttons are */
			font-size: initial; /* reset to default */
		}
	</style>
			<script async src="https://cdn.ampproject.org/v0.js"></script>
			<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
			<script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
		</head>
		<body class="body" style="padding:0; margin:0 ; display:block ; min-width:100% ; width:100% ; background:#fff;">
			<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FDFDFF">
				<tr>
					<td align="center" valign="top">
						<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
							<tr>
								<td class="td container" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; margin:0; font-weight:normal; padding:55px 0px;">
									<!-- Header -->
									<table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td class="p30-15" style="padding: 0px 30px 30px 30px;">
												<table width="100%" border="0" cellspacing="0" cellpadding="0">
													<tr>
														<th class="column-top" width="200" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
																						<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td class="img m-center" style="font-size:0pt; line-height:0pt; text-align:center;">
																			<amp-img
																			  src="https://wknown.com/images/wk.jpg"
																			  width="650" height="366"
																			  layout="responsive">
																			</amp-img>
																		</td>
																	</tr>
																</table>
																				</th>
														<th class="column-empty" width="1" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;"></th>
													</tr>
												</table>
											</td>
										</tr>
									</table>
									<!-- END Header -->

										<!-- Intro -->
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<td style="padding-bottom: 10px;">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tr>
															<td class="tbrr p30-10" style="padding: 60px 30px; border-radius:26px 26px 0px 0px;" bgcolor="#12325c">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td class="h1 pb25" style="color:#4fe97f; font-family:'Muli', Arial,sans-serif; font-size:40px; line-height:46px; text-align:center; padding-bottom:25px;">Thank you for Moving with us!</td>
																	</tr>
																	<tr>
																		<td class="text-center pb25" style="color:#c1cddc; font-family:'Muli', Arial,sans-serif; font-size:16px; line-height:30px; text-align:left; padding-bottom:25px;">
																			We are glad you have choosen our company and we hope you recommend us to your friends and family! Please, leave us a feedback on how we did.
																		</td>
																	</tr>
																	<tr>
																		<td class="text-center" style="color:#c1cddc; font-family:'Muli', Arial,sans-serif; font-size:30px; line-height:30px; text-align:center; padding-bottom:25px;">
																			Rate us
																		</td>
																	</tr>
																</table>
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td class="pb25" style="color:#fff; font-family:'Muli', Arial,sans-serif; font-size:20px; line-height:46px; text-align:center; padding-bottom:25px;">
																			<form action-xhr="https://wknown.com/api/emailamp"
                                        method="post">
																				<input type="radio"
																		      id="rating1"
																		      name="rating"
																		      value="3"
																		      on="change:step2.show"
																		      required>
																		    <label for="rating1">Great</label>

																		    <input type="radio"
																		      id="rating2"
																		      name="rating"
																		      value="2"
																		      on="change:step2.show">
																		    <label for="rating2">Not bad</label>

																		    <input type="radio"
																		      id="rating3"
																		      name="rating"
																		      value="1"
																		      on="change:step2.show">
																		    <label for="rating3">Meh</label>
																		  </div>
																		  <div class="m1"
																		    id="step2"
																		    hidden>
																		    <label class="block"
																		      for="info">Would you like to tell us more?</label>
																		    <textarea class="block"
																		      id="info"
																		      name="name"
																		      rows="5"></textarea>
																		  </div>
																			<br>
																		  <input type="submit" style="color: #ffffff; text-decoration: none; background: #dc3412; font-size: 14px;line-height: 18px; padding: 12px 30px;text-align: center;border-radius: 0px 22px 22px 22px;font-weight: bold; border-color:#dc3412;"
																		    value="Send feedback">
																		  <input type="reset"
																		    value="Clear">
																		  <div class="m1"
																		    submit-success>
																		    Thank you for submitting feedback.
																		  </div>
                                      </form>
																		</td>
																	</tr>
																</table>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
										<!-- END Intro -->

										<!-- Article / Full Width Image + Title + Copy + Button -->
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<td style="padding-bottom: 10px;">
													<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#0e264b">
														<tr>
															<td class="p30-15" style="padding: 50px 30px;">
																<table width="100%" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td class="h3 pb20" style="color:#ffffff; font-family:'Muli', Arial,sans-serif; font-size:25px; line-height:32px; text-align:left; padding-bottom:20px;">You can View your Moving Request Online</td>
																	</tr>
																	<tr>
																		<td class="text pb20" style="color:#ffffff; font-family:Arial,sans-serif; font-size:14px; line-height:26px; text-align:left; padding-bottom:20px;">
																			You always can view your Moving Request online. Use your email and password to login toyour account.
																		</td>
																	</tr>
																	<!-- Button -->
																	<tr>
																		<td align="left">
																			<table border="0" cellspacing="0" cellpadding="0">
																				<tr>
																					<td class="blue-button text-button" style="background:#dc3412; color:#c1cddc; font-family:'Muli', Arial,sans-serif; font-size:14px; line-height:18px; padding:12px 30px; text-align:center; border-radius:0px 22px 22px 22px; font-weight:bold;"><a href="https://localhost/cabinet/login" target="_blank" class="link-white" style="color:#ffffff; text-decoration:none;"><span class="link-white" style="color:#ffffff; text-decoration:none;">View Request</span></a></td>
																				</tr>
																			</table>
																		</td>
																	</tr>
																	<!-- END Button -->
																</table>
															</td>
														</tr>
													</table>
												</td>
											</tr>
										</table>
										<!-- END Article / Full Width Image + Title + Copy + Button -->
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tbody>
											<tr>
												<td class="p30-15 bbrr" style="padding: 50px 30px; border-radius:0px 0px 26px 26px;" bgcolor="#0e264b">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tbody>
														<tr>
															<td class="text-footer1 pb10"
																style="color:#c1cddc; font-family:&#39;Muli&#39;, Arial,sans-serif; font-size:16px; line-height:20px; text-align:center; padding-bottom:10px;">Company</td>
														</tr>
														<tr>
															<td class="text-footer2"
																style="color:#8297b3; font-family:&#39;Muli&#39;, Arial,sans-serif; font-size:12px; line-height:26px; text-align:center;">358 Commonwealth ave, 45
																<br><a href="mailto:kimtaras@gmail.com"
																	   style="text-decoration:none;">kimtaras@gmail.com<br><a
																		style="text-decoration:none;">4433542776</a></td>
														</tr>
														</tbody>
													</table>
												</td>
											</tr>
											<tr>
												<td class="text-footer3 p30-15" style="padding: 40px 30px 0px 30px; color:#475c77; font-family:&#39;Muli&#39;, Arial,sans-serif; font-size:12px; line-height:18px; text-align:center;">
													Powered by <a target="_blank" rel="noopener noreferrer" href="https://moving-crm.com" class="link2-u" style="color:#475c77; text-decoration:underline;">
														<span class="link2-u" style="color:#475c77; text-decoration:underline;">
															<amp-img
																src="https://wknown.com/images/wk.jpg"
																width="650" height="366"
																layout="responsive">
															</amp-img>
														</span>
													</a>
												</td>
											</tr>
											</tbody>
										</table>
									<!-- END Footer -->
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</body>
</html>
