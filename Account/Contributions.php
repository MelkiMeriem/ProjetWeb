<div class="row">
    
    <button id="campaigns" class="button ">Campaigns</button>
    <button id="funds" class="button ">Funds</button>
</div>
<div class="container Display fundsDisplay" id="fundsDisplay">
		
        <?php include("../Account/FundsDisplay.php");?>
</div>

	<div class="w3-row-padding w3-grayscale Display campaignsDisplay" id="campaignsDisplay">
      
        <?php include("../Account/CampaignsDisplay.php");?>
    </div>

<script>
    let aff1 = document.getElementById('fundsDisplay');
    let aff2 = document.getElementById('campaignsDisplay');
    document.getElementById('funds').style.backgroundColor = "rgb(162, 158, 158)";
        document.getElementById('campaigns').style.backgroundColor = "white";
    aff2.hidden = true;
    document.getElementById('funds').addEventListener('click',()=>{
        document.getElementById('funds').style.backgroundColor = "rgb(162, 158, 158)";
        document.getElementById('campaigns').style.backgroundColor = "white";
        aff1.hidden = false;
        aff2.hidden = true;
    })
    document.getElementById('campaigns').addEventListener('click',()=>{
        document.getElementById('funds').style.backgroundColor = "white";
        document.getElementById('campaigns').style.backgroundColor = "rgb(162, 158, 158)";
        
        aff2.hidden = false;
        aff1.hidden = true;
    })
</script>