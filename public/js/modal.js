// Quand on clique sur le bouton supprimer  
$('.trash').click(function(){
    // Récupération de l'id
    var id=$(this).data('id');
    // Ajout du href avec l'id
    $('#modalDelete').attr('href','editionchapter&deletechapter&id='+id);
})

// Quand on clique sur le bouton supprimer  
$('.trash2').click(function(){
    // Récupération de l'id
    var idPost=$(this).data('idpost');
    var id=$(this).data('id');

    // Ajout du href avec l'id
    $('#modalDeleteC').attr('href','deletecomment&id_post='+idPost+'&id='+id,);
})