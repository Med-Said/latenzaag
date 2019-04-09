{/* // {{-- as default we hide all forms --}} 
// {{-- user forms --}} */}


$('#userAfficherForm').css('display','none');
$('#userSupprimerForm').css('display','none');
$('#userContacterForm').css('display','none');
// {{-- commande forms --}}
$('#commandeAfficherForm').css('display','none');
$('#commandeAjouterForm').css('display','none');
$('#commandeModifierForm').css('display','none');
$('#commandeSupprimerForm').css('display','none');
// // {{-- article forms --}}
$('#articleAfficherForm').css('display','none');
$('#articleAjouterForm').css('display','none');
$('#articleModifierForm').css('display','none');
$('#articleSupprimerForm').css('display','none');






//temporaire formilaire d'ajout des articles

$("#addArticle").click(function (e) { 
    $("#articleAjouterForm").toggle();
    if($("#addArticle").text() == "Afficher"){
        $("#addArticle").text("Cacher");
    }else{
        $("#addArticle").text("Afficher");
    }
    
});


// when one of admin icons is clicked 
// $('#addIcon img').on('click',function(){
//     modeHandler('add');
//     $('#formRemoveServer').css('display','none');
//     $('#formUpdateServer').css('display','none');
//     $('#formViewServer').css('display','none');
//     $('#formAddServer').css('display','block');
//     fetchServerData();

//     $('#formRemoveUser').css('display','none');
//     $('#formUpdateUser').css('display','none');
//     $('#formAddUser').css('display','block');
// });