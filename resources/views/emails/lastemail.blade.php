<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{'site_name' | option}</title>
    <style>
    body {
      font-family: sans-serif;
      background: #fff;
    }

    .email--background {
      background: #eee;
      padding: 10px;
    }
    .email--container, .pre-header {
      max-width: 500px;
      background: #fff;
      margin: 0 auto;
      overflow: hidden;
      border-radius: 5px;
    }
    .email--inner-container {
      padding: 0 5% 40px;
    }

    .pre-header {
      background: #eee;
      color: #eee;
      font-size: 5px;
    }

    img {
      max-width: 100%;
      display: block;
    }

    p {
      font-size: 16px;
      line-height: 1.5;
      color: #a2a2a2;
      margin-bottom: 30px;
    }

    .cta {
      display: inline-block;
      padding: 10px 20px;
      color: #fff !important;
      background: #dc3741;
      text-decoration: none;
      letter-spacing: 2px;
      text-transform: uppercase;
      border-radius: 5px;
      font-size: 13px;
    }

    .footer-junk {
      text-align: center;
      padding: 20px;
    }
    .footer-junk p {
      font-size: 10px;
      color: #bbbbbb;
    }
    .center {
      text-align: center;
    }
    .center-image {
      margin-top: 20px;
      margin-left: auto;
      margin-right: auto;
    }
    </style>
</head>
<body>
  <div class="email--background">

		<div class="pre-header">
			I know you are probably very busy with your business
		</div>

		<div class="email--container">
        <img
             src="https://wknown.com/images/wk.jpg"
             alt="{{ env('APP_NAME') }}" class="center-image"/>

			<div class="email--inner-container">
        @if ($lead->first_name == null)
        <p>Hi {{$lead->company}} team,</p>
        @else
        <p>Hi {{$lead->first_name}} {{$lead->last_name}} ,</p>
        @endif
        This is Alex one more time.</br>
        <p>
          You didn't reply to my previous emails, just wanna make sure you got them.
        </p>
        <p>
          Our team is still ready to provide you a proposition and help you increase sales.
          Let me know, please, if interested.
        </p>
        <p>Thank you, have a good day.</p>
          <div class="center">
            <a href="https://wknown.com" class="cta">View Website</a>
          </div>
        <p>Best Regards,
        <br>Alex</p>

			</div>

		</div>

		<div class="footer-junk">
			<p>Copyright © 2018 WellKnown Agency, All rights reserved.</p>
		</div>

	</div>
</body>
</html>
