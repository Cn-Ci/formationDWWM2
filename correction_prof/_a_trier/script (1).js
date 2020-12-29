
$("#marque").on("change", function(e){
    const marqueSelectionnee = $(":selected").val();
    $("#modele").load("db_voitures.php?marque=" + marqueSelectionnee);
})