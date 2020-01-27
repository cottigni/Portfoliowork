<?php  
include("includes/db-config.php");
include("includes/headerfooter.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EcoBuddy Homepage</title>
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
	<link rel="stylesheet" media="screen" href="css/homepage.css"/>
	<link rel="stylesheet" media="screen" href="css/resphomepage.css"/>

</head>

<body>

<!-- Navigation Bar -->
<div class="navbar">
  <a href="homepage.php">Home</a>
  <a href="ecoquiz.php">Quiz</a>
  <a href="aboutus.php">About Us</a>
  <a href="contactus.php">Contact</a>
</div>

<!-- The flexible grid (content) -->
<div class="row">
  <div class="side">
    <h2>How Eco Friendly is your Household?</h2>
    <h3>Click the Zero Waste Image below to take our Quiz:</h3>
    <a href="ecoquiz.php"/>
    <div class="zerowimg"></div>
    </a>
    <p>Click the image above to take the Quiz...We designed our quiz to allow you to see in real-time, just how environmentally conscious your household currently is, and simultaneously how you might be able to improve..</p>
    <h3>Related News Stories</h3>
    <section>
      <h5>How to reduce your environmental impact in broadstrokes</h5>
      An article by Reset.org <strong style="color:#479027;">below</strong> looking into the methods and idealogies that we can all apply to our daily lives if we wish to reduce our environmental impact.
    </section>
    <br>
    <a href="https://en.reset.org/act/reduce-your-ecological-footprint-0"/>
    <div class="prints">Click here for the full article</div>
    </a>
    <section>
      <h5>Effects of climate change on Canada</h5>
      An article by Climaterealityproject.org <strong style="color:#479027;">below</strong> outlining the effects that climate change is having and will have on Canada and its' citizens. So many times people still confuse climate change with superceded 'global warming' as a counter arguement, but forget that climate change is actually manifesting as far greater extremes of temperature, both hot and cold... This change in climate and residual effects are going to change all our lives in the years to come, read about it below..
    </section>
    <br>
    <a href="https://www.climaterealityproject.org/blog/how-climate-change-affecting-canada"/>
    <div class="extreme" style="color:white;">Click here for the full article</div>
    </a>
    <br>
    <section>
      <h5>Tips on reducing your carbon footprint in more detail</h5>
      An article by GetGreenNow.com <strong style="color:#479027;">below</strong> discussing the world health organisations feedback on climate change effecting communities globally and how you can make choices to positively effect your own contribution..
    </section>
    <br>
    <a href="https://get-green-now.com/reduce-carbon-footprint/"/>
    <div class="choices" style="color:white;">Click here for the full article</div>
    </a>
    <br>
  </div>
  <div class="main">
    <h2>Waste reduction methods in the home</h2>
    <h4>As an aide to everything else you're doing</h4>
    <h5>If you can incorporate some of the tips above to reduce your footprint that's amazing, perhaps you can also reduce your plastic use to help out?..
    </h5>
    <p>
    A separate, but equally far-reaching problem that our ecology is facing is plastic polution. Plastic is ubiquitous and has made our lives as human beings far more convenient, but also disposable... The problem is that most plastics are not being recycled and being throw in the regular trash or simply tossed on the ground as littering. This is having a profound impact on our environment, our bodies (through consumption of polluted water supplies), but most importantly our oceans. Plastic does not degrade for hundreds of years and is killing our wildlife and oceanic food supplies globally and agressively. Most estimates suggest there will be more plastic than fish in our oceans within decades! If this concerns you and you want to take action in your household, please check out the article below from the Canadian Wildlife Foundation by clicking the image of our cat reading a vital book on the subject:
    </p>
    <a href="http://blog.cwf-fcf.org/index.php/en/reduce-your-plastic-footprint/?gclid=CjwKCAiA8qLvBRAbEiwAE_ZzPQbwajC1Dbvbilxf4qLLXMIe0aq0UhXXktMuQskmQvvuzbqJ9V2MWhoCdcEQAvD_BwE"/>
    <div class="plastic" style="color:white;">Click here for the full article</div>
    </a>
    <br>
    <h2>Ways you can help the fight</h2>
    <h5>If you're interested in making a difference by supporting organizations making a difference, please check out all the links below:</h5>
    <p>
    <a href="https://plasticoceans.ca/?matchtype=b&network=g&device=c&adposition=1t1&keyword=ways%20to%20reduce%20plastic&gclid=CjwKCAiA8qLvBRAbEiwAE_ZzPXs_-XPefjLb0d54USeg_96gtCypZkUFTJbwZ467SmgAzGTqw7bLzBoCNVkQAvD_BwE"/>Plastic Oceans.ca</a>
    </p>
     <p>
    <a href="https://www.conservation.org/stories/11-climate-change-facts-you-need-to-know?gclid=CjwKCAiA8qLvBRAbEiwAE_ZzPaQPqypEk-6PwUS3fBM_epmzH3Jkt6b2LcMyleAFuNUDpaqrN2IX_xoCCcYQAvD_BwE"/>Conservation.org</a>
    </p>
     <p>
    <a href="https://www.earthday.org/campaigns/climate-change/?gclid=CjwKCAiA8qLvBRAbEiwAE_ZzPU0QP61Z0QNLtI2R5YayRi_HfkYa0VManZt1FwRJxJAi853czHUQ7xoCqwgQAvD_BwE"/>Earthday.org</a>
    </p>
     <p>
    <a href="https://environmentaldefence.ca/?gclid=CjwKCAiA8qLvBRAbEiwAE_ZzPZDve-6oZPAFdipkwO78FcnJcambI_SfqBRLvEWo1amkraRRaITEXRoCDcUQAvD_BwE"/>EnvironmentalDefence.ca</a>
    </p>
    <div class="rocketwaste"></div>
    <h5 style="color: #479027;">"Each one of us can make a difference, together we make change" - Barbara Mikulski</h5>
  </div>
</div>

<div class="footer">
  <h2>EcoBuddy - Do what you can</h2>
</div>

<button onclick="topFunction()" id="topBtn" title="Go to top">Go to Top of Page</button>

<script src="javascript/main.js" type="text/javascript"></script>
</body>
</html>