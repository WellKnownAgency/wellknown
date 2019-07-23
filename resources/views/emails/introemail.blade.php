<!doctype html>
<html ⚡4email>
	<head>
  <meta charset="utf-8">
	<script async src="https://cdn.ampproject.org/v0.js"></script>
	<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
	<script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>

	<style amp4email-boilerplate>body{visibility:hidden}</style>
	<style amp-custom>
		.container {
      max-width:550px;
      margin: auto;
      font-family: sans-serif;
			font-size: 1em;
      padding: 0.3em;
      text-align: center;

    }
		.border-around {
			border: 1px solid #dfe1e5;
			border-radius: 24px;
			padding: 0.3em;
		}
		.fixed-container {
     position: relative;
     width: 120px;
     height: 120px;
		 text-align: center;
		 margin: auto;
   }
	  .h1 {
			color:#4fe97f; font-family:'Muli', Arial,sans-serif; font-size:34px; line-height:42px; text-align:center; padding-bottom:1px;
		}
		.m1 {
      margin: 1em 0;
    }

		.block {
      display: block;
      width: 100%;
    }

		.color-main {
			color: #dc3741;
		}

		.background-color-main {
			background: #dc3741;
		}
		.border-color-main {
		 	border-color:#dc3412;
	 	}
		.textarea {
			margin: auto;
			font-size: 1em;
			width: 70%;
			border: 1px solid #dfe1e5;
			border-radius: 24px;
			padding: 0.5em;
		}

		.footer {
			font-size:0.6em;
			padding: 20px 30px 0px 30px; color:#475c77;line-height:18px; text-align:center;
		}

		p {
			margin-block-start: 0.3em;
    	margin-block-end: 0.3em;
		}

	</style>
</head>
	<body>
		<div class="container">
			<div class="border-around">
				<div class="fixed-container">
					<amp-img
						src="https://loop-invest.biz/images/avatars/1533962107.jpg"
						layout="fill">
					</amp-img>
	    	</div>
				<div>
					<h1 class="h1">Thank you for Moving with us!</h1>
					<p>Thank you for choosing <strong class="color-main">COMPANY</strong>. <br>Your feedback is really important for us.</p>
					<h2 class="h2">Your Feedback</h2>
				</div>
				<div class="m1">
					<div>
						<form action-xhr="https://wknown.com/api/emailamp"
						method="post">

						<input type="radio"
							id="rating3"
							name="rating"
							value="1"
							on="change:step2.show">
						<label class="ratingl" for="rating3">1 </label>

						<input type="radio"
							id="rating2"
							name="rating"
							value="2"
							on="change:step2.show">
						<label class="ratingl" for="rating2">2 </label>

						<input type="radio"
							id="rating1"
							name="rating"
							value="3"
							on="change:step2.show"
							required>
						<label class="ratingl" for="rating1">3 </label>

						<input type="radio"
							id="rating4"
							name="rating"
							value="4"
							on="change:step2.show">
						<label class="ratingl" for="rating4">4 </label>

						<input type="radio"
							id="rating5"
							name="rating"
							value="5"
							on="change:step2.show">
						<label class="ratingl" for="rating5">5</label>
					</div>
					<div class="m1"
						id="step2"
						hidden>
						<label class="block"
							for="info">Would you like to tell us more?</label>
							<br>
						<textarea class="block textarea"
							id="info"
							name="name"
							rows="5"></textarea>
					</div>
					<br>
					<input type="submit" class="background-color-main border-color-main" style="color: #ffffff; text-decoration: none; font-size: 14px;line-height: 18px; padding: 12px 30px;text-align: center;border-radius: 0px 22px 22px 22px;font-weight: bold;"
						value="Send Feedback">
						<div submit-success>
							<template type="amp-mustache">
								<p>Thanks for your feedback!</p>
							</template>
						</div>
						<div submit-error>
							<template type="amp-mustache">
								Looks like something went wrong. Please try to rate again.
							</template>
						</div>
					</form>
				</div>
			</div>
			<div class="footer">
				<div>
					<p>You recieved this email as a feedback of moving services you have been provided before. If you are not interested you can simply ignore this email.
					<p>COMPANY</p>
					<p>ADDRESS</p>
					<p>PHONE</p>
					<p>EMAIL</p>
				</div>
				<div>
					Powered by <br>
					<br>
					<a target="_blank" rel="noopener noreferrer" href="https://moving-crm.com" class="link2-u" style="color:#475c77; text-decoration:underline;">
						<span class="link2-u" style="color:#475c77; text-decoration:underline;">
							<amp-img
								src="https://scontent.fbed1-2.fna.fbcdn.net/v/t1.0-9/59845769_2292395487685197_192792560702324736_n.png?_nc_cat=107&_nc_oc=AQnUc989aAaRF7eFzRpgw0WntOmdjKziGcVxg6CKKDYUPnEP5iwjYzlHscUdr6XUEn-SHwdFqdBJ4xnvYU5Xn3mZ&_nc_ht=scontent.fbed1-2.fna&oh=680f6ad651607a6df078d3f70be8c262&oe=5DEB3D9A"
								width="150" height="30">
							</amp-img>
						</span>
					</a>
				</div>
			</div>
		</div>
	</body>
</html>
