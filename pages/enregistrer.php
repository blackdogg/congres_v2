<form class="scan_form" name="add_part" method="post" action="">
	<legend>Enregistrer le participant</legend>
	<div class="frm_row"><label for="nom">Nom </label><input type="text" name="nom" id="nom" /></div>
	<div class="frm_row"><label for="pnom">Prenom </label><input type="text" name="pnom" id="pnom" /></div>
	<div class="frm_row"><input type="submit" name="valider" id="valider" value="Valider"/></div>
</form>

<?php
if(isset($_POST['valider'])){
	$insertParticipant = $db->prepare("INSERT INTO `participant`( `code`, `nom`, `prenom`) VALUES (:code,:nom,:pnom)");
	$insertParticipant->execute(array('code'=>$_GET['c'],'nom'=>$_POST['nom'],'pnom'=>$_POST['pnom']));
	safe_redirect("index.php");
}
?>