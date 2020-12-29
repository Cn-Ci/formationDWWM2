$("tbody").load("db_voitures.php")

$("#marque").on("change", function(e){
    const marqueSelectionnee = $("#marque :selected").val();
    if(marqueSelectionnee){
        $("#modele").load("db_voitures.php?marque=" + marqueSelectionnee);
        $("tbody").load("db_voitures.php?marque=" + marqueSelectionnee + "&afficher=tableau");
    } else {
        $("#modele").load("db_voitures.php?marque=");
        $("tbody").load("db_voitures.php")
    }
})

$("#modele").on("change", function(e){
    const modeleSelectionne = $("#modele :selected").val();
    const marqueSelectionnee = $("#marque option:selected").val();
    if(modeleSelectionne){
        $("tbody").load("db_voitures.php?marque=" + marqueSelectionnee + "&modele=" + modeleSelectionne + "&afficher=tableau");
    } else {
        $("tbody").load("db_voitures.php?marque=" + marqueSelectionnee + "&afficher=tableau");
    }
})