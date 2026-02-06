<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <?php
    $md = "Use an appropriate md";
    $title = "About Us";
    include 'header1.php'; 
    ?>
    <title><?php echo $title; ?></title>
     
        <title>
            <?php if(isset($title) && !empty($title))
            {
                echo $title;
            }
            else
                {
                    echo "DEFAULT TITLE TAG";
                }
            ?>
        </title>
    

</body>
<main>
    <h1>About Us</h1>
    <p>Prohibere. Striga! Ut custodiant te sermonem dicens - periculi ... periculo! Non ego illud numquam. Dixi sunt implicatae. Elatus deinde manubrio! 

Gus sit amet suum motum. Nescio quando, aut quomodo, nescio quo. Illud scio, amet tortor. Suarum impotens prohibere eum. 

Sum expectantes. Ego hodie expectantes. Expectantes, et misit unum de pueris Gus interficere. Et suus vos. Nescio quis, qui est bonus usus liberi ad Isai? Qui nosti ... Quis dimisit filios ad necem ... hmm? Gus! Est, ante me factus singulis decem gradibus. Et nunc ad aliud opus mihi tandem tollendum est puer ille consensus et nunc fugit. Ipse suus obtinuit eam. Non solum autem illa, sed te tractantur in se trahens felis. 

No! Hoc non credant? Gus habet cameras ubique placet. Audire te! Non, omnia novit, omnia simul. Ubi eras hodie? In Lab! Et vos nolite cogitare suus 'possible ut Tyrus de cigarette elevaverunt CAPSA vestris? Age! Tu non vides? Pompeius extrema partem es. Tu omne quod ille voluit. </p>
</main>
<?php include 'footer1.php'; ?>

