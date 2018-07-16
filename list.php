
<div style="padding:100px">
<form method="post" action="voted.php" >

<table id = "t1" align="center">
<tr>	
<th>symbol</th>
<th>name</th>
<th>vote</th>
</tr>
<tr>
	<td><img src="tdp.png" alt="TDP" width="120" height="80"></td>
	<td>TDP</td>
	<td><input type="radio" id = "vote"  name="vote" value="TDP" required/></td>
</tr>
<tr>
	<td><img src="bjp.png" alt="BJP" width="120" height="80"></td>
	<td>BJP</td>
	<td><input type="radio" id = "vote"  name="vote" value="BJP" /></td>
</tr><tr>
	<td><img src="congress.png" alt="CONGRESS" width="120" height="80"></td>
	<td>CONGRESS	 </td>
	<td><input type="radio" id = "vote" name="vote" value="CONGRESS" /></td>
</tr>
</table>
<br/>





<div style="text-align:center">
<input class="btnSubmit" align="right" type="submit" onClick="check()"/></div>
</form>
</div>
