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

<script type="text/javascript">

     function validate()
{
  var Name=document.form1.nam.value;
  var age=document.form1.mob.value;
   var gender=document.form1.email.value;
    var dob=document.form1.msg.value;
   
    

if(Name=='')
  {
    window.alert("Please Enter Name!");
    document.form1.nam	.focus();
    return false;

 }

 if(age=='')
  {
    window.alert("Please Enter Mobile Number!");
    document.form1.mob.focus();
    return false;

 }
 if(gender=='')
  {
    window.alert("Please Enter Email!");
    document.form1.email.focus();
    return false;

 }
 if(dob=='')
  {
    window.alert("Enter Message!");
    document.form1.msg.focus();
    return false;

 }
 
}


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
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br />
<div id="apDiv111">
<form  name="form1" method="post" action="insert_contact_info.php" onSubmit="return validate()">
  <table class="tbl_form" width="461" height="278">
    <tr>
      
      </tr>
    <tr>
      <td colspan="3" class="cptn">Contact Us</td>
      </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
      </tr>
    <tr>
      <td class="field">Name</td>
      <td class="field">:</td>
      <td>
        <input type="text" name="nam"  />      </td>
    </tr>
    <tr>
      <td class="field">Mobile Number</td>
      <td class="field">:</td>
      <td>
        <input type="text" name="mob"  />      </td>
    </tr>
    <tr>
      <td class="field">E-mail ID</td>
      <td class="field">:</td>
      <td>
        <input type="text" name="email"  />      </td>
    </tr>
    <tr>
      <td height="97" class="field">Message</td>
      <td class="field">:</td>
      <td>
        <textarea name="msg"  cols="30" rows="5"></textarea>      </td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;
	  
      
      </td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td align="right">
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
<div class="bottom1" align="center">© Copyright 2015-2016. All rights are Reserved.</div>

</body>
</html>
