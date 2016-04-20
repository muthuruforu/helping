<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-Blood Donation Forum</title>
<link href="Style.css" rel="stylesheet" type="text/css" />
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
		
<script type="text/javascript">

     function validate()
{
  var Name=document.form1.name.value;
  var age=document.form1.age.value;
   var gender=document.form1.gn.value;
    var dob=document.form1.dob.value;
    var weight=document.form1.weight.value;
     var BloodGroup=document.form1.bg.value;
      var state=document.form1.state.value;
       var city=document.form1.city.value;
        var pincode=document.form1.pc.value;
         var mob_num=document.form1.mob_num.value;
          var email=document.form1.email.value;

if(Name=='')
  {
    window.alert("Please Enter Name!");
    document.form1.name.focus();
    return false;

 }

 if(age=='')
  {
    window.alert("Please Enter age!");
    document.form1.age.focus();
    return false;

 }
 if(gender=='')
  {
    window.alert("Please Select gender!");
    document.form1.gn.focus();
    return false;

 }
 if(dob=='')
  {
    window.alert("Enter Roll dob!");
    document.form1.dob.focus();
    return false;

 }
 if(weight=='')
  {
    window.alert("Please Select weight!");
    document.form1.weight.focus();
    return false;

 }
 if(BloodGroup=='')
  {
    window.alert("Please Select BloodGroup!");
    document.form1.bg.focus();
    return false;

 }
 if(state=='')
  {
    window.alert("Please Select state!");
    document.form1.state.focus();
    return false;

 }
 if(city=='')
  {
    window.alert("Please Select city!");
    document.form1.city.focus();
    return false;

 }
 if(pincode=='')
  {
    window.alert("Please Select pincode!");
    document.form1.pc.focus();
    return false;

 }
 if(mob_num=='')
  {
    window.alert("Please Select mob_num!");
    document.form1.mob_num.focus();
    return false;

 }
 if(email=='')
  {
    window.alert("Please Select email!");
    document.form1.email.focus();
    return false;

 }


}


</script>
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
<form id="form1" name="form1" method="post" action="insert_donor_info.php" onSubmit="return validate()">
  <table class="tbl_form" width="461" height="431">
    <tr>
      <td class="cptn" colspan="4"><div align="center">DONOR REGISTRATION</div></td>
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
      <td class="field">Age</td>
      <td class="field">:</td>
      <td colspan="2"><input type="text" name="age" id="textfield7" /></td>
    </tr>
    <tr>
      <td class="field">Gender</td>
      <td class="field">:</td>
      <td colspan="2"><select name="gn" id="select">
        <option>--Select--</option>
        <option>Male</option>
        <option>Female</option>
        </select>        </td>
    </tr>
    <tr>
      <td class="field">Date of Birth</td>
      <td class="field">:</td>
      <td><input type="date" name="dob" id="textfield9" /></td>
      <td>YY-MM-DD</td>
    </tr>
    <tr>
      <td class="field">Weight</td>
      <td class="field">:</td>
      <td><input type="text" name="weight" id="textfield10" /></td>
      <td>Kg</td>
    </tr>
    <tr>
      <td class="field">Blood Group</td>
      <td class="field">&nbsp;</td>
      <td colspan="2"><select name="bg" size="1" id="bg">
          <option>- - Select - -</option>
          <option>A+</option>
          <option>A-</option>
          <option>B+</option>
          <option>B-</option>
          <option>AB+</option>
          <option>AB-</option>
          <option>O+</option>
          <option>O-</option>
        </select></td>
    </tr>
 
    <tr>
      <td colspan="4" class="field">&nbsp;</td>
      </tr>
    <tr>
      <td colspan="4" class="cptn">Contact Informations</td>
      </tr>
    <tr>
      <td colspan="4" class="field">&nbsp;</td>
      </tr>
    <tr>
      <td class="field">State</td>
      <td class="field">:</td>
      <td colspan="2"><input type="text" name="state" id="textfield13" /></td>
    </tr>
    <tr>
      <td class="field">City</td>
      <td class="field">:</td>
      <td colspan="2"><input type="text" name="city" id="textfield14" /></td>
    </tr>
    <tr>
      <td class="field">Pin Code</td>
      <td class="field">:</td>
      <td colspan="2"><input type="text" name="pc" id="textfield15" /></td>
    </tr>
    <tr>
      <td class="field">Mobile Number</td>
      <td class="field">:</td>
      <td colspan="2">
        <input name="mob_num" type="tel" id="textfield5" value="91" />      </td>
    </tr>
    <tr>
      <td class="field">E-mail ID</td>
      <td class="field">:</td>
      <td colspan="2">
        <input type="email" name="email" id="textfield6" />      </td>
    </tr>

    <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2" align="right">
        <input type="submit" name="submit" id="button" value="Submit" />      </td>
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