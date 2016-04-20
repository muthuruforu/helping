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
  <li><a href="#"><span>About Us</span></a><br />
    <br />
  </li>
<li><a href="#"><span>Tips</span></a><br />
  <br />
</li>
<li><a href="#"><span>Eligibility<br />
  <br />
</span></a></li>
<li><a href="#"><span>Contact Us</span></a><br />
</li>

   
	

</ul>
  <p>&nbsp;</p>
  </div>
 
</div>

<div id="apDiv1">
<form id="form1" name="form1" method="post" action="insert_member_info.php">
  <table class="tbl_form" width="461" height="431">
    <tr>
      <td class="cptn" colspan="4"><div align="center">MEMBER REGISTRATION</div></td>
      </tr>
    <tr>
      <td class="cptn" colspan="4">Login Informations </td>
    </tr>
    <tr>
    
      <td colspan="4">&nbsp;</td>
  </tr>
    <tr>
      <td width="155" height="31" class="field">User Name</td>
      <td width="33" class="field">:</td>
      <td colspan="2">
        <input type="text" name="uname" id="textfield" />      </td>
    </tr>
    <tr>
      <td class="field">Password</td>
      <td class="field">:</td>
      <td width="144">
        <input type="password" name="pass" id="textfield2" />      </td>
      <td width="109">Min 8 Character</td>
    </tr>
    <tr>
      <td class="field">Confirm Password</td>
      <td class="field">:</td>
      <td colspan="2">
        <input type="password" name="cpass" id="textfield3" />      </td>
    </tr>
    <tr>
      <td colspan="4" >&nbsp;</td>
      </tr>
    <tr>
      <td colspan="4" class="cptn">Basic Informations</td>
      </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td class="field">Name</td>
      <td class="field">:</td>
      <td colspan="2">
        <input type="text" name="name" id="textfield4" />      </td>
    </tr>
    <tr>
      <td class="field">Mobile Number</td>
      <td class="field">:</td>
      <td colspan="2">
        <input name="mob_num" type="text" id="textfield5" value="91" />      </td>
    </tr>
    <tr>
      <td class="field">E-mail ID</td>
      <td class="field">:</td>
      <td colspan="2">
        <input type="text" name="email" id="textfield6" />      </td>
    </tr>
    <tr>
      <td height="97" class="field">Message</td>
      <td class="field">:</td>
      <td colspan="2">
        <textarea name="msg" id="textarea" cols="30" rows="5"></textarea>      </td>
    </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2" align="right">
        <input type="submit" name="button" id="button" value="Submit" />      </td>
    </tr>
  </table>
  </form>
  
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
