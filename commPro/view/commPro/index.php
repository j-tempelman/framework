<div class="top-menu">
    <img class="logo" src="../../public/img/logo.png" alt="Logo">

</div>
<div class="side-menu">
<p class="icons" ><a href="http://framework.dev/commpro/phone/add/1"><span class = 'fa fa-apple'></span></a></p>
<p class="icons" ><a href="http://framework.dev/commpro/phone/add/2"><span class = 'fa fa-android'></span></a></p>
<p class="icons" ><a href="http://framework.dev/commpro/phone/add/3"><span class = 'fa fa-windows'></span></a></p>
<p class="icons" ><a href="http://framework.dev/commpro/phone/view"><span class = 'fa fa-table'></span></a></p>

</div>
<div class="content">
<form action="/commpro/phone/save" method="post" autocomplete="off">

	<p><input type="text" name="type" placeholder="type nummer" /></p>

	<p><input type="text" name="serial" placeholder="serienummer" /></p>

	<p><input type="text" name="imei" placeholder="IMEI nummer" /></p>

	<p><input type="hidden" name="brandid" value="<?=$brandid; ?>"></p>

<button>opslaan</button>
</form>
</div>

