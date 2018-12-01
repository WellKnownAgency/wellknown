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
			Get a FREE consultation. Improve your business with our Advertising, Marketing and Web Development solutions...
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
        My name is Alex with WellKnown Agency.</br>
        <p>We help different businesses to reach their goals in Web Design and Development, Search Engine Optimization, Content Marketing, and Online Advertising.<br>
        Our specialists did a little research about your business online. According to this study, we can mention 3 steps to improve your business and get higher results:</p>
        <ul>
          <li>Create new or change an existing Website</li>
          <li>Improve Search Engine positions, so you can get FREE customers for you business</li>
          <li>Create or Optimize Advertising Campaign</li>
        </ul>
        <p>I would love to tell you more.
          Would you be available for 15 minutes in the next few days to talk over the phone?</p>
          <div class="center">
            <a href="https://wknown.com" class="cta">View Website</a>
          </div>
        <p>Best Regards,
        <br>Taras</p>

			</div>

		</div>

		<div class="footer-junk">
			<p>Copyright © 2018 WellKnown Agency, All rights reserved.</p>
		</div>

	</div>
</body>
</html>
