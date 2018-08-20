// Quand on clique sur le bouton supprimer  
$('.trash').click(function(){
    // Récupération de l'id
    var id=$(this).data('id');
    // Ajout du href avec l'id
    $('#modalDelete').attr('href','editionchapter&deletechapter&id='+id);
})