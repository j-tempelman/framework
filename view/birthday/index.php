<p>Lijst met verjaardagen:</p>

<ul>
	<?php
		foreach($datas as $data):
	?>
		<table>
		  <tr>
		    <td> <li class="lefttb"> <?=$data["person"]?> </li> </td>
		    <td> <li class="righttb"> <?=$data["day"]?> <?=$data["month"]?> <?=$data["year"]?> </li> </td>
		  </tr>
		</table>
	<?php
		endforeach;
	?>
</ul>