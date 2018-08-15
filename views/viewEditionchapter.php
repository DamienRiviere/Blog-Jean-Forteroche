<?php $this->_t = "Modifier ou supprimer un chapitre"; ?>

<div class="container-page bg-light">
    <div class="container col-lg-8">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">Date de création</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($chapters as $chapter): ?>
                <tr>
                    <th scope="row"><?= $chapter->id() ?></th>
                    <td><?= $chapter->title() ?></td>
                    <td><?= $chapter->author() ?></td>
                    <td><?= $chapter->date() ?></td>
                    <td>
                        <div class="btn-group btn-group-sm" role="group">
                            <a href="editchapter&amp;id=<?= $chapter->id() ?>" class="btn btn-primary">Modifier</a>
                            <a href="editionchapter&amp;deletechapter&amp;id=<?= $chapter->id() ?>" class="btn btn-danger">Supprimer</a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal 
<div class="modal fade" id="modalDeleteChapter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Supression du <?= $chapter->title() ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir supprimer le chapitre ?   
            </div>
            <div class="modal-footer">
                <a href="" class="btn btn-danger">Supprimer</a>
                <a href="" class="btn btn-secondary" data-dismiss="modal">Annuler</a>
            </div>
        </div>
    </div>
</div>
-->

