<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-Blood Donation Forum</title>
<link href="Style.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript">
	$(function()
{
    var $dropdowns = $('li.dropdown'); // Specifying the element is faster for older browsers

    /**
     * Mouse events
     *
     * @description Mimic hoverIntent plugin by waiting for the mouse to 'settle' within the target before triggering
     */
    $dropdowns
        .on('mouseover', function() // Mouseenter (used with .hover()) does not trigger when user enters from outside document window
        {
            var $this = $(this);

            if ($this.prop('hoverTimeout'))
            {
                $this.prop('hoverTimeout', clearTimeout($this.prop('hoverTimeout')));
            }

            $this.prop('hoverIntent', setTimeout(function()
            {
                $this.addClass('hover');
            }, 250));
        })
        .on('mouseleave', function()
        {
            var $this = $(this);

            if ($this.prop('hoverIntent'))
            {
                $this.prop('hoverIntent', clearTimeout($this.prop('hoverIntent')));
            }

            $this.prop('hoverTimeout', setTimeout(function()
            {
                $this.removeClass('hover');
            }, 250));
        });

    /**
     * Touch events
     *
     * @description Support click to open if we're dealing with a touchscreen
     */
    if ('ontouchstart' in document.documentElement)
    {
        $dropdowns.each(function()
        {
            var $this = $(this);

            this.addEventListener('touchstart', function(e)
            {
                if (e.touches.length === 1)
                {
                    // Prevent touch events within dropdown bubbling down to document
                    e.stopPropagation();

                    // Toggle hover
                    if (!$this.hasClass('hover'))
                    {
                        // Prevent link on first touch
                        if (e.target === this || e.target.parentNode === this)
                        {
                            e.preventDefault();
                        }

                        // Hide other open dropdowns
                        $dropdowns.removeClass('hover');
                        $this.addClass('hover');

                        // Hide dropdown on touch outside
                        document.addEventListener('touchstart', closeDropdown = function(e)
                        {
                            e.stopPropagation();

                            $this.removeClass('hover');
                            document.removeEventListener('touchstart', closeDropdown);
                        });
                    }
                }
            }, false);
        });
    }
    
});
	
</script>

</head>

<body>

<div class="banner1">



<!--<div class="header">
<div class="menu">-->
<!--<div class="top"></div>-->
<!--<br /><br /><br />
<div class="baner">HelpMates Blood Danors</div>
<br /><br /><br />-->
                       <div id="tabsE">
					   <div class="main">
                                <ul>
                                        <!-- CSS Tabs -->
<li><a href="index.php"><span>Home</span></a></li>
<li><a href="member_registration.php"><span>Member Registration</span></a></li>
<li><a href="donor_registration.php"><span>Donor Registration</span></a></li>
<li><a href="contact_us.php"><span>Contact Us</span></a></li>

   <li class="dropdown">
        <a href="#"><span>Donars List</span></a>
        <ul class="submenu">
            <li><a href="a_positive.php">A+</a></li>
            <li><a href="a_negative.php">A-</a></li>
            <li><a href="b_positive.php">B+</a></li>
            <li><a href="b_negative.php">B-</a></li>
            <li><a href="ab_positive.php">AB+</a></li>
            <li><a href="ab_negative.php">AB-</a></li>
            <li><a href="o_positive.php">O+</a></li>
            <li><a href="o_positive.php">O-</a></li>
        </ul>
    </li>
	

                                </ul>
								
    </div>
  </div>
  
</div>

<div class="content">
<br /><br />
<div class="link">Quik Links<br />
<div class="links">
  <ul>
  <li><a href="about_us.php"><span>About Us</span></a><br />
    <br />
  </li>
<li><a href="tips.php"><span>Tips</span></a><br />
  <br />
</li>
<li><a href="Eligibility.php"><span>Eligibility<br />
  <br />
</span></a></li>
<li><a href="contct.php"><span>Contact Us</span></a><br />
</li>
</ul>
  <p>&nbsp;</p>
  </div>
</div>
<div id="apDiv1">
<h1>Tips for a Successful Donation</h1>
	  	
		
  	Printable Version
Tips for a Successful Donation
By following a few recommendations before, during and after your blood donation can help you make your donation experience as safe, successful and pleasant as possible.
Before Your Donation

    Blood Donation Tip - Eat HealthyMaintain a healthy iron level in your diet by eating iron rich foods, such as red meat, fish, poultry, beans, spinach, iron-fortified cereals and raisins.
    Get a good night's sleep.
    Drink an extra 16 oz. of water or nonalcoholic fluids before the donation.
    Eat a healthy meal before your donation. Avoid fatty foods, such as hamburgers, fries or ice cream before donating. (Fatty foods can affect the tests we do on your blood. If there is too much fat in your blood, your donation cannot be tested for infectious diseases and the blood will not be used for transfusion.)
    If you are a platelet donor, remember that your system must be free of aspirin for two days prior to donation.
    Remember to bring your donor card, driver's license or two other forms of ID.



</div>

</div>
<div id="apDiv2">
  <div class="log"><br />
    <br />
    <div class="loglinks"><a href="admin_login.php">&nbsp;&nbsp;Admin Login</a></div>
    <!--<div class="loglinks"><a href="member_login.php">&nbsp;&nbsp;Member Login</a></div>
   <!--- <div class="loglinks"><a href="donor_login.php">&nbsp;&nbsp;Donor Login</a></div>-->
  </div>
</div>
<div class="bottom" align="center">© Copyright 2015-2016. All rights are Reserved.</div>

</body>
</html>

